<?php

namespace App\Components\Payment\PaymentObject;

class PaymentGatewayRegistry{

	/**
	 * Register the Payment Gateway Object based on prefix.
	 *
	 * @var array
	 */

	public $paymentGateways = [];

	/**
	 * Register the Payment Gateway Root Prefix.
	 *
	 * @var array
	 */

	public $paymentChannel  = [];

	/**
	 * Register new Payment Gateway Instance.
	 *
	 * @param $name string
	 * @param PaymentGateway Interface Implementation.
	 * @return $this
	 */

	public function register($name, PaymentGateway $instance) {
			$this->paymentGateways[$name] = $instance;
			return $this;
	}

	/**
	 * Register Root Payment Channel.
	 *
	 * @return void
	 */

	 public function registerChannel($prefix) {
		 	$this->paymentChannel[] = $prefix;
	 }

	/**
	 * Get the PaymentGateway instance.
	 *
	 * @param $name string
	 * @return PaymentGateway Implementation Instance.
	 */

	public function get($name) {
			if(array_key_exists($name, $this->paymentGateways)) {
					return $this->paymentGateways[$name];
			}

			throw new PaymentGatewayNotFound("Undefined Payment Gateway Instance under prefix [{$name}]");

	}

}
