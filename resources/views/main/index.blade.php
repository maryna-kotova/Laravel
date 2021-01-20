@extends('layouts.main')

@section('page-index')   

    <h1 style="margin: 4rem">{{ $title }} {!! $subTitle !!}</h1>
    <div class="page-header">
        <p class="title" style="text-align: center">Категории товаров</p>
    </div>
 
    <section class="mainPageCategory" style="display: flex; justify-content:space-around;">
        @foreach ($categories as $category)

            <div class="card" style="width: 18rem;">
                <img src="{{ $category->img }}" 
                     class="card-img-top" 
                     alt="Товары для кошек и собак"
                     style="height:17rem">            
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <p class="card-text">{{ $category->description}}</p>
                    <a href="/{{ $category->slug }}" class="btn btn-outline-warning" >Подробнее...</a>
                </div>
            </div>

        @endforeach
    </section>

    <div class="page-header">
        <p class="title" style="text-align: center">Все товары</p>
    </div>

    <section class="mainPageCategory" style="display: flex; flex-flow: row wrap; justify-content:space-around;">
        @foreach ($products as $product)

            <div class="card" style="width: 18rem; margin:1rem;">
                <img src="{{ $product->img }}" 
                     class="card-img-top" 
                     alt="Товары для животных"
                     style="height:15rem">            
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $product->name }}</h5>
                    <p class="text-center text-warning">{{ $product->price }} грн.</p>
                    <a href="/{{ $product->slug }}" class="btn btn-warning" >Подробнее...</a>
                </div>
            </div>

        @endforeach
    </section>

@endsection

{{-- @section('title')
    {{ $title }} 
@endsection --}} 
@section('title', $title)


