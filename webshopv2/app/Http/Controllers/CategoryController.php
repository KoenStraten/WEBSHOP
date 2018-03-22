<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index($category) {
        $products = Product::getAllProductsByCategory($category);

        return view('pages.category', compact('products', 'category'));
    }

    public function categoryIndex() {
        $categories = Category::all();

        return view('pages.admin.categories.index', compact('categories'));
    }
}
