@extends('components.layout')
@section('title', 'Editar Categoría')
@section('content')
<div class="bg-white p-6 mt-4 rounded-lg shadow-md">
  <div class="flex">
    <p>Editar Categoría</p>
  </div>
  <form method="POST" action="{{ route('categories.update', $category) }}">
    @method('PUT')
      @csrf
    @include('category._form')
    <div class="px-4 py-4 text-center  md:text-right">
      <a href="{{ route('categories.index') }}" class="inline-flex justify-center py-2 px-4 border  shadow-sm text-sm font-medium rounded-md text-gray-700  hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Cancelar
      </a>
      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Actualizar
      </button>
    </div>
  </form>
</div>
@endsection

@section('script')

@endsection