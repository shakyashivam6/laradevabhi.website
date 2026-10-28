<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OtpVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;

    public function __construct($otp)
    {
        $this->otp = $otp; // Controller se aya OTP class property me set kiya
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Verification Code - Abhishek Kumar',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.otp', // resources/views/emails/otp.blade.php
        );
    }
}