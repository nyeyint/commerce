<?php

namespace App\Components\Payment\PaymentObject;

use GuzzleHttp\Client;
use App\UserPhone;
use App\Address;
use App\Order;
use App\User;

class BasePaymentGateway implements PaymentGateway {

	/**
	 * An GuzzleHttp Wrapper.
	 *
	 * @return \GuzzleHttp Instance.
	 */

	public $http;

	/**
	 * The Cart Object.
	 *
	 * @return \Cart Instance.
	 */

	public $cart;

	/**
	 * Customer Object
	 *
	 * @return App\User Instance.
	 */

	public $user;

	/**
	 * Address Object
	 *
	 * @return App\Address Instance.
	 */

	public $address;

	/**
	 * Order Object.
	 *
	 * @return App\Order instance.
	 */

	public function __construct() {

	}


	/**
	 * Set the property based on curent User Session.
	 *
	 * @return $this
	 */

	public function pay(User $user, Address $address, $userPhone, Order $order) {
		$this->user      = $user;
		$this->userPhone = $userPhone;
		$this->address   = $address;
		$this->order     = $order;

		return $this;
	}

	/**
	 * Handling Payment Object.
	 *
	 * @return mixed
	 */

	public function handle() {
		\Log::info('Called from BasePaymentGateway');
	}

	/**
	 * Handle Payment Gateway Response.
	 *
	 * @param $params mixed|string|array
	 */

	public function response($params) {

	}

	/**
	 * Handle Payment Gateway Notification.
	 *
	 * @param $params mixed|string|array
	 */

	public function notify($params) {

	}

	/**
	 * Handle Payment Gateway Review.
	 *
	 * @param $params mixed|string|array
	 */

	public function review($params) {

	}

	/**
	 * Handle Payment Gateway Failed Payment.
	 *
	 * @param $params mixed|string|array
	 */

	public function failed($params) {

	}

	/**
	 * Payment is successfull!
	 *
	 * @return mixed
	 */

	 protected function orderSuccess() {
				return app('order')->success();
	 }

	 /**
	  * Payment is failed!
		*
		* @return mixed
		*/

		protected function orderFailed() {
				return app('order')->failed();
		}

		/**
		 * Payment is received, but needed an confirmation.
		 *
		 * @return mixed.
		 */

		protected function orderProccess() {
				return app('order')->proccess();
		}


}
