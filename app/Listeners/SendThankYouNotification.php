<?php

namespace App\Listeners;

use App\Events\ContactEnquiryVerified;
use App\Mail\ThankYouMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendThankYouNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(ContactEnquiryVerified $event): void
    {
        // User ko Thank-You mail bhejna
        Mail::to($event->contact->email)->send(new ThankYouMail($event->contact));
    }
}
