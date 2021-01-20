@extends('layouts.main')
@section('title', 'Reviews')

@section('page-reviews')
    <h1 class="text-center">Отзывы</h1>

    <form action="/reviews" method="POST" style="width: 50%; margin: 2rem auto;">
        @csrf 
        <div class="form-group">
            {{-- <label for="name">Имя</label> --}}
            <input type="text" 
                   name="name" 
                   id="name" 
                   class="form-control border-secondary" 
                   style="box-shadow:none"
                   placeholder="Ваше имя">
        </div>
        <div class="form-group">
            {{-- <label for="review">Review</label> --}}
            <textarea name="review" 
                      id="review" 
                      class="form-control border-secondary"
                      style="min-height:7rem; box-shadow:none" 
                      placeholder="*Напишите свой отзыв"></textarea>
        </div>    
        
        <input type="hidden" name="action" value="saveReview">
        <button class="btn btn-warning">Отправить</button>
    
    </form>
    
@endsection
