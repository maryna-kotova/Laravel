<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class StoreController extends Controller
{
    public function sale()
    {
        $title = 'Акции';       
        $products   = Product::all();
        $categories = Category::all();      

        return view('main.sale', compact('title','products'));
    }
}
