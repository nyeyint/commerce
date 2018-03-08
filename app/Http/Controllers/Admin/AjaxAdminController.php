<?php

namespace App\Http\Controllers\Admin;

use App\PaymentChannel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxAdminController extends Controller
{
    public function disablePaymentGateway(Request $request, $id) {
    	$instance = PaymentChannel::where('id', $id);
    	if(!$instance->first()) {
    		return responseJson([], 500);
    	}

    	$instance->update(['status' => false]);
    	return responseJson([], 200);
    }

    public function enablePaymentGateway(Request $request, $id) {
    	$instance = PaymentChannel::where('id', $id);
    	if(!$instance->first()) {
    		return responseJson([], 500);
    	}

    	$prefix = explode('.', $instance->first()->prefix);

    	$instanceConflict = [
    		'midtrans' => 'sprint',
    		'sprint' => 'midtrans'
    	];

    	if(array_key_exists($prefix[0], $instanceConflict)) {
    		$instance->update(['status' => true]);

    		$keyword = $instanceConflict[$prefix[0]];
    		$toDisable = PaymentChannel::contains($keyword)->get();
    		foreach($toDisable as $pg) {
    			$pg->update(['status' => false]);
    		}

    		return responseJson(['disabled' => $keyword], 200);
    	}

    	$instance->update(['status' => true]);
    	return responseJson([], 200);
    }
}
