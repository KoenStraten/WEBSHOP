<?php

namespace App\Http\Controllers;

use App\ProductInCart;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function create() {
        return view('auth.login');
    }

    public function store() {
        // Validate login.
        $this->validate(request(), [
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // check if user has shopping cart
        $shoppingCart = null;
        $productsInCart = null;
        if (session()->has('cart') && session()->has('productsInCart')) {
            $shoppingCart = session()->get('cart');
            $productsInCart = session()->get('productsInCart');
        }

        // Check if user can be authenticated, if so login, else return back.
        if (!auth()->attempt(request(['name', 'password']))) {
            return back();
        }

        $this->transferShoppingCart($shoppingCart, $productsInCart);

        // if user authenticated, redirect to home.
        return redirect('/');
    }

    private function transferShoppingCart($cart, $productsInCart) {
        $oldCart = auth()->user()->shoppingCarts->where('paid', '0')->last();
        if (!isset($oldCart)) {
            $user = auth()->user();
            $cart->user_id = $user->id;
            $cart->save();

            foreach($productsInCart as $p) {
                $productInCart = new ProductInCart();
                $productInCart->product_id = $p->product->id;
                $productInCart->shopping_cart_id = $p->shoppingCart->id;
                $productInCart->cheese_type = $p->cheese_type;
                $productInCart->save();
            }
        }
    }

    public function destroy() {
        auth()->logout();
        session()->flush();

        return redirect('/');
    }
}
