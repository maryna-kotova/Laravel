<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class StoreController extends Controller
{
    public function sale()
    {
        $title = 'SALE';       
        $products   = Product::all();
        $categories = Category::all();      
        foreach($categories as $category){
            foreach($products as $product){
                if( $product->category_id == $category->id){
                    $product->category_id = $category->name;
                }
            }
        } 
        return view('main.sale', compact('title','products'));
    }
}
