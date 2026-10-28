<?php

namespace App\Http\Controllers;

use App\Events\ContactEnquiryVerified;
use App\Mail\OtpVerificationMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendOtp(Request $request)
    {
        if ($request->filled('website_url')) {
            return response()->json([
                'status' => 'success',
                'message' => 'Verification code sent to your email.'
            ]);
        }

        if ($request->filled('form_time')) {
            $elapsedSeconds = time() - (int)$request->form_time;
            if ($elapsedSeconds < 2) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Automated submission detected. Please try again.'
                ], 429);
            }
        }

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
                    'secret' => $recaptchaSecret,
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
                logger()->warning('Google reCAPTCHA verification exception: ' . $e->getMessage());
            }
        }

        $validated = $request->validate([
            'name' => 'required|string|max:125',
            'email' => 'required|email:rfc|max:100',
            'mobile' => 'nullable|string|max:20',
            'message' => 'required|string|min:5|max:2000',
        ]);

        $otp = (string) rand(100000, 999999);

        Cache::put('contact_otp_' . strtolower(trim($validated['email'])), $otp, now()->addMinutes(10));

        Mail::to($validated['email'])->queue(new OtpVerificationMail($otp));

        return response()->json([
            'status' => 'success',
            'message' => 'A 6-digit verification code has been sent to ' . $validated['email'] . '. Please enter it below to complete your submission.'
        ]);
    }

    public function verifyAndSubmit(Request $request)
    {
        if ($request->filled('website_url')) {
            return response()->json([
                'status' => 'success',
                'message' => 'Thank you! Your inquiry has been submitted successfully.'
            ]);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:125',
            'email' => 'required|email|max:100',
            'mobile' => 'nullable|string|max:20',
            'message' => 'required|string|min:5|max:2000',
            'otp' => 'required|digits:6',
        ]);

        $normalizedEmail = strtolower(trim($validated['email']));

        // 👇 TEMP DEBUG — remove after confirming fix
        \Log::info('OTP Verify Debug', [
            'normalized_email' => $normalizedEmail,
            'cache_key'        => 'contact_otp_' . $normalizedEmail,
            'cached_otp'       => \Cache::get('contact_otp_' . $normalizedEmail),
            'submitted_otp'    => $validated['otp'],
            'cache_driver'     => config('cache.default'),
        ]);

        $cachedOtp = Cache::get('contact_otp_' . $normalizedEmail);

        if (!$cachedOtp || $cachedOtp != $validated['otp']) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid or expired verification code. Please check your inbox or request a new one.'
            ], 422);
        }

        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile' => $validated['mobile'] ?? null,
            'message' => $validated['message'],
            'is_Verified' => true,
            'verified_at' => now(),
        ]);

        Cache::forget('contact_otp_' . $normalizedEmail);

        event(new ContactEnquiryVerified($contact));

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you, ' . $validated['name'] . '! Your inquiry has been verified and submitted successfully. I will contact you soon.'
        ]);
    }
}

