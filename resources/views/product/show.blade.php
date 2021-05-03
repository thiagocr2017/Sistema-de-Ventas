@extends('components.layout')
@section('title', 'Producto')
@section('breadcrumbs')
    {{ Breadcrumbs::render('products.show', $product) }}
@endsection
@section('content')
<!-- Tab Nav -->
<div 
  x-data="{
    openTab: 1,
    activeClasses: 'border-l border-t border-r rounded-t-lg text-gray-700',
    inactiveClasses: 'rounded-t-lg text-gray-400 hover:text-gray-900 bg-gray-200'
  }" 
>
@include('product.components.tabs')
  <!-- Tab 1 -->
  <div class="card bg-white rounded-tl-none rounded-lg border mb-4" x-show="openTab === 1">
    <div class="grid grid-cols-3 pt-2 lg:pt-0">

      <!-- Product Image col 1 -->
      <div class="justify-self-center self-center col-span-full lg:col-span-1 pb-2">
        @if(file_exists(public_path('images/products/').$product->image))
          <img class=" h-full object-cover" src="{{asset('images/products/'.$product->image)}}">
        @else
          <span class="p-4 inline-flex rounded-full bg-gray-200 text-grey-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-56 w-56" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
            </svg>
          </span>
        @endif
      </div>
      <!-- End Product Image -->

      <!-- Product Info col 2 -->
      <div class="col-span-full lg:col-start-2 lg:col-end-4 lg:border-l border-gray-200">
        <dl>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 lg:rounded-t-lg lg:rounded-tl-none">
            <dt class="text-sm font-medium text-gray-500">
              Producto
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $product->name }}
            </dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
              Descripción
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $product->description }}
            </dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
              Stock
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{$product->stock}}
            </dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
              Precio de Venta
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{$product->sell_price}}
            </dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
              Categoría
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              <a href="{{route('categories.show', $product->category->id)}}" class=" text-indigo-500">{{ $product->category->name }}</a>
            </dd>
          </div>
          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
              Proveedor
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              <a href="{{route('providers.show', $product->provider->id)}}" class=" text-indigo-500">{{ $product->provider->name }}</a>
            </dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 lg:rounded-br-lg rounded-b-lg">
            <dt class="text-sm font-medium text-gray-500">
              Status
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            @if($product->status === "ACTIVE")
               <div class="rounded-lg w-12 text-center text-green-600 bg-green-100">Activo</div>
              @else
              <div class="rounded-lg w-16 text-center text-red-600 bg-red-100">Inactivo</div>
            @endif
            </dd>
          </div>
        </dl>
      </div>
      <!-- End Product Info -->

    </div>
    <!-- Div 2 Col -->
  </div>
  <!-- End Tab 1 -->
  <!-- Tab 2 -->
  <div class="card bg-white rounded-tl-none rounded-lg border mb-4" x-show="openTab === 2">
    <!-- Header Info -->
    <div class="card-head flex-col">
      <div class="">
        <h3 class="text-lg font-medium text-gray-900">
          Lista de Compras
        </h3>
        <p class="max-w-2xl text-sm text-gray-500">
          Descripción: {{ $product->description }}.
        </p>
      </div>
    </div>
    <!-- Body Info -->
    <!-- Table of Products in the Purchases -->

    <!-- End Table of Products in the Purchases -->
  </div>
  <!-- End Tab 2 -->
  <!-- Tab 3 -->
  <div class="card bg-white rounded-tl-none rounded-lg border mb-4" x-show="openTab === 3">
    <!-- Header Info -->
    <div class="card-head flex-col">
      <div class="">
        <h3 class="text-lg font-medium text-gray-900">
          Lista de Ventas
        </h3>
        <p class="max-w-2xl text-sm text-gray-500">
          Descripción: {{ $product->description }}.
        </p>
      </div>
    </div>
    <!-- Body Info -->
    <!-- Table of Products in the Sales -->

    <!-- End Table of Products in the Sales -->
  </div>
  <!-- End Tab 3 -->
  <!-- Tab 4 -->
  <div class="card bg-white rounded-tl-none rounded-lg border mb-4" x-show="openTab === 4">
    <!-- Header Info -->
    <div class="card-head flex-col">
      <div class="">
        <h3 class="text-lg font-medium text-gray-900">
          Lista de Clientes
        </h3>
        <p class="max-w-2xl text-sm text-gray-500">
          Descripción: {{ $product->description }}.
        </p>
      </div>
    </div>
  </div>
  <!-- End Tab 4 -->
</div>
@endsection
