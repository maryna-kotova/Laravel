@extends('layouts.main')
{{-- @section('css')
    <link rel="stylesheet" href="css/style.css">    
@endsection --}}

@section('content')   

    {{-- <h1>{{ $title }} {!! $subTitle !!}</h1> --}}
    <h1 class="text-center">{{ $title }}</h1>

    <div class="page-header">
        <p class="title">Категории</p>
    </div>
 
    {{-- <section class="mainPageCategory">


        @foreach ($products as $product)
            <div class="cards">
                <img src="{{ $product->img }}" 
                     class="card-Img" 
                     alt="{{$product->name}}">            
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $product->name }}</h5>        
                    <p class="card-price">{{ $product->price }} грн.</p>
                    <a href="/{{ $product->slug }}" class="card-btn-full" >Купить</a>
                </div>
            </div>
        @endforeach
    </section>

    <div class="page-header">
        <p class="title">Новинки</p>
    </div>

    <section class="mainPageCategory">
        @foreach ($products as $product)
            <div class="cards">
                <img src="{{ $product->img }}" 
                     class="card-Img" 
                     alt="Товары для животных">            
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $product->name }}</h5>
                    <h6>Категория: <a href="/category/{{$product->category->slug}}">{{ $product->category->name }}</a></h6>
                    <p class="card-price">{{ $product->price }} грн.</p>
                    <a href="/{{ $product->slug }}" class="card-btn-full" >Купить</a>
                </div>
                
                
            </div>

        @endforeach
    </section> --}}
    <section class="mainPageCategory">
        @foreach ($products as $product)
  
            @include('store.parts._product')
  
        @endforeach
    </section>
  
    {{-- {{$products->links()}} --}}

@endsection

{{-- @section('title')
    {{ $title }} 
@endsection --}} 
@section('title', 'Cat&Dog')


