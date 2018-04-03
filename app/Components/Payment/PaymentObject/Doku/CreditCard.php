<?php

namespace App\Components\Payment\PaymentObject\Doku;

use GuzzleHttp\Client;
use App\Components\Payment\PaymentObject\BasePaymentGateway;

class CreditCard extends BasePaymentGateway
{
    protected $devEndpoint = 'http://staging.doku.com';
    protected $prodEndpoint = 'https://pay.doku.com';
    protected $mallId = '4973';
    protected $sharedKey = '57YhfSMgFc66';

    public function __construct()
    {
        $this->http = new Client();
    }

    /**
     * Handling Payment Object.
     *
     * @return void
     */

    public function handle()
    {
        $item = '';
        $amount = '0';
        $trId = 'BJMS-BAHE736DG';
        foreach ($this->cart as $c) {
            $item .= $c->name . ',' . $c->price . ',' . $c->qty . ',' . $c->price . ';';
            $amount = $amount + $c->price;
        }

        $data = [
                'MALLID' => $this->mallId,
                'CHAINMERCHANT' => 'NA',
                'AMOUNT' => $amount,
                'PURCHASEAMOUNT' => $amount,
                'TRANSIDMERCHANT' => 'BJMS-BAHE736DG',
                'WORDS' => hash('sha1', $amount . $this->mallId . $this->sharedKey . 'BJMS-BAHE736DG'),
                'REQUESTDATETIME' => date('YmdHis'),
                'CURRENCY' => '360',
                'PURCHASECURRENCY' => '360',
                'SESSIONID' => str_random(15),
                'NAME' => $this->user->name,
                'EMAIL' => $this->user->email,
                'BASKET' => $item,
            ];
        return view('payment_gateway.doku-creditcard', compact('data'))->with('url', $this->devEndpoint . '/Suite/Receive');
    }

    /**
     * Handle Payment Gateway Response.
     *
     * @param $request \Illuminate\Http\Request
     */

    public function response($request)
    {
    }
}
