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
                     alt="Товары для собак"
                     style="height:17rem">            
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <p class="card-text">{{ $category->description}}</p>
                    <a href="/{{ $category->slug }}" class="btn btn-outline-warning" >Подробнее...</a>
                </div>
            </div>

        @endforeach
    </section>

    {{-- <section class="allProducts">
        <div class="card" style="width: 18rem;">
            <img src="https://s1.1zoom.ru/big0/81/Dogs_White_background_Spitz_Tongue_546493_1365x1024.jpg" class="card-img-top" alt="Товары для собак">
            <div class="card-body">
                <h5 class="card-title">Товары для собак</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/dogs" class="btn btn-outline-warning" >Подробнее...</a>
            </div>
        </div>
    </section> --}}

    @foreach ($products as $product)
        <p>{{ $loop->iteration}} {{$product}}</p>
    @endforeach

@endsection

{{-- @section('title')
    {{ $title }} 
@endsection --}} 
@section('title', $title)


