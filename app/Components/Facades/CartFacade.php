<?php

namespace App\Components\Facades;

use App\Components\Product\ProductRepository;
use App\Components\Cart\CartRepository;
use App\Events\CartSuccessfullyAdded;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Cart;

class CartFacade
{
    protected $user;
    protected $product;

    public function __construct(ProductRepository $product, Auth $auth, CartRepository $cart)
    {
        $this->product 		  = $product;
        $this->cart 		  = $cart;

        if (Auth::check()) {
            $this->user = Auth::user();
        }
    }

    /**
     * Add item into Cart
     *
     * @return bool
     */
    public function add(array $item)
    {
        try {
            $product = $this->product->getById($item['id']);
        } catch (\Exception $e) {
            return false;
        }

        if (isset($item['quantity'])) {
            $quantity = $item['quantity'];
        } else {
            $quantity = 1;
        }

        $product = [
            'item' => $product,
            'quantity' => $quantity
        ];


        // for variant extends here.
        return $this->addToCart($product);
    }

    protected function addToCart($product)
    {
        $item = $product['item'];

        if ($item->is_discount) {
            $price = $item->price - _percent($item->price, $item->discount_percent);
        } else {
            $price = $item->price;
        }

        // add to cart
        Cart::add($item->id, $item->name, $product['quantity'], $price)->associate('App\Product');

        return true;
    }
}
