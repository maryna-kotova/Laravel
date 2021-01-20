<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    public function dogs()
    {
        $title = 'Товары для собак';       
        $products = Product::all();    

        return view('main.dogs', compact('title', 'products'));
    }

    public function cats()
    {
        $title = 'Товары для кошек';       
        $products = Product::all();  

        return view('main.cats', compact('title','products'));    
    }
}
