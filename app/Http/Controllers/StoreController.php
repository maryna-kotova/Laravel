<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;

class StoreController extends Controller
{
    public function sale()
    {
        $title = 'Акции';       
        //$products   = Product::where('recommended', '=', 1)->where('price', '<', 500)->orWhere('category_id','=', 2)->orderBy('name')->limit(5)->get();
        // $products   = Product::where('recommended', '=', 1)->first(); //когда выбираем один товар
        $products   = Product::where('recommended', '=', 1)->paginate(2);// выводит ограниченное кол-во товаров на странице с пагинацией
        // $products   = Product::where('recommended', '=', 1)->simplePaginate(2);
        $categories = Category::all(); 
        // dd($reviews);
        return view('store.sale', compact('title','products'));
    }
    public function category($slug)
    {
        $category = Category::where('slug', '=', $slug)->firstOrFail();
        $products = Product::where('category_id', $category->id)->paginate(2);
        // $reviews= Review::where('product_id', $product->id)->get();       

        // dd($products);
        return view('store.category', compact('category', 'products'));
    }

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $reviews= Review::where('product_id', $product->id)->get();      
       
        return view('store.product', compact('product', 'reviews'));
    }
}
