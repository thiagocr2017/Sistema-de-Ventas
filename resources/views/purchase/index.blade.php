@extends('components.layout')
@section('title', 'Categories')
@section('content')
<div class="grid grid-cols-1 sm:grid-cols-1 xl:grid-cols-1 gap-4 mt-4">
  <div class="bg-white p-6 rounded-lg shadow-md">
    <p>Lista de Categorias</p>
    <table class="table table-fixed w-full mt-2">
        <thead>
          <th class=" w-1/4">Nombre</th>
          <th class=" w-1/2">Descripción</th>
          <th class=" w-1/4">Acciones</th>
        </thead>
      <tbody class=" ">
      @foreach ($categories as $category)
        <tr>
          <td>{{$category->name}}</td>
          <td>{{$category->description}}</td>
          <td></td>
        </tr>   
      @endforeach
      </tbody>
    </table>
    <div class="mt-2">
    {{$categories->links()}}
    </div>
  </div>
</div>
@endsection

@section('script')

@endsection