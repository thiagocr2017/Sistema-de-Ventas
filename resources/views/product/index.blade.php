@extends('components.layout')
@section('title', 'Productos')
@section('breadcrumbs')
    {{ Breadcrumbs::render('products.index') }}
@endsection
@section('content')
<!-- Product List -->
<div class="card mb-4">
  <!-- Header Info -->
  <div class="card-head">
    <div class="flex-grow">
      <h3 class="text-lg font-medium text-gray-900">
      Lista de Productos</h3>
      <p class="mt-1 max-w-2xl text-xs text-gray-500">
        Aqui podrás crear un producto o editar e eliminar un existente además podras consultar algunas informaciones del producto.
      </p>
    </div>
    <!-- Dropdown Button -->
    <div class="ml-2 flex-shrink">
      <div class="relative inline-block text-left mb-2" x-data="{ open: false }">
          <button @click="open = !open" @click.away="open = false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
            Opciónes
            <!-- Heroicon name: solid/chevron-down -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :class="{'rotate-180': open}" class="ml-1 transform inline-block fill-current text-gray-500 w-6 h-6"><path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z"/></svg>
          </button>
        <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
          <div class="py-1" role="none" x-show="open">
            <a href="{{ route('products.create') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
              Nuevo Producto
            </a>
            <!-- <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
              Support
            </a>
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">
              License
            </a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Dropdown Button -->
  </div>
  <!-- Body Info -->
  <!-- Table of products -->
  <table class="table w-full table-fixed">
      <thead class="table-header-group bg-gray-200">
      <th class="lg:table-cell hidden w-24">
        Imagen</th>
        <th class="table-cell">
        Código</th>
        <th class="lg:table-cell hidden">
        Nombre</th>
        <th class="table-cell text-center w-24">
        Precio</th>
        <th class="table-cell text-center w-24">
        Stock</th>
        <th class="table-cell w-24">
        Status</th>
        <th class="table-cell w-28">
        Acciones</th>
      </thead>
    <tbody class="bg-white">
      <div class="table-row-group">
        @foreach ($products as $product)
          <tr class="table-row divider-y">
            <td class="lg:table-cell hidden">
              @if(file_exists(public_path('images/products/').$product->image))
              <img class="rounded-full sm:h-10 sm:w-10" src="{{asset('images/products/'.$product->image)}}">
              @else
              <span class="p-1 h-8 w-8 sm:h-10 sm:w-10 sm:p-2 px-2 inline-flex leading-5 font-semibold rounded-full bg-gray-200 text-grey-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
              </span>
              @endif
            </td>
            <td class="table-cell truncate">
              <div class="text-sm font-medium text-gray-900">
                    <a href="{{route('products.show', $product->id)}}" class=" text-indigo-500" title="Show">
                    <h4>{{$product->code}}</h4>
                    </a>  
              </div>    
            </td>
            <td class="lg:table-cell truncate hidden">
              <div class="text-sm font-small text-gray-900">
                  {{$product->name}}
              </div>
            </td>
            <td class="table-cell">
              <div class="text-sm text-center text-gray-500">
                {{$product->sell_price}}
              </div>
            </td>
            <td class="table-cell">
              <div class="text-sm text-center text-gray-500">
                {{$product->stock}}
              </div>
            </td>
            @if( $product->status === "ACTIVE")
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
            <td class="table-cell">
              <span class="px-2 inline-flex items-center">
                <a href="{{route('products.edit', $product)}}" class=" text-indigo-400" title="Edit">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg>
                </a>
              </span>
              <span class="inline-flex items-center">
                <form action="{{route('products.destroy',$product->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                <button type="submit" value="Delete" class=" text-red-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </button>
                </form>
              </span>
              </div>
            </td>
          </tr>   
        @endforeach
      </div>
    </tbody>
  </table>
  @if($products->isEmpty())
    <div class="flex justify-center">
      <div class="p-4 font-semibold text-xs">
        <p>No existe ítem para mostrar.</p>
      </div>
    </div>
  @endif
  <div class="p-2 bg-gray-200">
    {{$products->links()}}
  </div>
  <!-- Table of products -->
</div>
@endsection