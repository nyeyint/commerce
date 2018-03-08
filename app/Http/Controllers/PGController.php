<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Events\Email\SentMail;

class PGController extends Controller
{
    public function __construct() {

    }

    public function proccessPayment() {
        return view('payment.proccess');
    }

    public function preparePayment() {
        event('payment.prepare', user());

        // set Order Id, create order & sent email.
        app('order')->setOrderId();
        $order    = session()->has('current_order')
                        ? session('current_order')
                        : app('order')->createUnpaidOrder();
        $invoice  = json_decode($order->invoice, true);
        $user     = app('order')->getUserByOrder($order);
        $data     = [
            "order" => $order,
            "user"  => $user
        ];
        $template = email_template('order.status.order_confirmed');
        event(new SentMail($template, $data, $user->email, ['order_invoice' => $invoice['absolute_path']]));

        // destroy the cart before redirect to payment gateway.
        app('order')->destroyCart();

        // tambahkan task yang ingin di eksekusi sebelum redirect ke payment gateway disini

        return responseJson([
            'url' => route('payment.redirect', encrypt(str_random(12)))
        ]);
    }

    public function redirectPayment() {
        if(session('payment_method') == null) {
            return redirect()->route('cart.paymentForm');
        }

        $pg    = app('pg')->get(session('payment_method'));
        $order = app('order')->getOrderByOrderId(session('order_id'));

        return $pg->pay(user(), session('shipping_address'), user()->phone, $order)
                  ->handle();

    }

    public function responsePayment(Request $request, $env, $channel) {
        // you can identifying what environtment used on this request
        // by checking on $env variable ['dev', 'staging', 'prod']
        $registry = app('pg');
        if(!session()->has('payment_method')) {
            return abort(404);
        }

        $pgPrefix = session('payment_method');
        return $registry->get($pgPrefix)->response($request->all());
    }

    public function failedPayment(Request $request, $env, $channel) {
        // you can identifying what environtment used on this request
        // by checking on $env variable ['dev', 'staging', 'prod']
        $registry = app('pg');
        if(!session()->has('payment_method')) {
            return abort(404);
        }

        $pgPrefix = session('payment_method');
        return $registry->get($pgPrefix)->failed($request->all());
    }

    public function notifyPayment(Request $request, $env, $channel) {
        // you can identifying what environtment used on this request
        // by checking on $env variable ['dev', 'staging', 'prod']
        $registry = app('pg');
        if(!in_array($channel, $registry->paymentChannel)) {
            return abort(404);
        }

        // sometimes, payment gateway have more than 1 Payment method,
        // for example you create 2 different payment object by 1 payment gateway,
        // doku.credit_card & doku.doku_wallet, each payment object handling different method
        // but, on notify system, system will notify all payment object that prefixed by $channel
        // so, if $channel = doku, then all the doku.* payment object will be notified.
        foreach($registry->paymentGateways as $k => $v) {
            $segments = explode('.', $k);
            if($segments[0] == $channel) {
                \Log::info('Notify ' . $k);
                $registry->get($k)->notify($request->all());
            }
        }

        return responseJson([
            'message' => 'Well, this is not what are you looking for don\'t you?'
        ]);
    }

    public function reviewPayment(Request $request, $env, $channel) {
        // you can identifying what environtment used on this request
        // by checking on $env variable ['dev', 'staging', 'prod']
        $registry = app('pg');
        if(!in_array($channel, $registry->paymentChannel)) {
            return abort(404);
        }

        // payment review is used by some payment gateway to identify transaction status
        // if payment is approved then the payment gateway send an HTTP request to this method
        // but, by limited payment gateway service, we can give channel for each payment method
        // so, system will send all Review status for all payment object that prefixed by $channel.
        foreach($registry->paymentGateways as $k => $v) {
            $segments = explode('.', $k);
            if($segments[0] == $channel) {
                $registry->get($k)->review($request->all);
            }
        }

        return responseJson([
            'message' => 'Well, this is not what are you looking for don\'t you?'
        ]);
    }

    public function successPage() {
        return view('payment.view.success');
    }

    public function proccessingPage() {
        return view('payment.view.proccessing');
    }

   public function failedPage() {
        return view('payment.view.failed');
    }

}
