<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductInCart;
use App\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{

    public $shoppingCart;

    public function index()
    {

    }

    public function store()
    {
        $product_id = request('product');
        $amount = request('amount');
        $cheeseType = request('cheeseType');

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
            //$shoppingCart->products()->attach($product);
            $productInCart = new ProductInCart();
            $productInCart->shopping_cart_id = $shoppingCart->id;
            $productInCart->product_id = $product->id;
            $productInCart->cheese_type = $cheeseType;
            $productInCart->save();

            $totalCost = $totalCost + $price;
            $shoppingCart->total_cost = $totalCost;
            $counter++;
        }
        $shoppingCart->save();

        session()->flash('message', 'Het product is toegevoegd aan je winkelmandje.');

        return redirect('/product/' . $product_id);
    }

    public function show()
    {
        $user = Auth::user();

        $cart = $user->shoppingCarts->where('paid', 0)->last();

        if(isset($cart)) {
            $productsInCart = ProductInCart::where('shopping_cart_id', $cart->id)->get();
        } else {
            $this->newCart();
        }

        return view('pages/shoppingcart', compact('productsInCart'));
    }

    public function newCart()
    {
        $user = Auth::user();

        $shoppingCart = new ShoppingCart();
        $shoppingCart->user_id = $user->id;
        $totalCost = 0;
        $shoppingCart->total_cost = $totalCost;
        $shoppingCart->save();
    }

    public function remove()
    {
        $productInCart_id = request('productInCart');
        $productInCart = ProductInCart::find($productInCart_id);
        $product = Product::find($productInCart->product_id);

        $user = Auth::user();

        $cart = $user->shoppingCarts->where('paid', 0)->last();

        $totalCost = $cart->total_cost;

        $cart->total_cost = $totalCost - $product->price;

        $cart->save();

        ProductInCart::find($productInCart->id)->delete();

        session()->flash('message', 'Het product is verwijderd van je winkelmandje.');

        return redirect('/shoppingcart/');
    }
}