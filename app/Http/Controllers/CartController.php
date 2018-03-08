<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Cart;
use App\Address;

class CartController extends Controller
{

    public function add(Request $request) {
    	$id = $request->id;
    }

    public function delete(Request $request) {
    	$id = $request->id;

    	Cart::remove($id);
    	return $this->back('success', 'Item Successfully Removed');
    }

    public function showAddressForm() {
        return view('checkout.addressForm');
    }


    public function postAddress(Request $request) {
        try {
            $addressId = decrypt($request->address);
        } catch (\Exception $e) {
            error('Whoops! Something went wrong!');
            return redirect()->back();
        }

        $address = Address::where('id', $addressId)->first();
        if(!$address) {
            error('Whoops! Something went wrong!');
            return redirect()->back();
        }

        if($address->user_id != user()->id) {
            error('Whoops! Something went wrong!');
            return redirect()->back();
        }

        session(['shipping_address' => $address]);

        return redirect()->route('cart.showCourierForm');
    }

    public function showCourierForm() {
        return (session()->has('shipping_address'))
            ? view('checkout.courierForm')
            : redirect()->back();
    }

    public function postCourier(Request $request) {
        $courierObject = json_decode(urldecode($request->shipping_method));
        session(['shipping_method' => $courierObject]);

        return redirect()->route('cart.showCouponForm');

    }

    public function showCouponForm() {
        return (session()->has('shipping_method'))
            ? view('checkout.couponForm')
            : redirect()->back();
    }

    public function postCoupon(Request $request) {
        dd($request->all());
        return redirect()->route('cart.showPaymentForm');
    }

    public function showPaymentForm(Request $request) {

        $address  = session('shipping_address');
        $courier  = session('shipping_method');

        if($courier == null) {
            return redirect()->route('cart.showCourierForm');
        }

        if($address == null) {
            return redirect()->route('cart.index');
        }

        return view('checkout.paymentForm');
    }

    public function postPayment(Request $request) {
        try {
            $pg = decrypt($request->payment_method);
        } catch (\Exception $e) {
            return redirect()->back();
        }

        session(['payment_method' => $pg]);
        return redirect(route('payment.proccess', encrypt(str_random(10))));
    }

    protected function back($status, $message) {
    	return redirect()->back()->with($status, $message);
    }
}
