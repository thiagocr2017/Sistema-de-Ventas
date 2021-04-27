@extends('components.layout')
@section('title', 'Categoría')
@section('content')
<div class="bg-white mt-4 rounded-lg shadow-md">
  <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
    Categoría: {{ $data['category']->name }}
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
    Descripción: {{ $data['category']->description }}.
    </p>
  </div>
  <div class=" shadow overflow-hidden border-gray-400 rounded-b-lg border-t-0">
    <!-- Table of Products in the Category -->
      <table class=" table-fixed w-full divide-y divide-gray-200 border-b">
        <thead class="bg-gray-200">
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Imagen</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Código</th>
          <th scope="col" class="px-auto py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Nombre</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Precio</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Stock</th>
          <th scope="col" class="px-auto py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Status</th>
        </thead>
        
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($data['products'] as $productCategory)
          <tr scope="row">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="h-10 w-10">
                @if($productCategory->image)
                  <img class="h-8 w-8 sm:h-10 sm:w-10 rounded-full" src="{{$productCategory->image}}" alt="">
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
                <a href="{{route('products.show', $productCategory->id)}}" class=" text-indigo-500" title="Show">
                {{$productCategory->code}}
                </a>  
              </div>    
            </td>
            <td class="px-auto py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">
              <p class="truncate">{{$productCategory->name}}</p>
            </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-500">
              {{$productCategory->sell_price}}</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-500">
              {{$productCategory->stock}}</div>
            </td>
            @if( $productCategory->status === "ACTIVE")
            <td class="px-auto whitespace-nowrap">
              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                Activo
              </span>
            </td>
            @else
            <td class="px-auto py-4 whitespace-nowrap">
              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                Inactivo
              </span>
            </td>
            @endif
          </tr>   
        @endforeach
        </tbody>
        
      </table>
      <div class="mx-2 my-2">
        {{$data['category']->products()->paginate(5)->links()}}
      </div>
      @if($data['products']->isEmpty())
        <div class="flex justify-center">
          <div class="p-4 font-semibold text-xs">No existe items para enseñar.</div>
        </div>
      @endif
    <!-- Table of Products in the Category -->
  </div>
</div>
@endsection

@section('script')

@endsections