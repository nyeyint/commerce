<?php

namespace App\Components\Search;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductSearch {

    protected $product;

    public function apply(Request $request) {
        $this->product = new Product();
        $keys = $this->config($request);
        foreach($keys as $key => $value) {
            // check if $request parameter has a key that have been defined in the config array
            if($request->has($key)) {
                // check if filter node is an array
                // if array then use the ['handler']
                if(is_array($keys[$key]['handler'])) {
                    if(in_array($request->$key, $keys[$key]['allowed'])) {
                        if(in_array($keys[$key]['multi'], $keys[$key]) && $keys[$key]['multi'] == true) {

                            $delimiter = $keys[$key]['delimiter'];
                            if(str_contains($request->$key, $delimiter)) {
                                $segments  = explode($delimiter, $request->$key);
                                array_push($keys[$key]['handler']['params'], ['query' => $segments]);
                                call_user_func_array(
                                    [$this, $keys[$key]['handler']['method']],
                                    $keys[$key]['handler']['params']
                                );
                            }

                        }
                        else
                        {
                          call_user_func_array(
                              [$this, $keys[$key]['handler']['method']],
                              $keys[$key]['handler']['params']
                          );
                        }
                    }

                    // do nothing if value is not allowed string
                }
                else
                {

                  if(in_array($keys[$key]['multi'], $keys[$key]) && $keys[$key]['multi'] == true) {
                      $delimiter = $keys[$key]['delimiter'];
                      if(str_contains($request->$key, $delimiter)) {
                          $segments  = explode($delimiter, $request->$key);
                          array_push($keys[$key]['params'], ['query' => $segments]);
                          call_user_func_array(
                              [$this, $keys[$key]['handler']],
                              $keys[$key]['params']
                          );
                      }
                      else
                      {
                        call_user_func_array(
                            [$this, $keys[$key]['handler']],
                            $keys[$key]['params']
                        );
                      }

                  }
                  else
                  {
                    call_user_func_array(
                        [$this, $keys[$key]['handler']],
                        $keys[$key]['params']
                    );
                  }

                }
            }
        }

        return $this->product;
    }

    protected function q(Request $request) {
        if($request->has('q')) {
            $this->product = $this->product->like($request->q);
        }
    }

    protected function category(Request $request, $query = []) {
        if($request->has('category')) {
            if(count(@$query['query']) > 1) {
                $this->product = $this->product->categorySlugWhereIn($query['query']);
            }
            else
            {
              $category = ProductCategory::where('slug', $request->category)->first();
              if($category) {
                  $this->product = $this->product->category($category->id);
              }
            }

        }
    }

    protected function sort_by(Request $request, $query) {
        if($request->has($query)) {
            $this->product = $this->product->sort($request->$query);
        }
    }

    protected function category_id(Request $request) {
        if($request->has('category_id')) {
            $category = ProductCategory::where('id', $request->category_id)->first();
            if($category) {
                $this->product = $this->product->category($category->id);
            }
        }
    }

    protected function min_price(Request $request) {
        if($request->has('min_price')) {
            $min_price = (int) $request->min_price;

            if($request->has('max_price')) {
                $max_price = (int) $request->max_price;
                if($max_price < $min_price) {
                    // do nothing keep the ecosystem clear
                }

                $this->product = $this->product->price($min_price, $max_price);

            }

            $this->product = $this->product = $this->product->price($min_price);

        }
    }

    protected function max_price(Request $request) {
        if($request->has('max_price')) {
            $max_price = (int) $request->max_price;

            if($request->has('min_price')) {
                $min_price = (int) $request->min_price;
                if($min_price > $max_price) {
                    // do nothing keep ecosystem clear
                }

                $this->product = $this->product->price($min_price, $max_price);

            }

            $this->product = $this->product->price(null, $max_price);
        }
    }

    protected function config(Request $request) {
        return [
            'q' => [
                'handler' => 'q',
                'params' => [
                    $request,
                ],
                'multi' => false,
                'delimiter' => ''
            ],
            'category' => [
                'handler' => 'category',
                'params' => [
                    $request,
                ],
                'multi' => true,
                'delimiter' => ','
            ],
            'category_id' => [
                'handler' => 'category_id',
                'params' => [
                    $request,
                ],
                'multi' => false,
                'delimiter' => ''
            ],
            'sort_by' => [
                'allowed' => [
                    'asc', 'desc'
                ],
                'handler' => [
                    'method' => 'sort_by',
                    'params' => [
                        $request, 'sort_by'
                    ]
                ],
                'multi' => false,
                'delimiter' => ''
            ],
            'sortBy' => [
                'allowed' => [
                    'asc', 'desc'
                ],
                'handler' => [
                    'method' => 'sort_by',
                    'params' => [
                        $request, 'sortBy'
                    ]
                ],
                'multi' => false,
                'delimiter' => ''
            ],
            'min_price' => [
                'handler' => 'min_price',
                'params' => [
                    $request
                ],
                'multi' => false,
                'delimiter' => ''
            ],
            'max_price' => [
                'handler' => 'max_price',
                'params' => [
                    $request
                ],
                'multi' => false,
                'delimiter' => ''
            ]
        ];
    }

}
