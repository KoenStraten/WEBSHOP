<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function rating()
    {
        return Review::where('product_id', $this->id)->avg('rating');
    }

    public static function getAllProductsByCategory($category)
    {
        return static::where('category', $category)->get();
    }

    public static function getProductsInShoppingCart($user_id)
    {

    }
}
