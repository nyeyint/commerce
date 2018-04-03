<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\IndonesianPhone;
use App\UserPhone;
use App\Address;
use App\Order;
use App\User;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('ecommerce.customer.index');
    }

    public function account()
    {
        return view('ecommerce.customer.account');
    }

    public function updateAccount(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => ['required', new IndonesianPhone]
        ]);

        $user = user();
        unset($user->login);

        $user['name']  = $request->name;

        if (User::where('email', $request->email) && $request->email != $user->email) {
            error('Whoops! Something went wrong!');

            return redirect()->back();
        }

        $user['email'] = $request->email;


        if ($request->password != null || $request->passwordconfirm != null) {
            if ($request->password != $request->passwordconfirm) {
                error('Password confirmation does not match tha password!');

                return redirect()->back();
            }

            $user['password'] = bcrypt($request->password);
        }

        $phone = UserPhone::create([
            'user_id' => $user->id,
            'number' => $request->phone
        ]);

        $user['phone_id'] = $phone->id;
        $user->save();

        success('Account Successfully Updated!');

        return redirect()->back();
    }

    public function address()
    {
        return view('ecommerce.customer.address');
    }

    public function addAddress(Request $request)
    {
        $address = Address::where('user_id', user()->id)->count();

        if ($address >= setting('ecommerce.max_address')) {
            return responseJson([
                'title' => 'Oops!',
                'data' => 'Address limit has been reached!',
                'success' => false
            ]);
        }

        $input = $request->all();
        $input['user_id'] = user()->id;
        if ($address == 0) {
            $input['default'] = true;
        }

        Address::create($input);

        return responseJson(['success' => true]);
    }

    public function deleteAddress(Request $request)
    {
        $address = Address::where('id', $request->id);
        $address->delete();

        success('Address Successfully Removed!');

        return redirect()->back();
    }

    public function defaultAddress($id)
    {
        $address = Address::where('id', $id);

        Address::where('user_id', user()->id)->update(['default' => false]);

        $address->update(['default' => true]);
        success('Address has been set to default!');
        return redirect()->back();
    }

    public function orders()
    {
        return view('ecommerce.customer.orders');
    }

    public function orderDetails(Request $request)
    {
        if ($request->id == null) {
            return abort(404);
        }

        try {
            $orderId = decrypt($request->id);
        } catch (\Exception $e) {
            return abort(404);
        }

        $order = Order::where('order_id', $orderId)->first();
        return view('ecommerce.customer.order_details')
                  ->with('order', $order);
    }
}
