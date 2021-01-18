@extends('layouts.main')
@section('title', 'Contacts')

@section('page-contacts')   

    <h1>Contacts</h1>   
    
    @include('messages.errors')

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>        
    @endif

    <form action="/contacts" method="POST">
        @csrf  
        {{--  @csrf   обязательная защита данных и убирает 419 ошибку --}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name='name' id="name" value="{{old('name')}}">
            {{-- поле ошибок вокруг инпута --}}
            @error('name') 
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
            {{--  --}}
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control" name='email' id="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control">{{old('message')}}</textarea>
        </div>
    
        <button class="btn btn-primary">Send</button>
    </form>

@endsection

