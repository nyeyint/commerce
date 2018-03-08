<?php

namespace App\Listeners;

use App\Events\CartSuccessfullyAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleCartAdded
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
     * @param  CartSuccessfullyAdded  $event
     * @return void
     */
    public function handle(CartSuccessfullyAdded $event)
    {
        //
    }
}
