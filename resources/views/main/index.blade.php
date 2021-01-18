@extends('layouts.main')

@section('page-index')   

    <h1>{{ $title }} {!! $subTitle !!}</h1>
    @foreach ($categories as $category)
        <p>{{ $category->name}} </p>
    @endforeach

    @foreach ($products as $product)
        <p>{{ $loop->iteration}} {{$product}}</p>
    @endforeach

@endsection

{{-- @section('title')
    {{ $title }} 
@endsection --}} 
@section('title', $title)


