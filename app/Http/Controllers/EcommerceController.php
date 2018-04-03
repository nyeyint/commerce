<?php

namespace App\Http\Controllers;

use Cart;
use App\ProductBrand;
use App\ProductCategory as Category;
use Illuminate\Http\Request;
use App\Components\Blog\BlogRepository;
use App\Components\Slider\SliderRepository;
use App\Components\Product\ProductRepository;

class EcommerceController extends Controller
{
    protected $blog;
    protected $product;
    protected $slider;
    protected $brands;


    public function __construct(
        ProductRepository $product,
        BlogRepository $blog,
        SliderRepository $slider,
        ProductBrand $brands
    ) {
        $this->product = $product;
        $this->blog = $blog;
        $this->slider = $slider;
        $this->brands = $brands;
    }

    public function homePage()
    {
        $blog          = $this->blog->get(3);
        $slide         = $this->slider->getAll();
        $categories    = $this->product->getCategory(3);
        $brands        = $this->brands->all();

        $data = [
            'blogs' => $blog,
            'slides' => $slide,
            'categories' => $categories,
            'brands' => $brands
        ];

        return view('ecommerce.index')->with($data);
    }

    public function getSlug($slug)
    {
        try {
            $item = $this->product->getBySlug($slug);
        } catch (\Exception $e) {
            return $this->getCategory($slug);
        }

        return $this->getItem($item);
    }

    public function getItem($item)
    {
        return view('ecommerce.single-product')->with('item', $item);
    }

    public function getCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            return abort(404);
        }

        return view('ecommerce.category')->with('category', $category);
    }

    public function getInvoices(Request $request)
    {
        if ($request->trx_id == null) {
            return abort(404);
        }

        try {
            $orderId = decrypt($request->trx_id);
        } catch (\Exception $e) {
            return abort(404);
        }

        $response = response(file_get_contents(public_path('/invoices/' . $uuid . '.pdf')), 200, [
                    'Content-Type' => 'application/json',
                    'Content-Disposition' => 'attachment; filename="INVBDJBDJBDJB.pdf"',
                ]);

        if ($request->action == null || $request->action == 'view') {
            return response()->file(public_path('/invoices/' . $uuid . '.pdf'));
        }

        return $response;
    }

    public function search(Request $request)
    {
        if (!$request->has('q')) {
            return abort(404);
        }

        $filter = app('pf')->apply($request)->paginate(setting('ecommerce.product_limit'));

        return view('ecommerce.search-product')
                    ->with('product', $filter);
    }

    public function searchApi(Request $request)
    {
        if (!$request->has('q')) {
            return abort(404);
        }

        $products = app('pf')->apply($request)->paginate(setting('ecommerce.product_limit'));
        $products->setPath('/search');
        return view('ecommerce.ajax.search-products')->with('products', $products);
    }

    public function filterApi(Request $request)
    {
        if ($request->has('segment')) {
            $segment = $request->segment;
        } else {
            $segment = 'filter';
        }
        $products = app('pf')->apply($request)->paginate(setting('ecommerce.product_limit'));
        $products->setPath('/' . $segment);
        return view('ecommerce.ajax.search-products')->with('products', $products);
    }
}
