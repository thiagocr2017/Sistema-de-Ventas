@extends('components.layout')
@section('title', 'Clientes')
@section('content')
<!-- Provider List -->
<div class="card mb-4">
  <!-- Header Info -->
  <div class="card-head">
      <div class="flex-grow">
        <h3 class="text-lg font-medium text-gray-900">
        Lista de Clientes</h3>
        <p class="mt-1 max-w-2xl text-xs text-gray-500">
          Aqui podrás crear un nuevo cliente o editar e eliminar un existente además podrás consultar las informaciónes del cliente.
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
              <a href="{{ route('clients.create') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                Nuevo Cliente
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
  <table class="table w-full table-fixed">
      <thead class="table-header-group bg-gray-200">
        <th class="table-cell">
          Nombre</th>
        <th class="table-cell" >
          Teléfono
        </th>
        <th class="md:table-cell w-1/3 hidden">
          Email</th>
        <th class="sm:table-cell w-28">
          Acciones</th>
      </thead>
    <tbody class="bg-white">
      <div class="table-row-group">
        @foreach ($clients as $client)
          <tr class="table-row divider-y">
            <td class="table-cell truncate">
              <div class="text-sm font-medium text-gray-900 ">
                <a href="{{route('clients.show', $client)}}" class=" text-indigo-500" title="Show">
                {{$client->name}}</a>
              </div>
            </td>
            <td class="table-cell truncate">
            <div class="text-sm font-light text-gray-500">
              <p>{{$client->phone}}</p>
            </div>
            </td>
            <td class="md:table-cell truncate hidden">
            <div class="text-sm text-gray-500 font-light">
              <p>{{$client->email}}</p>
            </div>
            </td>
            <td class="sm:table-cell">
              <span class="px-2 inline-flex items-center">
                <a href="{{route('clients.edit', $client)}}" class=" text-indigo-400" title="Edit">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg>
                </a>
              </span>
              <span class="inline-flex items-center">
                <form action="{{route('clients.destroy',$client->id)}}" method="POST">
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
  <div class="mx-2 my-2">
    {{$clients->links()}}
  </div>
  @if($clients->isEmpty())
    <div class="flex justify-center">
      <div class="p-4 font-semibold text-xs">No existe item para mostrar.</div>
    </div>
  @endif
  <!-- Table of Clients -->
</div>
@endsection

@section('script')

@endsection