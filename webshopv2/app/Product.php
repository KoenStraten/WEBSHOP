<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviews()
    {

    }

    public static function getAllProductsByCategory($category) {
        return static::where('category', $category)->get();
    }
}
