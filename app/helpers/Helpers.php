<?php

use App\User;
use App\Order;
use App\Slider;
use App\Product;
use Carbon\Carbon;
use App\ProductBrand;
use App\EmailTemplate;
use App\PaymentChannel;
use App\ProductCategory;
use App\Exceptions\DataTypeNotSupported;
use Illuminate\Support\Facades\Cache;

if( !function_exists('getCategoryById') ) {

	function getCategoryById($id) {
		return ProductCategory::where('id', $id)->first();
	}

}

if( !function_exists('flash_alert') ) {

	function flash_alert($type, $message) {
		$types = [
			'info', 'error', 'warning', 'success'
		];

		if( !in_array($type, $types) ) {
			return;
		}

		session()->flash('alert-type', $type);
		session()->flash('message', $message);

		return;
	}

}

if( !function_exists('getFirstArray') ) {

	function getFirstArray($array) {
		$image = json_decode($array);

		return $image[0];
	}
}

if( !function_exists('_percent') ) {

	function _percent($amount, $percent, $ceil = false, $money = false) {

		if(Strpos($percent, '%')) {
			$percent = substr($percent, 0, -1);
		}

		$percent = $percent / 100 * $amount;

		return ($ceil)
				? ($money)
					? _rupiah(ceil($percent))
					: ceil($percent)
				: ($money)
					? _rupiah($percent)
					: $percent;

	}

}

if( !function_exists('_rupiah') ) {

	function _rupiah($val) {
		return 'Rp ' . number_format($val, 0, ',', '.');
	}

}

if( !function_exists('flush_cart') ) {

	function flush_cart() {
		Cache::forget('cart_total');
		Cache::forget('cart_quantity');
		Cache::forget('cart_items');

		return;
	}

}

if( !function_exists('responseJson') ) {
	function responseJson($data = [], $code = 200, $options = [], $config = JSON_PRETTY_PRINT) {
		$data['hash'] = str_random(15);
		return response()->json($data, $code, $options, $config);
	}
}

if( !function_exists('user') ) {
	function user($id = null) {
		if($id == null) {
			if(Auth::check()) {
				$user = User::where('id', Auth::user()->id)->first();
				$user->login = true;
				return $user;
			}
			else
			{
				$user = new stdClass();
				$user->login = false;
				return $user;
			}
		}

		return User::where('id', $id)->first();
	}
}

if( !function_exists('to_label') ) {
	function to_label($string) {
		if($string == 'paid')
		{
			return '<label class="label label-success">' . title_case($string) . '</label>';
		}
		elseif($string == 'shipped')
		{
			return '<label class="label label-success">' . title_case($string) . '</label>';
		}
		elseif($string == 'unpaid')
		{
			return '<label class="label label-warning">' . title_case($string) . '</label>';
		}
		elseif($string == 'waiting confirmation')
		{
			return '<label class="label label-warning">' . title_case($string) . '</label>';
		}
		elseif($string == 'waiting shipment')
		{
			return '<label class="label label-primary">' . title_case($string) . '</label>';
		}
		else
		{
			return '<label class="label label-warning">' . title_case($string) . '</label>';
		}
	}
}

if( !function_exists('success') ) {
	function success($string) {
		session()->flash('success', $string);
	}
}

if( !function_exists('error') ) {
	function error($string) {
		session()->flash('error', $string);
	}
}

if( !function_exists('delete_button') ) {
	function delete_button($action, $data, $msg, $text) {
		$html = "<form method='post' action='".$action."'>
					<input type='hidden' name='_method' value='DELETE'>
					<input type='hidden' name='_token' value='".csrf_token()."' >";
					foreach($data as $item => $val) {
						$html .= "<input type='hidden' name='".$item."' value='".$val."'>";
					}
		$html .= 	'<button type="button" class="btn btn-danger btn-sm" data-delete="'.$msg.'">'.$text.'</button>';
		$html .= '</form>';
		return $html;
	}
}

if( !function_exists('component_namespace') ) {
	function component_namespace() {
		return 'App\Components';
	}
}

if( !function_exists('state_form') ) {
	function state_form() {
		$state = str_random(15);

		$html  = "";
		$html .= "<input type='hidden' name='_encrypted_state' value='" . encrypt($state) . "'>";
		$html .= "<input type='hidden' name='_plain_state' value='" . $state . "'>";

		return $html;
	}
}

