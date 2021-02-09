@extends('layouts.main')


@section('content')
   {{-- Название продукта --}}
   <div class="page-header">
      <p class="title">{{$product->name}}</p>
   </div>
  {{-- Картинка продукта --}}
   <img src="{{$product->img}}" alt="{{$product->name}}">
   {{-- Короткое описание продукта --}}
   <p>{{$product->description}}</p>

    <hr>
    <h4>Оставьте свой отзыв</h4>

   {{-- Вывод ошибок --}}
   @include('messages.errors')
   @if(session('success'))
   <div class="alert alert-success">
       {{session('success')}}
   </div>        
   @endif 

   {{-- Фрма для отправки отзыва --}}
    @auth
    <form action="/reviews" method="POST">
        @csrf
        <div class="form-group">            
        <input type="text"  
               id="nameReviews" 
               class="form-control @error('name') is-invalid @enderror" 
               name="nameReviews" 
               placeholder="Ваше имя"
               value="{{old('nameReviews')}}">
         @error('nameReviews') 
             <div class="invalid-feedback">{{$message}}</div>
         @enderror
        </div>
        <div class="form-group">            
            <textarea  id="review" 
                       class="form-control @error('reviews') is-invalid @enderror" name="review"                        
                       placeholder="Напишите отзыв">{{old('review')}}</textarea>
            @error('review') 
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button class="btn-full">Отправить</button>
    </form>
    @else 
      <p>Оставить отзыв можно только зарегистрированным пользователям</p>
      <a href="/login">Войти</a> / <a href="/register">Зарегистрироваться</a>
    @endauth

    <hr>
    {{-- Все отзывы о данном товаре --}}
    <h4>Отзывы о товаре: {{ count($reviews) }}</h4>
        
    @forelse ($reviews as $review)
      <div class="border p-3 m-3">
         {{$review->name}} | {{ $review->created_at->format('d.m.Y') }} 
         <hr>
         <bloquote>{{$review->review}}</bloquote>
      </div>
      @empty
         <p>Добавьте отзыв к товару</p>
    @endforelse   

@endsection

@section('title', $product->name)