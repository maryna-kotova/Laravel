@extends('layouts.main')
{{-- @section('css')
    <link rel="stylesheet" href="css/style.css">    
@endsection --}}

@section('page-index')   

    {{-- <h1>{{ $title }} {!! $subTitle !!}</h1> --}}
    <h1 class="text-center">{{ $title }}</h1>

    <div class="page-header">
        <p class="title">Категории</p>
    </div>
 
    <section class="mainPageCategory">
        @foreach ($categories as $category)

            <div class="cards">
                <img src="{{ $category->img }}" 
                     class="card-Img" 
                     alt="Товары для кошек и собак">            
                <div class="card-body">
                    <h6 class="card-title text-center">{{ $category->name }}</h6>
                    {{-- <p class="card-text">{{ $category->description}}</p> --}}
                    {{-- <a href="/{{ $category->slug }}" class="btn btn-outline-warning" >Подробнее...</a> --}}
                    <a href="/{{ $category->slug }}" class="card-btn-empty" >Подробнее...</a>

                </div>
            </div>

        @endforeach
    </section>

    <div class="page-header">
        <p class="title">Новинки</p>
    </div>

    <section class="mainPageCategory">
        @foreach ($newItems as $product)

            <div class="cards">
                <img src="{{ $product->img }}" 
                     class="card-Img" 
                     alt="Товары для животных">            
                <div class="card-body">
                    <h6 class="card-title text-center">{{ $product->name }}</h6>
                    <p class="card-price">{{ $product->price }} грн.</p>
                    <a href="/{{ $product->slug }}" class="card-btn-full" >Купить</a>
                </div>
            </div>

        @endforeach
    </section>

@endsection

{{-- @section('title')
    {{ $title }} 
@endsection --}} 
@section('title', 'Cat&Dog')


