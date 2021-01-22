@extends('layouts.main')
@section('title', 'Sales')

@section('page-sales')
    <div class="page-header">
        <p class="title">{{ $title }}</p>
    </div>

    <section class="mainPageCategory">
        @foreach ($products as $product)

            <div class="cards">
                <img src="{{ $product->img }}" 
                     class="card-Img" 
                     alt="Товары для животных">            
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $product->name }}</h5>
                    {{-- <p class="card-text">{{ $product->description}}</p> --}}
                    {{-- <p>Категория: <span class="font-italic">{{ $product->category_id }}</span></p> --}}
                    <p class="card-price">{{ $product->price }} грн.</p>
                    {{-- <a href="/{{ $product->slug }}" class="btn btn-warning" >Подробнее...</a> --}}
                    <a href="/{{ $product->slug }}" class="card-btn-full" >Купить</a>
                </div>
            </div>

        @endforeach
    </section>
@endsection

