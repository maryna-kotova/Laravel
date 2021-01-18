<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function dogs()
    {
        return view('main.dogs');
    }

    public function cats()
    {
        return view('main.cats');
    }
}
