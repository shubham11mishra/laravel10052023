<?php

namespace App\Listeners;

use App\Events\RegisteredLoginUser;
use App\Mail\LoginUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendLoginUserNotification
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
    public function handle(RegisteredLoginUser $event): void
    {
        //

        Mail::to($event->loginUser->email)->send(new LoginUserNotification($event->loginUser));

      
    }
}
