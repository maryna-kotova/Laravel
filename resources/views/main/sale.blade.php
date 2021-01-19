@extends('layouts.main')
@section('title', 'Sales')

@section('page-sales')
    <h1 class="text-center">{{ $title }}</h1>
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
                    {{-- <p class="card-text">{{ $product->description}}</p> --}}
                    <p>Категория: <span class="font-italic">{{ $product->category_id }}</span></p>
                    <p class="text-center text-warning">{{ $product->price }} грн.</p>
                    <a href="/{{ $product->slug }}" class="btn btn-warning" >Подробнее...</a>
                </div>
            </div>

        @endforeach
    </section>













@endsection

