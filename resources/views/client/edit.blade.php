@extends('components.layout')
@section('title', 'Editar Cliente')
@section('breadcrumbs')
    {{ Breadcrumbs::render('clients.edit', $client) }}
@endsection
@section('content')
<div class="card mb-4">
  <div class="card-head flex-col">
    <h3 class="text-lg font-medium text-gray-900">
      Editar Cliente
    </h3>
    <p class="mt-1 max-w-2xl text-xs text-gray-500">
      Actualiza los datos del cliente
    </p>
  </div>
  <form method="POST" action="{{ route('clients.update', $client) }}" class="p-4">
    @method('PUT')
      @csrf
    @include('client._form')
    <div class="px-4 py-4 text-center  md:text-right">
      <a href="{{ route('clients.index') }}" class="inline-flex justify-center py-2 px-4 border  shadow-sm text-sm font-medium rounded-md text-gray-700  hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Cancelar
      </a>
      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Actualizar
      </button>
    </div>
  </form>
</div>
@endsection