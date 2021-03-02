@extends('layouts.main')

@section('content')
<<<<<<< HEAD

   <div class="page-header">
      <p class="title">Checkout</p>
   </div>
   
   <div class="modal-body">
      @include('store.parts._cart')
   </div>

   @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>       
   @endif
=======
   <h1>Checkout</h1>
   <div class="modal-body">
      @include('store.parts._cart')
   </div>
>>>>>>> 35d55bb4a495c78017befa2feeed9cde191589cc
   
   {!! Form::open(['url'=>'/checkout']) !!}
   <div class="form-group">
      {!! Form::label('name') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
   </div>

   <div class="form-group">
      {!! Form::label('phone') !!}
      {!! Form::text('phone', null, ['class'=>'form-control']) !!}
   </div>

   <div class="form-group">
      {!! Form::label('adress') !!}
      {!! Form::text('address', null, ['class'=>'form-control']) !!}
   </div>

   {!! Form::submit('checkout', ['class'=>'btn btn-primary']) !!}

   {!! Form::close() !!}

@endsection