<?php

namespace App\Listeners;

use App\Events\UserUpdated;
use App\Mail\UserUpdatedEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendUserUpdatedEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserUpdated $event): void
    {
        Mail::to($event->user->email)->send(new UserUpdatedEmail($event->user));
    }
}
