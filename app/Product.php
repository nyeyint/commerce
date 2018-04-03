<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function categoryId()
    {
        return $this->hasMany('App\ProductCategory');
    }

    public function brandId()
    {
        return $this->hasOne('App\ProductBrand');
    }

    public function scopeCategory($query, $id)
    {
        return $query->where('category_id', $id);
    }

    public function scopeLike($query, $q)
    {
        return $query->where('name', 'LIKE', '%' . $q . '%')
                     ->orWhere('short_description', 'LIKE', '%' . $q . '%')
                     ->orWhere('long_description', 'LIKE', '%' . $q . '%');
    }

    public function scopeCategorySlug($query, $cat)
    {
        return $query->where('slug', $cat);
    }

    public function scopeSort($query, $r)
    {
        return $query->orderBy('created_at', $r);
    }

    public function scopePrice($query, $min = null, $max = null)
    {
        if ($max == null && $min != null) {
            return $query->where('price', '>=', $min);
        }

        if ($min == null && $max != null) {
            return $query->where('price', '<=', $max);
        }

        return $query->whereBetween('price', [$min, $max]);
    }

    public function scopeCategorySlugWhereIn($query, array $category)
    {
        $real_category = [];
        foreach ($category as $c) {
            $category = ProductCategory::where('slug', $c)->first();
            if ($category) {
                array_push($real_category, $category->id);
            }
        }

        return $query->whereIn('category_id', $real_category);
    }
}