if( !function_exists('state_array') ) {
	function state_array() {
		$plain = str_random(15);

		return [
			'encrypted' => encrypt($plain),
			'plain' => $plain
		];

	}
}

if( !function_exists('change_env') ) {
	function change_env($key, $value) {
		$envFile  = app()->environmentFilePath();
		$envStr   = file_get_contents($envFile);

		$oldValue = env($key);
		$finalStr = str_replace("{$key}={$oldValue}", "{$key}={$value}", $envStr);
		$fp = fopen($envFile, 'w');
	    fwrite($fp, $finalStr);
	    fclose($fp);

	    return true;
	}
}

if( !function_exists('email_template') ) {
	function email_template($namespace) {
			$template = EmailTemplate::where('slug', $namespace)->first();

			if(!$template) {
				return false;
			}

			return $template;
	}
}

if( 	!function_exists('product_categories') ) {

	/**
	 * Get All Product categories.
	 *
	 * @return App\ProductCategory.
	 */

	 function product_categories() {
		 	return ProductCategory::all();
	 }

}

if( !function_exists('product_category') ) {
	/**
	 * Get single product category.
	 *
	 * @param $cat string|integer
	 * @return bool|ProductCategory instance.
	 */

	 function product_category($cat) {

		 	$category = new ProductCategory();

			if(!$category->where('slug', $cat)->first()) {
					return $category->where('id', $cat)->first();
			}

			return $category->where('slug', $cat)->first();
	 }
}

if( !function_exists('product_brands') ) {
	/**
	 * Get All Product Brand.
	 *
	 * @return App\ProductBrand.
	 */

	 function product_brands() {
		 	return ProductBrand::get();
	 }

}

if( !function_exists('sliders') ) {
	/**
	 * Get All Sliders.
	 *
	 * @return App\Slider.
	 */

	 function sliders() {
		 	return Slider::get();
	 }

}

if( !function_exists('products') ) {
		/**
		 * Get Products From Database.
		 *
		 * @param $option string.
		 * @return App\Product.
		 */

		 function products($option = null, $limit = null) {
			 	// add your own rules here.
				$allowedOption = [
						'discount', 'newest', 'featured'
				];

				$products = new Product();
				if(!in_array($option, $allowedOption)) {
						return (null == $limit)
								? Product::get()
								: Product::limit($limit)->get();
				}

				if(null == $option) {
						return (null == $limit)
								? Product::get()
								: Product::limit($limit)->get();
				}

				if($option == 'discount') {
						return (null == $limit)
								? Product::where('is_discount', true)->get()
								: Product::where('is_discount', true)->limit($limit)->get();
				}

				if($option == 'newest') {
						return Product::where('created_at', '>', Carbon::now()->subDays(7))->get();
				}

		 }
}


if(!function_exists('payment_gateway')) {

		/**
		 * A Collection of Payment Gateway.
		 *
		 * @return App\PaymentChannel.
		 */

		 function payment_gateway($status) {
			 	$allowedStatus = ['inactive' => 0, 'active' => 1];

				return PaymentChannel::where('status', $allowedStatus[$status])->get();
		 }

}

if( !function_exists('product_details') ) {
		/**
		 * Get product details by id.
		 *
		 * @param string|integer $id
		 * @return App\Product
		 */

		function product_details($id) {
				return Product::where('id', $id)->first();
		}
}

if( !function_exists('order_weight') ) {
		/**
		 * Calculate total weight of orders placed.
		 *
		 * @param App\Order $order
		 * @return integer
		 */

		function order_weight(Order $order)  {
				$details = $order->details()->get();
				$weight  = 0;
				foreach($details as $orderDetails) {
						$weight += product_details($orderDetails->item_id)->weight * $orderDetails->quantity;
				}

				return $weight;
		}
}


if( !function_exists('jne_formatter')) {
		/**
		 * Format the JNE Service to known service type.
		 *
		 * @param string $service
		 * @return string
		 */

		function jne_formatter($service) {
				if($service == 'CTC' || $service == 'REG') {
					return 'REG';
				}else if($service == 'CTCYES' || $service == 'YES') {
					return 'YES';
				}
				else
				{
					return $service;
				}
		}
}
