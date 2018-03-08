<?php

namespace App\Listeners;

use App\Events\SocialMediaRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPromotionEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SocialMediaRegistered  $event
     * @return void
     */
    public function handle(SocialMediaRegistered $event)
    {
        //
    }
}
