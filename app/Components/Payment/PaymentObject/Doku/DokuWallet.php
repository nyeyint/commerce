<?php

namespace App\Components\Payment\PaymentObject\Doku;

use GuzzleHttp\Client;
use App\Components\Payment\PaymentObject\BasePaymentGateway;

class DokuWallet extends BasePaymentGateway {

	protected $devEndpoint = 'http://staging.doku.com/Suite/Receive';
	protected $prodEndpoint = 'https://pay.doku.com/Suite/Receive';
	protected $mallId = '4973';
	protected $sharedKey = '57YhfSMgFc66';

	public function __construct() {
		$this->http = new Client();
	}

	/**
	 * Handling Payment Object.
	 *
	 * @return void
	 */

	public function handle() {
		return redirect()->away('https://facebook.com');
	}

	/**
	 * Handle Payment Gateway Response.
	 *
	 * @param $request mixed|string|array
	 */

	public function response($request) {
		dd($request);
	}

}
