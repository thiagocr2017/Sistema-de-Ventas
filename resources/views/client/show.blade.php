@extends('components.layout')
@section('title', 'Cliente')
@section('breadcrumbs')
    {{ Breadcrumbs::render('clients.show', $client) }}
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
  <ul class="flex">
    <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
      <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold " id="1">
        Cliente
      </a>
    </li>
    <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
      <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" id="2">
        Compras
      </a>
    </li>
    <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
      <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" id="3">
        Devoluciones
      </a>
    </li>
    <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
      <a :class="openTab === 4 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" id="4">
        Productos
      </a>
    </li>
  </ul>
  <!-- Tab 1 -->
  <div class="card" x-show="openTab === 1">
    <div class="border rounded-lg rounded-tl-none border-gray-200">
      <dl>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-t-lg rounded-tl-none">
          <dt class="text-sm font-medium text-gray-500">
            Cliente
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $client->name }}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Empresa ID
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $client->ruc }}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Documento ID
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $client->dni }}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Teléfono
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $client->phone }}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Email
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $client->email }}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            País
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $client->country }}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Estado / Provincia
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $client->state }}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-b-lg">
          <dt class="text-sm font-medium text-gray-500">
            Dirección
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $client->address }}
          </dd>
        </div>
      </dl>
    </div>
  </div>
  <!-- End Tab 1 -->

  <!-- Tab 2 -->
  <div class="card p-4 rounded-tl-none" x-show="openTab === 2">
  </div>
  <!-- End Tab 2 -->

  <!-- Tab 3 -->
  <div class="card p-4 rounded-tl-none" x-show="openTab === 3"></div>  
  <!-- End Tab 3 -->

  <!-- Tab 4 -->
  <div class="card p-4 rounded-tl-none" x-show="openTab === 4"></div>
  <!-- End Tab 4 -->
</div>
@endsection
@section('script')

@endsection

