<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public function ProductsInCart()
    {
        return $this->belongsToMany('App\Product', 'product_in_shopping_cart');
        //return $this->hasMany('App\Product', 'product_in_shopping_cart'); ik denk deze

    }
}
