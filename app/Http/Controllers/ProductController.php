<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    //
    public function showSingleProduct($id){
        $product=Product::with('images')->find($id);
        return view('showProduct',compact('product'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $product = new Product();
    $product->productName = $request->name; 
    $product->description = $request->description;
    $product->price = $request->price;
    $product->category_id = $request->category_id;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;
    }


    $product->save();

    return redirect()->route('products.create')->with('success', 'Product added successfully!');
}
}