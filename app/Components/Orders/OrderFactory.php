<?php

namespace App\Components\Orders;

use Cart;
use Uuid;
use Exception;
use App\Order;
use App\OrderDetails;
use App\PaymentChannel;
use App\Events\Email\SentMail;
use App\Exceptions\OrderNotFoundException;
use App\Exceptions\InvalidOrderStatusException;


class OrderFactory {

  /**
   * Order Status Paid.
   *
   * @return string
   */

  const ORDER_STATUS_PAID = 'paid';

  /**
   * Order Status Unpaid.
   *
   * @return string
   */

  const ORDER_STATUS_UNPAID = 'unpaid';

  /**
   * Order Status Shipped.
   *
   * @return string
   */

  const ORDER_STATUS_SHIPPED = 'shipped';

  /**
   * Order Status Unknown.
   *
   * @return string
   */

  const ORDER_STATUS_UNKNOWN = 'unknown';

  /**
   * Order Status Waiting Confirmation.
   *
   * @return string
   */

  const ORDER_STATUS_WAITING_CONFIRMATION = 'waiting confirmation';

  /**
   * Order Status Waiting Shipment.
   *
   * @return string
   */

  const ORDER_STATUS_WAITING_SHIPMENT = 'waiting shipment';

  /**
   * Order Status Proccessing Payment.
   *
   * @return string
   */

  const ORDER_STATUS_PROCCESSING_PAYMENT = 'proccessing payment';

   /**
   * Order Status Waiting Payment.
   *
   * @return string
   */

  const ORDER_STATUS_WAITING_PAYMENT = 'waiting payment';

  /**
   * Order Status Payment Confirmed.
   *
   * @return string
   */

  const ORDER_STATUS_PAYMENT_CONFIRMED = 'payment confirmed';

  /**
   * Order Status Payment Declined.
   *
   * @return string
   */

  const ORDER_STATUS_PAYMENT_DECLINED = 'payment declined';

  /**
   * Order Status Canceled.
   *
   * @return string
   */

  const ORDER_STATUS_PAYMENT_CANCELED = 'canceled';

  use OrderHelper;

  public function __construct() {
      event('orderfactory.booted');
  }

  public function success() {
      event('payment.paid');

      if(!session()->has('current_order')) {
          return abort(404);
      }

      $order = session('current_order');
      $this->updateStatus($order->order_id, self::ORDER_STATUS_PAYMENT_CONFIRMED);

      return redirect()->route('payment.view.success', encrypt(str_random(18)));

  }

  public function proccess() {
      event('payment.proccess');

      $this->updateStatus(session('order_id'), self::ORDER_STATUS_PROCCESSING_PAYMENT);

      return redirect()->route('payment.view.proccessing', encrypt(str_random(18)));
  }

  public function failed() {

  }

  public function __destruct() {
      event('orderfactory.destroyed');
  }

}
