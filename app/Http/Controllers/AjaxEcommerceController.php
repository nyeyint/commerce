<?php

namespace App\Http\Controllers;

use CartFacade;
use App\Courier;
use Illuminate\Http\Request;
use App\Components\Cart\CartRepository;
use App\Components\Product\ProductRepository;

class AjaxEcommerceController extends Controller
{
    protected $product;
    protected $cart;

    public function __construct(ProductRepository $product, CartRepository $cart)
    {
        $this->product = $product;
        $this->cart = $cart;
    }

    public function ajaxProducts()
    {
        $products = $this->product->getProduct(setting('ecommerce.product_limit'));

        return ($products->count() < 1)
        ? responseJson(['X-Trace' => str_random(20)], 204)
        : view('ecommerce.ajax.get-products')->with('products', $products);
    }

    public function ajaxProductSale()
    {
        $products = $this->product->getDiscountProduct(setting('ecommerce.product_limit'));

        return ($products->count() < 1)
        ? responseJson(['X-Trace' => str_random(20)], 204)
        : view('ecommerce.ajax.get-products')->with('products', $products);
    }

    public function productCategory($categoryRequest)
    {
        $bySlug     = $this->product->getByCategorySlug($categoryRequest);
        $byCategory = $this->product->getByCategoryId($categoryRequest);

        $products = ($bySlug) ? $bySlug : $byCategory;

        return ($products->count() < 1)
        ? responseJson(['X-Trace' => str_random(20)], 204)
        : view('ecommerce.ajax.get-products')->with('products', $products);
    }

    public function addToCart(Request $request)
    {
        $cart = $this->cart->add($request);

        if (!$cart) {
            return responseJson([], 401);
        }

        return responseJson([]);
    }

    public function getCart()
    {
        return $this->cart->getAll();
    }

    public function getCourier()
    {
        return Courier::get();
    }

    public function getActiveCourier()
    {
        return Courier::where('is_active', 1)->get();
    }

    public function getInactiveCourier()
    {
        return Courier::where('is_active', 0)->get();
    }

    public function enableCourier($id)
    {
        $courier = Courier::where('id', $id);

        if (!$courier->first()) {
            return responseJson([], 500);
        }

        $courier->update(['is_active' => 1]);
        return responseJson([], 200);
    }

    public function disableCourier($id)
    {
        $courier = Courier::where('id', $id);

        if (!$courier->first()) {
            return responseJson([], 500);
        }

        $courier->update(['is_active' => 0]);
        return responseJson([], 200);
    }
}
