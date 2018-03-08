<?php

namespace App\Components\Payment\PaymentObject;
use App\UserPhone;
use App\Address;
use App\Order;
use App\User;

interface PaymentGateway {

	/**
	 * Create new Payment Instance based curent User.
	 *
	 * @return void
	 */

	public function pay(User $user, Address $address, $userPhone, Order $order);

	/**
	 * Handling Payment Requests.
	 *
	 * @return void
	 */

	public function handle();

	/**
	 * Handle Payment Gateway Response.
	 *
	 * @param $params mixed|string|array
	 */

	public function response($params);

	/**
	 * Handle Payment Gateway Notification.
	 *
	 * @param $params mixed|string|array
	 */

	public function notify($params);

	/**
	 * Handle Payment Gateway Review.
	 *
	 * @param $params mixed|string|array
	 */

	public function review($params);

	/**
	 * Handle Payment Gateway Failed Payment.
	 *
	 * @param $params mixed|string|array
	 */

	public function failed($params);

}
