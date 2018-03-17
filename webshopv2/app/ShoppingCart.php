<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_in_shopping_cart');
    }
}
