@extends('components.layout')
@section('title', 'Proveedores')
@section('content')
<!-- Provider List -->
<div class="card">
  <!-- Header Info -->
  <div class="card-head">
    <div class="flex-grow">
      <h3 class="text-lg font-medium text-gray-900">
      Lista de Proveedor</h3>
      <p class="mt-1 max-w-2xl text-xs text-gray-500">
        Aqui podrás crear un nuevo proveedor o editar e eliminar un existente además podrás consultar la lista de productos que pertenece a un proveedor especifica.
      </p>
    </div>
    <!-- Dropdown Button -->
    <div class="ml-2 flex-shrink">
      <div class="relative inline-block text-left mb-2" x-data="{ open: false }">
          <button @click="open = !open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
            Opciónes
            <!-- Heroicon name: solid/chevron-down -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :class="{'rotate-180': open}" class="ml-1 transform inline-block fill-current text-gray-500 w-6 h-6"><path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z"/></svg>
          </button>
        <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
          <div class="py-1" role="none" x-show="open">
            <a href="{{ route('providers.create') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
              Nueva Proveedor
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
  <!-- Table of Categories -->
  <table class="tb">
      <thead class="bg-gray-200">
        <th scope="col" >
          Nombre</th>
        <th scope="col" >
          Descripción</th>
        <th scope="col">
          Acciones</th>
      </thead>
    <tbody class="bg-white">
    @foreach ($providers as $category)
      <tr class="divider-y">
        <td class="px-auto py-4 whitespace-nowrap">
          <div class="text-sm font-medium text-gray-900">
            <a href="{{route('providers.show', $category)}}" class=" text-indigo-500" title="Show">
            {{$category->name}}</a>
          </div>
        </td>
        <td class="px-auto py-4 whitespace-nowrap">
        <div class="text-sm font-light text-gray-500">
          <p class="truncate">{{$category->description}}</p>
        </div>
        </td>
        <td class="px-auto py-4 whitespace-nowrap">
          <span class="px-2 inline-flex items-center">
            <a href="{{route('providers.edit', $category)}}" class=" text-indigo-400" title="Edit">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
            </a>
          </span>
          <span class="inline-flex items-center">
            <form action="{{route('providers.destroy',$category->id)}}" method="POST">
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
    </tbody>
  </table>
  @if($providers->isEmpty())
    <div class="flex justify-center">
      <div class="p-4 font-semibold text-xs">
        <p>No existe ítem para mostrar.</p>
      </div>
    </div>
  @endif
  <div class="p-2 bg-gray-200">
    {{$providers->links()}}
  </div>
  <!-- Table of Categories -->
</div>
@endsection