<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {
        $title = 'Товары для домашних животных';
        $subTitle = '<em>(кошек и собак)</em>';
        $products = ['Product1', 'Product2'];
        $categories = Category::all();
        // dump($products);
        // dd($categories);
        return view('main.index', compact('title','products', 'subTitle', 'categories'));
    }
    
    public function contacts()
    {
        return view('main.contacts');
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


