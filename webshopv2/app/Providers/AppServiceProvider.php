<?php

namespace App\Providers;

use App\Menu;
use App\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::DefaultStringLength(191);
        view()->composer('layouts.header', function ($view) {

            $leftItems = Menu::where('parent_id', 0)->orderBy('order')->take(3)->get();

            $rightItems = Menu::where('parent_id', 0)->orderBy('order')->skip(3)->take(count(Menu::all()))->get();

            $amountOfProducts = 0;

            if (Auth::check()) {
                $user = Auth::user();
                $cart = $user->shoppingCarts->where('paid', 0)->last();
                if (isset($cart)) {
                    $amountOfProducts = count($cart->products);
                }
            }

            $view->with('leftItems', $leftItems)->with('rightItems', $rightItems)->with('amountOfProducts', $amountOfProducts);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
