<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductInCart;
use App\ShoppingCart;

class ShoppingCartController extends Controller
{

    public function index()
    {

    }

    public function store()
    {
        $product_id = request('product');
        $amount = request('amount');

        $user = \Illuminate\Support\Facades\Auth::user();
        $carts = $user->shoppingCarts->where('paid', '0')->where('user_id', $user->id);

        if (count($carts) == 0) {
            $shoppingCart = new ShoppingCart();
            $shoppingCart->user_id = $user->id;
            $totalCost = 0;
            $shoppingCart->total_cost = $totalCost;
            $shoppingCart->save();
        } else {
            foreach ($carts as $cart) {
                $totalCost = $cart->total_cost;
                $shoppingCart = $cart;
            }
        }

        $product = Product::find($product_id);
        $price = $product->price;

        $counter = 0;
        while ($counter < $amount) {
            $productInCart = new ProductInCart();
            $totalCost = $totalCost + $price;
            $productInCart->product_id = $product_id;
            $carts = $user->shoppingCarts->where('paid', '0')->where('user_id', $user->id);

            $counter++;
        }
        $shoppingCart->save();

        return redirect('/product/' . $product_id);
    }

    public function show()
    {
        $user = \Illuminate\Support\Facades\Auth::user();

        $carts = $user->shoppingCarts->where('paid', '0');

        $productsInCarts = array();

        foreach ($carts as $cart) {
            $productIds = $cart->ProductsInCart();
        }

        foreach ($productIds as $productId) {
            $product = Product::find($productId);
            array_push($productsInCarts, $product);
        }
        return view('pages/shoppingcart', compact('productsInCart'));
    }
}