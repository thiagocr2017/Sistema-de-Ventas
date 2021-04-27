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
  <div class="p-4">
    <!-- Table of Products in the Category -->
      <table class="grid grid-flow-row grid-col-5 gap-10">
          <thead>
            <th>Código</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Status</th>
          </thead>
        <tbody>
        @if($data['products']->isEmpty())
          <tr class="row-span-5">
            <td>La Tabla no contien items</td>
          </tr>
          @else
        @foreach ($data['products'] as $productCategory)
          <tr>
            <td>
              <a href="{{route('products.show', $productCategory->id)}}" class=" text-indigo-500" title="Show">
              {{$productCategory->code}}</a>          
            </td>
            <td>{{$productCategory->name}}</td>
            <td>{{$productCategory->sell_price}}</td>
            <td>{{$productCategory->stock}}</td>

            @if( $productCategory->status === "ACTIVE")
            <td>
              <div class="flex justify-center border-none text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
            </td>
            @else
            <td>
              <div class="flex justify-center border-none text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
            </td>
            @endif
          </tr>
        @endforeach
        @endif
        
        </tbody>
      </table>
      <div class="mt-2">
      {{$data['category']->products()->paginate(5)->links()}}
      </div>
    <!-- Table of Products in the Category -->
</div>
</div>
@endsection

@section('script')

@endsections