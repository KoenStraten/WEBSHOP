<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductInCart;
use App\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{

    public function index()
    {

    }

    public function store()
    {
        $product_id = request('product');
        $amount = request('amount');

        $user = Auth::user();
        $cart = $user->shoppingCarts->where('paid', '0')->last();

        if (!isset($cart)) {
            $shoppingCart = new ShoppingCart();
            $shoppingCart->user_id = $user->id;
            $totalCost = 0;
            $shoppingCart->total_cost = $totalCost;
            $shoppingCart->save();
        } else {
            $totalCost = $cart->total_cost;
            $shoppingCart = $cart;
        }

        $product = Product::find($product_id);
        $price = $product->price;

        $counter = 0;
        while ($counter < $amount) {
            $shoppingCart->products()->attach($product);
            $totalCost = $totalCost + $price;
            $shoppingCart->total_cost = $totalCost;
            $counter++;
        }
        $shoppingCart->save();

        return redirect('/product/' . $product_id);
    }

    public function show()
    {
        $user = Auth::user();

        $cart = $user->shoppingCarts->where('paid', 0)->last();

        return view('pages/shoppingcart', compact('cart'));
    }

    public function remove()
    {
        $product_id = request('product');

        $user = Auth::user();

        $cart = $user->shoppingCarts->where('paid', 0)->last();

        $product = Product::find($product_id);

        $cart->products()->delete($product);

        $cart->save();

        return view('pages/shoppingcart');
    }
}