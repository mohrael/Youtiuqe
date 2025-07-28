<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
// Add more models as needed (e.g. Brand)

class HomeController extends Controller
{        // $brands = Brand::all(); // If you have a Brand model
// dd($categories);
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('home', compact('products', 'categories'));
    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('showProduct', compact('product'));
    }

    public function showCategory($id)
    {
        $category = Category::findOrFail($id);
        $products = $category->products; // via relationship
        return view('showCategory', compact('category', 'products'));
    }
    
}
