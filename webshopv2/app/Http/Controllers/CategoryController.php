<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $categories = Category::all();

        return view('pages.categoryoverview', compact( 'categories'));
    }

    public function show($category)
    {
        $products = Product::getAllProductsByCategory($category);

        return view('pages.category', compact('products', 'category'));
    }

    public function categoryIndex() {
        $categories = Category::all();

        return view('pages.admin.categories.index', compact('categories'));
    }
}
