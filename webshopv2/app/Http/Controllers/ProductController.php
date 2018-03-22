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

    public function create() {
                $categories = Category::all();
                return view('pages/admin/products/create', compact('categories'));
    }

    public function store(Request $request) {
            $this->validate(request(), [
                    'name' => 'required|min:4',
                    'price' => 'required|numeric|min:0',
                    'description' => 'required|min:20',
                    'category' => 'required',
                ]);

            $path = $request->file('image')->store('public');

            $product = new Product();
            $product->name = request('name');
            $product->price = request('price');
            $product->description = request('description');
            $product->image = $path;
            $product->category = request('category');
            $product->save();
            //$product = array(request(['name', 'price', 'description', 'category'], $path));

           // Product::create($product);
            return redirect('/../admin/products');
    }

    public function remove($id) {
            Product::find($id)->delete();

            return redirect('/../admin/products');
    }
}
