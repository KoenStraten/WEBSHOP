<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    public function index()
    {
        //$productsInCarts = Product::all();
        return view('pages/shoppingcart', compact('productsInCarts'));
    }

    public function store()
    {
        $this->validate(request(), [
            'amount' => 'required',
        ]);

        $product_id = request('product');

//        $review = new Review();
//        $review->title = request('titel');
//        $review->rating = request('star');
//        $review->text = request('content');
//        $review->user_id = Auth::user()->id;
//        $review->product_id = $product_id;

//        $review->save();

        return redirect('/product/' . $product_id);
    }
}