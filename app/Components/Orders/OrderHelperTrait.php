<?php

namespace App\Components\Orders;

use Cart;
use Uuid;
use Exception;
use App\User;
use App\Order;
use Carbon\Carbon;
use App\OrderDetails;
use App\PaymentChannel;
use App\Events\Email\SentMail;
use App\Events\GenerateInvoices;
use App\Exceptions\OrderNotFoundException;
use App\Exceptions\InvalidOrderStatusException;

trait OrderHelper {

   /**
    * Check General Order requirements, like shipping address, method etc.
    *
    * @return bool
    */

    protected function checkAllowance() {
        if(!session()->has('shipping_method')) {
            throw new Exception("Unknown Shipping Method", 500);
        }

        if(!session()->has('payment_method')) {
            throw new Exception("Unknown Payment Method", 500);
        }

        if(!session()->has('order_id')) {
            throw new Exception("Unknown Order ID", 500);
        }

        if(!session()->has('shipping_address')) {
            throw new Exception("Unknown Shipping address", 500);
        }

        return true;
    }

    /**
     * Get Order instances based on order_id field.
     *
     * @param string $orderId
     * @return App\Order instance.
     */

    public function getOrderByOrderId($orderId) {
        $order = Order::where('order_id', $orderId);
        if(!$order->first()) {
            throw new OrderNotFoundException($orderId);
        }

        return $order->first();
    }

    public function getUserByOrder(Order $order) {
        return user($order->user_id);
    }

    /**
     * Send email to customer about the updated status of his/her order.
     *
     * @return void
     */

    protected function sendStatusEmail($orderId, $status) {
        $ignore = [
          'shipped', 'unknown', 'payment confirmed'
        ];

        if(in_array($status, $ignore)) {
            return;
        }

        $template = email_template('order.status_changed');
        $order    = $this->getOrderByOrderId($orderId);
        $user     = $this->getUserByOrder($order);
        $data     = [
            'order' => $order,
            'user' => $user,
        ];
        event(new SentMail($template, $data, $user->email));
    }

    /**
     * Update Order Status.
     *
     * @param   string $orderId
     * @param   string status
     * @return  bool
     */

    public function updateStatus($orderId, $status) {
        $allowed = [
          'unpaid', 'paid', 'shipped', 'waiting shipment', 'waiting confirmation', 'payment confirmed', 'unknown', 'proccessing payment', 'canceled'
        ];

        if(!in_array($status, $allowed)) {
            throw new InvalidOrderStatusException($status);
        }

        $order = $this->getOrderByOrderId($orderId);
        // $this->sendStatusAction($status);
        $order->where('order_id', $orderId)->update(['status' => $status]);

        // Send status email.
        $this->sendStatusEmail($orderId, $status);

    }

    /**
     * Do Action for every status specified, for example send email if order has been shipped.
     *
     * @return void
     */

    protected function sendStatusAction(Order $order, $status, $attachment = null) {
      $allowed = [
        'paid', 'shipped', 'payment confirmed', 'unknown'
      ];

      if(in_array($status, $allowed)) {
          throw new InvalidOrderStatusException($status);
      }

      switch ($status) {
        case 'paid':
            event('order.paid', $order);
            $this->sendOrderStatusEmail($order, $status, $attachment);
          break;

        case 'shipped':
            event('order.shipped', $order);
            $this->sendOrderStatusEmail($order, $status, $attachment);
          break;

        case 'payment confirmed' :
            event('order.payment_confirmed', $order);
            $this->sendOrderStatusEmail($order, snake_case($status), $attachment);
        default:
            return;
          break;
      }

      return;

    }

    /**
     * Send email to user that his/her order has been paid/shipped/confirmed.
     *
     * @param App\Order $order
     * @return void
     */

    protected function sendOrderStatusEmail(Order $order, $status, $attachment = null) {
        $user = $this->getUserByOrder($order);
        $template = email_template('order.status.' . $status);
        $data = [
            'user' => $user,
            'order' => $order
        ];

        event(new SentMail($template, $data, $user->email, $attachment));
    }

    /**
     * Generate an Invoice for an order.
     *
     * @param App\Order $order
     * @param App\User $user
     * @return string
     */

    protected function makeInvoice(Order $order, User $user) {
        $uuid = Uuid::generate();
        $filePath = public_path('/invoices/' . $uuid . '.pdf');
        $urlPath  = url('/invoices?trx_id=' . encrypt($uuid));

        event(new GenerateInvoices($order, $user, $filePath));
        return [
            'absolute_path' => $filePath,
            'url_path' => $urlPath
        ];
    }

    /**
     * Generate an order id and place it in session.
     *
     * @return void
     */

     public function setOrderId() {
        $orderId = "INV-" . Carbon::now()->format('Ymd') .
                      "-" . strtoupper(str_random(10))   .
                      "-" . setting('site.site_prefix')  .
                      "-" . rand();

        session(['order_id' => $orderId]);
     }

     /**
      * Create the Order with unpaid status.
      *
      * @return void
      */

    public function createUnpaidOrder() {

        /* make sure the required data has been set. */
        $this->checkAllowance();

        /* Set Rquired Variables */
        $coupons   = session()->has('shipping_coupons') ? session('shipping_coupons') : '{}';
        $address   = session('shipping_address')->toJson();
        $shipping  = json_encode(session('shipping_method'));
        $payment   = PaymentChannel::where('prefix', session('payment_method'))->first()->toJson();

        /* Create Order Instance */
        $order = Order::create([
            'user_id' => user()->id,
            'status' => self::ORDER_STATUS_UNPAID,
            'total' => Cart::total(0, false, false),
            'quantity' => Cart::count(0, false, false),
            'order_id' => session('order_id'),
            'payment_method' => $payment,
            'shipping_method' => $shipping,
            'shipping_address' => $address,
            'coupons_object' => $coupons
        ]);

        /* Create Order Details Instane */
        foreach(Cart::content() as $cart) {
            OrderDetails::create([
                'order_id' => $order->id,
                'item_id' => $cart->model->id,
                'item_details' => $cart->model->toJson(),
                'quantity' => $cart->qty,
                'total' => $cart->model->price * $cart->qty
            ]);
        }

        /* Generate Invoice */
        $invoice = $this->makeInvoice($order, $this->getUserByOrder($order));

        /* Assign invoice to order */
        $order->invoice = json_encode($invoice);
        $order->save();

        /* Return Order Instance */
        return $order;
    }

    /**
     * Destroying Cart Object.
     *
     * @return void
     */

    public function destroyCart() {
        return Cart::destroy();
    }
}
