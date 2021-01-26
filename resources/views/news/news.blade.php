@extends('layouts.main')
@section('title', $title)

@section('content')

    <div class="page-header">
        <p class="title">{{ $title }}</p>
    </div>

    @foreach ($news as $new)
        <div class="news">           
            <img src="{{ $new->img }}" alt="{{ $title }}">   
            <article>
                <h3>{{ $new->title }}</h3>    
                <p>{{ $new->created_at}}</p>    
                <p>{{ $new->short_content }}</p>
            </article>            
        </div>
    @endforeach

    {{$news->links()}}

@endsection