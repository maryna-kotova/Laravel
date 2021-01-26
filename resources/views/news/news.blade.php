@extends('layouts.main')
@section('title', $title)

@section('content')

    <div class="page-header">
        <p class="title">{{ $title }}</p>
    </div>

    @foreach ($news as $new)
        <article class="news">           
            <img src="{{ $new->img }}" alt="{{ $title }}">   
            <h4>{{ $new->title }}</h4>    
            <p>{{ $new->created_at}}</p>    
            <p>{{ $new->short_content }}</p>
            
        </article>
    @endforeach

    {{$news->links()}}

@endsection