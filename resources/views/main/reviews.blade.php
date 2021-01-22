@extends('layouts.main')
@section('title', 'Reviews')

@section('page-reviews')

    <div class="page-header">
        <p class="title">Отзывы</p>
    </div>

    @include('messages.errors')

    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>        
    @endif

    <form action="/reviews" method="POST" class="formaReviews">
        @csrf 
        <div class="form-group">
            {{-- <label for="name">Имя</label> --}}
            <input type="text" 
                   name="nameReviews" 
                   id="nameReviews" 
                   class="form-control border-secondary inputReviewsName"                    
                   placeholder="Ваше имя"
                   value="{{old('nameReviews')}}">
        </div>
        <div class="form-group">
            {{-- <label for="review">Review</label> --}}
            <textarea name="review" 
                      id="review" 
                      class="form-control border-secondary textareaReviews"                      
                      placeholder="*Напишите свой отзыв">{{old('review')}}</textarea>
        </div>  
        <button class="btn-empty">Отправить</button>    
    </form>
    
@endsection
