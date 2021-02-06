@extends('admin.layouts.index')

@section('content')
   <h1>Категории</h1>
   <a href="/admin/category/create" class="btn btn-primary">Добавить категорию</a>
   <a href="{{ asset('admin/category/create') }}" class="btn btn-primary">Добавить категорию</a>
   <a href="{{ route('category.create') }}" class="btn btn-primary">Добавить категорию</a>

   <table class="table" id="dataTable">
      <thead>
         <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         @foreach ($categories as $item)
            <tr>
               <td>{{$loop->iteration}}</td>
               <td><img style="width: 50px;" src="{{asset($item->img)}}" alt="img"></td>
               <td>{{$item->name}}</td>
               <td>
                  <a href=""><i class="far fa-edit"></i></a>
                  <a href=""><i class="fas fa-trash-alt"></i></a>
               </td>
            </tr>
         @endforeach

      </tbody>
   </table>

@endsection

@section('js')
   <script>
         $(document).ready( function () {
            $('#dataTable').DataTable();
         } );
   </script>    
@endsection