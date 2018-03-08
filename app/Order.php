<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{

    protected $fillable = [
        'user_id', 'status', 'total', 'quantity', 'order_id', 'payment_method', 'shipping_method', 'shipping_address'
    ];

    public function details() {
        return $this->hasMany('App\OrderDetails', 'order_id');
    }

}
