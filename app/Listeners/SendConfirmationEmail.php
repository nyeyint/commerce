<?php

namespace App\Listeners;

use App\User;
use App\Mail\RegisterConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationEmail implements ShouldQueue
{
    
    /**
     * User Objects
     *
     * @return Object
     */

    protected $user;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  SocialMediaRegistered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        // Mail::to($event->user->email)->send(new RegisterConfirmation($event->user));
        \Log::info('listener of SendConfirmationEmail executed');
    }
}
