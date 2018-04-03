<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'item_id', 'total', 'quantity', 'details'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'cart_id');
    }
}
