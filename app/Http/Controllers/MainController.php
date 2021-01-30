<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {
        $title = 'Всё для домашних животных';
        // $subTitle = '<em>(кошек и собак)</em>';
        // $products = Product::all();
        $products = Product::with('category')->get();  

        // $categories = Category::all();
        
        // $dateNow = date('Y-m-d');
        // $dateForLatestUpdates = date('Y-m-d', strtotime('-2 day'));
        // $newItems = [];
        // foreach( $products as $product ){
        //     $update = $product->updated_at;
        //     if( $update >= $dateForLatestUpdates ){
        //         array_push( $newItems, $product );
        //     }
        // }
        // dump($products);
        // dd($products[0]);
        // return view('main.index', compact('title','products', 'subTitle', 'categories', 'newItems'));
        return view('main.index', compact('title', 'products'));

    }
    
    public function contacts()
    {
        $title = 'Контакты';
        return view('main.contacts', compact('title'));
    }

    public function getContacts(Request $requesr)
    {
        $validated = $requesr->validate([
            'name'    => 'required|min:3|max:255',
            'email'   => 'required|email',
            'message' => 'required|min:3',
        ]);
        // dd( $requesr->all() );
        //Отправляем письмо
        return back()->with('success', 'Thahks!');
    }
}


