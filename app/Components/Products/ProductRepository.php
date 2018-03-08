<?php

namespace App\Components\Product;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductRepository {

	protected $category;

	protected $product;

	public function __construct(ProductCategory $category, Product $product) {
		$this->category = $category;
		$this->product = $product;
	}

	public function getAll() {
		return $this->product->all();
	}

	public function getBySlug($slug) {
		$product = $this->product->where('slug', $slug)->first();

		if(!$product) {
			throw new \Exception("No product with slug {$slug}");

		}

		return $product;
	}


	public function getByCategoryId($id, $limit = 20) {
		$products = $this->product->where('category_id', $id)->limit($limit)->get();


		return $products;
	}

	public function getByCategorySlug($slug, $limit = 20) {
		$category = $this->category->where('slug', $slug)->first();
		if(!$category) {
			throw new \Exception(sprintf('Category %s not found!', $category));
		}
		$products = $this->product->where('category_id', $category->id)->limit($limit)->get();


		return $products;
	}

	public function getById($id, $serialize = false) {
		$product = $this->product->where('id', $id)->first();

		if(!$product) {
			throw new \Exception("Product with id {$id} doesn't exists on this repository");
		}

		return ($serialize)
				? $product->toJson()
				: $product;
	}

	public function getProduct($count = 4) {
		return $this->product->take($count)->get();
	}

	public function getAllCategory() {
		return $this->category->all();
	}

	public function getCategoryById($id) {
		$category = $this->category->where('id', $id)->first();

		if(!$category) {
			throw new \Exception("Category with id {$id} doesn't exists on this repository");
		}

		return $category;
	}

	public function getCategory($count = 4) {
		return $this->category->take($count)->get();
	}

	public function getDiscountProduct($limit = 4) {
		return $this->product->where('is_discount', true)->take($limit)->get();
	}

	public function search($query, $categoryId = null) {
		$result = '';
		if(null != $categoryId) {
			$category = $this->category->where('slug', $categoryId)->first();
			if(!$category) {
				return $this->product->like($query)->get();
			}
			$result = $this->product->likeandcat($query, $category->id)->get();
		}

		$result = $this->product->like($query);
	}

	public function sort(Request $request) {
		return $this->product->sort($request);
	}

}
