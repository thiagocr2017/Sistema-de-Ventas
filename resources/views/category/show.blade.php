@extends('components.layout')
@section('title', 'Categoría')
@section('breadcrumbs')
    {{ Breadcrumbs::render('categories.show', $category) }}
@endsection
@section('content')

<!-- Item in first line -->
<div class="card">
  <div class="card-head flex-col">
    <h3 class="text-lg font-medium text-gray-900">
    Categoría: {{ $category->name }}
    </h3>
    <p class=" text-sm text-gray-500">
    Descripción: {{ $category->description }}.
    </p>
  </div>
</div>
<!-- End Item in first line -->
<!-- Category Product Info -->
<div class="card mb-4">
  <!-- Header Info -->
  <div class="card-head flex-col">
      <h3 class="text-lg font-medium text-gray-900">
        Lista de Productos
      </h3>
      <p class="max-w-2xl text-sm text-gray-500">
        Descripción: {{ $category->description }}.
      </p>
  </div>
  <!-- Body Info -->
  <!-- Table of Products in the Category -->
  <table class="table w-full table-fixed">
    <thead class="table-header-group bg-gray-200 ">
      <th class="lg:table-cell hidden w-24">
      Imagen</th>
      <th class="table-cell">
      Código</th>
      <th class="lg:table-cell hidden">
      Nombre</th>
      <th class="table-cell text-center">
      Precio</th>
      <th class="table-cell text-center">
      Stock</th>
      <th class="table-cell w-24">
      Status</th>
    </thead>
    <tbody class="bg-white">
      <div class="table-row-group">
        @foreach ($category->products()->paginate($pages) as $productCategory)
          <tr class="table-row divider-y">
            <td class="lg:table-cell hidden">
              @if(file_exists(public_path('images/products/').$productCategory->image))
              <img class="rounded-full sm:h-10 sm:w-10" src="{{asset('images/products/'.$productCategory->image)}}">
              @else
              <span class="p-1 h-8 w-8 sm:h-10 sm:w-10 sm:p-2 px-2 inline-flex leading-5 font-semibold rounded-full bg-gray-200 text-grey-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
              </span>
              @endif
            </td>
            <td class="table-cell">
              <div class="text-sm font-medium text-gray-900">
                    <a href="{{route('products.show', $productCategory->id)}}" class=" text-indigo-500" title="Show">
                    <h4>{{$productCategory->code}}</h4>
                    </a>  
              </div>    
            </td>
            <td class="lg:table-cell hidden">
              <div class="text-sm font-small text-gray-900">
                    <p class="truncate">{{$productCategory->name}}</p>
              </div>
            </td>
            <td class="table-cell">
            <div class="text-sm text-center text-gray-500">
                {{$productCategory->sell_price}}
            </div>
            </td>
            <td class="table-cell">
            <div class="text-sm text-center text-gray-500">
                {{$productCategory->stock}}
            </div>
            </td>
            @if( $productCategory->status === "ACTIVE")
            <td class="table-cell">
              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-600">
                Activo
              </span>
            </td>
            @else
            <td class="table-cell">
              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-600">
                Inactivo
              </span>
            </td>
            @endif
          </tr>
        @endforeach
      </div>
    </tbody>
  </table>
  @if($category->products->isEmpty())
    <div class="flex justify-center">
          <div class="p-4 font-semibold text-xs">
            <p>No existe ítem para mostrar.</p>
          </div>
    </div>
  @endif
  <div class="p-2 bg-gray-200">
        {{$category->products()->paginate($pages)->links()}}
  </div>
  <!-- End Table of Products in the Category -->
</div>
@endsection
