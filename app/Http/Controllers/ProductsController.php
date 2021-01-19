<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductsController extends Controller
{
    public function dogs()
    {
        $title = 'Товары для собак';       
        $products   = Product::all();
        $categories = Category::all();
        foreach($categories as $category){
            foreach($products as $product){
                if( $product->category_id == $category->id){
                    $product->category_id = $category->name;
                }
            }         
        }        
        return view('main.dogs', compact('title', 'products'));
    }

    public function cats()
    {
        $title = 'Товары для кошек';       
        $products   = Product::all();
        $categories = Category::all();       
        foreach($categories as $category){
            foreach($products as $product){
                if( $product->category_id == $category->id){
                    $product->category_id = $category->name;
                }
            }
        } 
        // var_dump($products);
        return view('main.cats', compact('title','products'));    
    }
}
