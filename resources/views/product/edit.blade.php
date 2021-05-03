@extends('components.layout')
@section('title', 'Producto')
@section('breadcrumbs')
    {{ Breadcrumbs::render('products.edit', $product) }}
@endsection
@section('content')
<div class="card mb-4">
  <form method="POST" action="{{ route('products.update', $product) }}" class="p-4" enctype="multipart/form-data">
    @method('PUT')
      @csrf
    @include('product._form')
    <div class="px-4 py-4 text-center  md:text-right">
      <a href="{{ route('products.index') }}" class="inline-flex justify-center py-2 px-4 border  shadow-sm text-sm font-medium rounded-md text-gray-700  hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Cancelar
      </a>
      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Registrar
      </button>
    </div>
  </form>
</div>
@endsection
@section('script')
<script>
const imageUpl = document.getElementById('image');

const fileChosen = document.getElementById('file-chosen');

imageUpl.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
</script>
@endsection