<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviews()
    {
        $reviews = Review::all();
        return view('main.reviews', compact('reviews'));
    }
    public function saveReview(Request $request)
    {
        $validated = $request->validate([
            'nameReviews' => 'required|min:3|max:55',            
            'review'      => 'required|min:3|max:1000',
        ]);
        //  dd( $request->all() );
        return back()->with('success', 'Спасибо за отзыв!');
    }
}
