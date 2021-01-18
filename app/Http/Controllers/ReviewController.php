<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviews()
    {
        return view('main.reviews');
    }
}
