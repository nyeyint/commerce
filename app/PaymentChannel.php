<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentChannel extends Model
{
    protected $table = 'payment_channel';

    protected $fillable = [
        'front_name', 'back_name', 'prefix', 'namespace', 'channel_id', 'status', 'icon'
    ];

    public function scopeContains($query, $keyword)
    {
        return $query->where('prefix', 'LIKE', '%' . $keyword . '%');
    }
}
