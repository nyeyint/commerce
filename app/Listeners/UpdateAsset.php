<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Artisan;

class UpdateAsset
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
     * @param  FileDeleted  $event
     * @return void
     */
    public function handle()
    {
        \Log::info('Asset updated!');
        return Artisan::call('asset:update');
    }
}
