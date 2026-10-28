<?php

namespace App\Http\Controllers;

use App\Events\ContactEnquiryVerified;
use App\Mail\AdminNotificationMail;
use App\Mail\OtpVerificationMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendOtp(Request $request)
    {
        // Honeypot check
        if ($request->filled('website_url')) {
            return response()->json([
                'status' => 'success',
                'message' => 'Verification code sent to your email.'
            ]);
        }

        $isResend = $request->boolean('is_resend');

        // Time-based bot check (skip for resend)
        if (!$isResend && $request->filled('form_time')) {
            $elapsedSeconds = time() - (int)$request->form_time;
            if ($elapsedSeconds < 2) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Automated submission detected. Please try again.'
                ], 429);
            }
        }

        // 1-minute cooldown for resend
        if ($isResend) {
            $lastSentAt = session('contact_otp_sent_at');
            if ($lastSentAt && (time() - (int)$lastSentAt) < 60) {
                $remaining = 60 - (time() - (int)$lastSentAt);
                return response()->json([
                    'status'  => 'error',
                    'message' => "Please wait {$remaining} seconds before requesting a new code."
                ], 429);
            }
            // Resend: skip reCAPTCHA (user already proved human on first send)
            // But ensure they actually went through sendOtp before
            if (!session('contact_otp_email')) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Invalid request. Please reload the page and try again.'
                ], 422);
            }
        } else {
            // First send: verify reCAPTCHA
            $recaptchaSecret = config('services.recaptcha.secret_key');
            if ($recaptchaSecret) {
                $recaptchaToken = $request->input('g-recaptcha-response');
                if (empty($recaptchaToken)) {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Please complete the Google reCAPTCHA verification.'
                    ], 422);
                }

                try {
                    $response = Http::asForm()->timeout(8)->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret'   => $recaptchaSecret,
                        'response' => $recaptchaToken,
                        'remoteip' => $request->ip(),
                    ]);

                    if (!$response->json('success')) {
                        return response()->json([
                            'status' => 'error',
                            'message' => 'Google reCAPTCHA verification failed. Please try again.'
                        ], 422);
                    }
                } catch (\Exception $e) {
                    logger()->warning('Google reCAPTCHA exception: ' . $e->getMessage());
                }
            }
        }

        // Validate input
        $validated = $request->validate([
            'name'    => 'required|string|max:125',
            'email'   => 'required|email:rfc|max:100',
            'mobile'  => 'nullable|string|max:20',
            'message' => 'required|string|min:5|max:2000',
        ]);

        $otp             = (string) rand(100000, 999999);
        $normalizedEmail = strtolower(trim($validated['email']));

        // Store OTP in session (reliable across AJAX requests in same browser)
        session([
            'contact_otp'         => $otp,
            'contact_otp_email'   => $normalizedEmail,
            'contact_otp_expires' => now()->addMinutes(10)->timestamp,
            'contact_otp_sent_at' => time(),
        ]);

        Mail::to($validated['email'])->queue(new OtpVerificationMail($otp));

        return response()->json([
            'status'  => 'success',
            'message' => $isResend
                ? 'A new verification code has been sent to ' . $validated['email'] . '.'
                : 'A 6-digit verification code has been sent to ' . $validated['email'] . '. Please enter it below to complete your submission.'
        ]);
    }

    public function verifyAndSubmit(Request $request)
    {
        // Honeypot check
        if ($request->filled('website_url')) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Thank you! Your inquiry has been submitted successfully.'
            ]);
        }

        // Validate input
        $validated = $request->validate([
            'name'    => 'required|string|max:125',
            'email'   => 'required|email|max:100',
            'mobile'  => 'nullable|string|max:20',
            'message' => 'required|string|min:5|max:2000',
            'otp'     => 'required|digits:6',
        ]);

        $normalizedEmail = strtolower(trim($validated['email']));

        // Retrieve OTP from session
        $sessionOtp     = session('contact_otp');
        $sessionEmail   = session('contact_otp_email');
        $sessionExpires = session('contact_otp_expires');

        // Debug log (temporary — remove after confirming fix)
        \Log::info('OTP Verify Debug', [
            'submitted_email'  => $normalizedEmail,
            'session_email'    => $sessionEmail,
            'session_otp'      => $sessionOtp,
            'submitted_otp'    => $validated['otp'],
            'expired'          => $sessionExpires ? now()->timestamp > $sessionExpires : 'no_expiry',
        ]);

        // Validate OTP: must exist, match, be for same email, and not expired
        if (
            !$sessionOtp ||
            !$sessionEmail ||
            $sessionEmail !== $normalizedEmail ||
            $sessionOtp !== $validated['otp'] ||
            now()->timestamp > (int) $sessionExpires
        ) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Invalid or expired verification code. Please check your inbox or request a new one.'
            ], 422);
        }

        // Save contact
        $contact = Contact::create([
            'name'        => $validated['name'],
            'email'       => $validated['email'],
            'mobile'      => $validated['mobile'] ?? null,
            'message'     => $validated['message'],
            'is_Verified' => true,
            'verified_at' => now(),
        ]);

        // Clear OTP from session
        session()->forget(['contact_otp', 'contact_otp_email', 'contact_otp_expires', 'contact_otp_sent_at']);

        // Fire event → ThankYou mail via queued listener
        event(new ContactEnquiryVerified($contact));

        // Notify admin about new enquiry
        Mail::to('shakya.shivam6@gmail.com')->queue(new AdminNotificationMail($contact));

        return response()->json([
            'status'  => 'success',
            'message' => 'Thank you, ' . $validated['name'] . '! Your inquiry has been verified and submitted successfully. I will contact you soon.'
        ]);
    }
}

