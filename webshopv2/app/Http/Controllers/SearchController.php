<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class SearchController extends Controller
{
    public function index()
    {
        $searchTerm = request('searchTerm');

        $searchProductResults = Product::where('name', 'LIKE', '%' . $searchTerm . '%')->orWhere('description', 'LIKE', '%' . $searchTerm . '%')->orWhere('category', 'LIKE', '%' . $searchTerm . '%')->get();

//        $searchCategoryResults = Category::where('category', 'LIKE', '%' . $searchTerm . '%')->get();

        return view('pages.searchresults', compact('searchProductResults', 'searchTerm'));
    }
}
