<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPhone extends Model
{
    protected $fillable = [
    	'user_id', 'number'
    ];

    public function user() {
    	$this->belongsTo('App\User', 'user_id');
    }
}
