<?php 

namespace App\Components\Cart;

use Cart;
use CartFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartRepository
{
    public function getAll()
    {
        return Cart::content();
    }

    public function add(Request $request)
    {
        return $cart = CartFacade::add(['id' => decrypt($request->c), 'quantity' => $request->q]);
    }
}
