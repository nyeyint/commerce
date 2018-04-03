<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Exceptions\PaymentGatewayTableMissingException;
use App\Components\Payment\PaymentHelper\MidtransHelper;
use App\Components\Payment\PaymentHelper\VeritransHelper;
use App\Components\Payment\PaymentObject\PaymentGatewayRegistry;

class PaymentGatewayServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // if(!Schema::hasTable('payment_channel')) {
        //     \Log::info('Payment Gateway Table not found! Ignoring Provider Boot.');
        // }
        // else
        // {
        //     $paymentGateways = DB::table('payment_channel')->get();
        //     foreach($paymentGateways as $gateway) {
        //         (str_contains($gateway->prefix, ['.']))
        //           ? $this->app->make(PaymentGatewayRegistry::class)
        //               ->registerChannel(explode('.', $gateway->prefix)[0])
        //           : false;

        //         $class = 'App\Components\Payment\PaymentObject\\' . $gateway->namespace;
        //         class_exists($class)
        //           ? $this->app->make(PaymentGatewayRegistry::class)
        //               ->register($gateway->prefix, new $class)
        //           : \Log::error('Class ' . $class . ' Missing!');
        //     }
        // }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayRegistry::class);
        $this->app->bind('pg', PaymentGatewayRegistry::class);
        $this->app->bind('midtrans', MidtransHelper::class);
        $this->app->bind('veritrans', VeritransHelper::class);
    }
}
