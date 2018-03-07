<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Product;
use App\Specification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        $specifications = Specification::getAllById($id);
        $reviews = Review::getAllById($id);

        return view('pages.product', compact('product', 'specifications', 'reviews'));

    }
}
