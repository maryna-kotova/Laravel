@extends('layouts.main')
@section('title', 'Contacts')

@section('page-contacts')   

    <div class="page-header">
        <p class="title">{{ $title }}</p>
    </div>
    
    @include('messages.errors')

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>        
    @endif

    <form action="/contacts" method="POST" class="formaContacts">
        @csrf  
        {{--  @csrf   обязательная защита данных и убирает 419 ошибку --}}
        <div class="form-group">
            {{-- <label for="name">Name</label> --}}
            <input type="text"
                   name='name'                  
                   id="name" 
                   value="{{old('name')}}"
                   class="form-control border-secondary @error('name') is-invalid @enderror"
                   placeholder="*Имя">
            {{-- поле ошибок вокруг инпута --}}
            @error('name') 
            <div class="invalid-feedback">{{$message}}</div>
            @enderror            
        </div>
        <div class="form-group">
            {{-- <label for="name">Email</label> --}}
            <input type="text"                    
                   name='email' 
                   id="email" 
                   value="{{old('email')}}"
                   class="form-control border-secondary" 
                   placeholder="*E-mail">
        </div>
        <div class="form-group">
            {{-- <label for="message">Message</label> --}}
            <textarea name="message" 
                      id="message" 
                      rows="7"
                      class="form-control border-secondary"
                      placeholder="Ваше сообщение">{{old('message')}}</textarea>
            {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
        </div>
    
        <button class="btn btn-full">Отправить</button>
    </form>

@endsection

