<?php

namespace App\Components\Payment\PaymentObject\Midtrans;

use Cart;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Components\Payment\PaymentObject\BasePaymentGateway;

class VTWeb extends BasePaymentGateway
{
    protected $orderFactory;
    protected $veritrans;

    public function __construct()
    {
        $this->http = new Client();
        $this->orderFactory = app('order');
        $this->veritrans = app('veritrans')
                                ->setServerKey(setting('payment.midtrans_server_key'))
                                ->setProduction(false);
    }

    /**
     * Handling Payment Object.
     *
     * @return void
     */

    public function handle()
    {
        $transaction_details = [
             'order_id' => session('order_id'),
             'gross_amount' => $this->order->total + session('shipping_method')->cost[0]->value
         ];

        $customer_details = [
             'first_name' => $this->user->name,
             'email' => $this->user->email,
             'phone' => $this->userPhone->number
         ];

        $custom_expiry = [
            'start_time' => Carbon::now(),
            'unit' => 'day',
            'duration' => 2
        ];

        $transaction_data = [
            'payment_type' => 'vtweb',
            'vtweb' => [
                'credit_card_3d_secure' => true
            ],
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details
        ];

        $redirect_url = $this->veritrans->vtRedirectUrl($transaction_data);
        return redirect()->away($redirect_url);
    }

    /**
     * Handle Payment Gateway Response.
     *
     * @param $params mixed|string|array
     */

    public function response($params)
    {
        return $this->orderProccess();
    }

    /**
     * Handle payment gateway notification.
     *
     * @return void
     */

    public function notify($request)
    {
        $orderId = array_key_exists('order_id', $request)
                    ? $request['order_id']
                    : null;

        // before we update the order status in database, we need to make sure
        // the request is coming from midtrans server, to check it,
        // we need to make API Call to the midtrans API.
        
        try {
            $real_request = $this->veritrans->transactionStatus($orderId);
        } catch (\Exception $e) {
            return;
        }
        
        $status = [
            'success' 	 => $this->orderFactory::ORDER_STATUS_PAID,
            'capture'    => $this->orderFactory::ORDER_STATUS_PAID,
            'settlement' => $this->orderFactory::ORDER_STATUS_PROCCESSING_PAYMENT,
            'pending' 	 => $this->orderFactory::ORDER_STATUS_WAITING_PAYMENT,
            'deny' 		 => $this->orderFactory::ORDER_STATUS_PAYMENT_DECLINED,
            'failure' 	 => $this->orderFactory::ORDER_STATUS_PAYMENT_CANCELED
        ];

        $orderId = $real_request->order_id;
        $code    = $real_request->transaction_status;

        if (array_key_exists($code, $status)) {
            // update order status.
            $this->orderFactory->updateStatus($orderId, $status[$code]);

            // do whatever you want here!
        }
    }
}
