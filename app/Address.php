<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
    	'user_id', 'title', 'post_code', 'province_id', 'province_label', 'city_id', 'city_label', 'subdistrict_id', 'subdistrict_label', 'street', 'default'
    ];
}
