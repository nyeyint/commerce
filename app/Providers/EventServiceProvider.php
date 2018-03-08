<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SocialMediaRegistered' => [
            'App\Listeners\SendPromotionEmail'
        ],
        'Illuminate\Auth\Events\Registered' => [
            'App\Listeners\SendConfirmationEmail'
        ],
        'Illuminate\Auth\Events\PasswordReset' => [
            'App\Listeners\PasswordResetListener'
        ],
        'App\Events\CartSuccessfullyAdded' => [
            'App\Listeners\HandleCartAdded'
        ],
        'App\Events\Email\SentMail' => [
            'App\Listeners\Email\ParseMail',
        ],
        'App\Events\GenerateInvoices' => [
            'App\Listeners\GenerateInvoicesListener'
        ],

        // listener below used to update the asset for every event triggered.
        'TCG\Voyager\Events\BreadAdded' => [
            'App\Listeners\UpdateAsset'
        ],
        'TCG\Voyager\Events\BreadChanged' => [
            'App\Listeners\UpdateAsset'
        ],
        'TCG\Voyager\Events\BreadDataChanged' => [
            'App\Listeners\UpdateAsset'
        ],
        'TCG\Voyager\Events\BreadImagesDeleted' => [
            'App\Listeners\UpdateAsset'
        ],
        'TCG\Voyager\Events\FileDeleted' => [
            'App\Listeners\UpdateAsset'
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
