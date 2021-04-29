@extends('components.layout')
@section('title', 'Proveedor')
@section('content')
<!-- Item in first line -->
<div class="card">
  <div class="card-head flex-col">
    <h3 class="text-lg font-medium text-gray-900">
    Proveedor: {{ $provider->name }}
    </h3>
    <p class=" text-sm text-gray-500">
    Descripción: {{ $provider->description }}.
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Documento ID
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $provider->ruc_number }}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Teléfono
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $provider->phone }}
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Email address
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{ $provider->email }}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          País
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $provider->country }}
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Estado / Provincia
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $provider->state }}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-b-lg">
        <dt class="text-sm font-medium text-gray-500">
          Dirección
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{ $provider->address }}
        </dd>
      </div>
    </dl>
  </div>
</div>
<!-- End Item in first line -->
<!-- Provider Product Info -->
<div class="card">
  <!-- Header Info -->
  <div class="card-head flex-col">
    <div class="">
      <h3 class="text-lg font-medium text-gray-900">
        Lista de Productos
      </h3>
      <p class="max-w-2xl text-sm text-gray-500">
        Descripción: {{ $provider->description }}.
      </p>
    </div>
  </div>
  <!-- Body Info -->
  <!-- Table of Products in the Provider -->
  <table class="tb">
    <thead class="bg-gray-200">
      <th scope="col" class="lg:block hidden ">
      Imagen</th>
      <th scope="col">
      Código</th>
      <th scope="col" class="lg:block hidden ">
      Nombre</th>
      <th scope="col">
      Precio</th>
      <th scope="col">
      Stock</th>
      <th scope="col">
      Status</th>
    </thead>
    <tbody class="bg-white">
    @foreach ($provider->products()->paginate($pages) as $productProvider)
      <tr scope="row" class="divider-y">
        <td class="lg:block hidden">
          <div class="flex items-center">
                <div class="h-10 w-10">
                  @if($productProvider->image)
                  <img class="h-8 w-8 sm:h-10 sm:w-10 rounded-full" src="{{$productProvider->image}}" alt="">
                  @else
                  <span class="p-1 h-8 w-8 sm:h-10 sm:w-10 sm:p-2 px-2 inline-flex leading-5 font-semibold rounded-full bg-gray-200 text-grey-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                  </span>
                  @endif
                </div>
          </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm font-medium text-gray-900">
                <a href="{{route('products.show', $productProvider->id)}}" class=" text-indigo-500" title="Show">
                <h4>{{$productProvider->code}}</h4>
                </a>  
          </div>    
        </td>
        <td class="px-6 py-4 whitespace-nowrap lg:block hidden">
        <div class="text-sm text-gray-900">
              <p class="truncate">{{$productProvider->name}}</p>
        </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-500">
              {{$productProvider->sell_price}}
        </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-500">
              {{$productProvider->stock}}
        </div>
        </td>
        @if( $productProvider->status === "ACTIVE")
        <td class="px-6 whitespace-nowrap">
          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
            Activo
          </span>
        </td>
        @else
        <td class="px-6 py-4 whitespace-nowrap">
          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
            Inactivo
          </span>
        </td>
        @endif
      </tr>
    @endforeach
    </tbody>
  </table>
  @if($provider->products->isEmpty())
    <div class="flex justify-center">
          <div class="p-4 font-semibold text-xs">
            <p>No existe ítem para mostrar.</p>
          </div>
    </div>
  @endif
  <div class="p-2 bg-gray-200">
        {{$provider->products()->paginate($pages)->links()}}
  </div>
  <!-- End Table of Products in the Provider -->
</div>
@endsection
