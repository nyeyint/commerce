<?php

namespace App\Components\Payment\PaymentObject\Sprint;

use GuzzleHttp\Client;
use App\Components\Payment\PaymentObject\BasePaymentGateway;

class SprintCreditCard extends BasePaymentGateway {

	public function __construct() {

	}

	/**
	 * Handling Payment Object.
	 *
	 * @return void
	 */

	public function handle() {
		$this->http = new Client();
	}

	/**
	 * Handle Payment Gateway Response.
	 *
	 * @param $request \Illuminate\Http\Request
	 */

	public function response($request) {

	}

}
