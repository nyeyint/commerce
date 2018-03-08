<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'newsletter_email';

    protected $fillable = [
    	'first_name', 'last_name', 'email', 'confirmed'
    ];

}
