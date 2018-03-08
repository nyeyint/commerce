<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fillable = [
    	'access_token', 'token_secret', 'provider', 'user_id'
    ];

    public function user() {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
