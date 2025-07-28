<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    //  public function showSingleCategory($id){
    //     $category=Category::with('products')->find($id);
    //     return view('showCategory',compact('category'));
    // }

    public function show($id)
{
    $category = Category::with('products')->findOrFail($id);
    return view('showCategory', compact('category'));
}

}
