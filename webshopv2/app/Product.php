<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviews()
    {
        return $this->has_many(Review::Class);
    }

    public static function getAllProductsByCategory($category) {
        return static::where('category', $category)->get();
    }
}
