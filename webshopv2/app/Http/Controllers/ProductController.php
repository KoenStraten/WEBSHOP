<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index() {
        $products = Product::all();
        return view('pages/admin/products/index', compact('products'));
    }
}
