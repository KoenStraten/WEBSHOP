<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getReviewScore($product_id)
    {
        return Review::where('product_id', $product_id)->avg('rating');
    }

    public static function getAllProductsByCategory($category)
    {
        return static::where('category', $category)->get();
    }

    public static function getProductsInShoppingCart($user_id)
    {

    }
}
