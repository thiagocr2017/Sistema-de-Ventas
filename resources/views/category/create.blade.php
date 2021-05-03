@extends('components.layout')
@section('title', 'Nueva Categoría')
@section('breadcrumbs')
    {{ Breadcrumbs::render('categories.create') }}
@endsection
@section('content')
<div class="card">
  <div class="card-head flex-col">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Nueva Categoría
    </h3>
    <p class="mt-1 max-w-2xl text-xs text-gray-500">
      Digita un nombre e decripción para la categoría.
    </p>
  </div>
  <form method="POST" action="{{ route('categories.store') }}" class="p-4">
      @csrf
    @include('category._form')
    <div class="px-4 py-4 text-center  md:text-right">
      <a href="{{ route('categories.index') }}" class="inline-flex justify-center py-2 px-4 border  shadow-sm text-sm font-medium rounded-md text-gray-700  hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Cancelar
      </a>
      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Registrar
      </button>
    </div>
  </form>
</div>
@endsection