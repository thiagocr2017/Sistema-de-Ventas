@extends('components.layout')
@section('title', 'AppTitle')
@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard') }}
@endsection
@section('content')
    <div class="container p-6 ">
      <h1>Dashboard</h1>
      <!-- Elementos de primera fila -->
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mt-4">
        <div class="bg-white border-b-4 border-green-800 p-6 rounded-lg ">
          <p>Ventas</p>
          <p class=" text-xl font-bold mb-2">$62.500,00</p>
        </div>
        <div class="bg-white border-b-4 border-blue-800  p-6 rounded-lg ">
          <p>Compras</p>
          <p class=" text-xl font-bold mb-2">$22.500,00</p>
        </div>
        <div class="bg-white border-b-4 border-yellow-800  p-6 rounded-lg ">
          <p>Clients</p>
          <p class=" text-xl font-bold mb-2">150</p>
        </div>
        <div class="bg-white border-b-4 border-yellow-400  p-6 rounded-lg ">
          <p>Balance</p>
          <p class=" text-xl font-bold mb-2">$40.000,00</p>
        </div>
      </div>
      <!-- Fin Elementos de primera fila -->

      <!-- Elementos de Segunda fila -->
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-2 gap-4 mt-4 ">
        <div class=" bg-white p-6 rounded-lg shadow-sm ">
        <canvas id="categoryChart" width="400" height="400"></canvas>
        </div>
        <div class=" bg-white p-6 rounded-lg shadow-sm ">
        <canvas id="purchaseChart" width="400" height="400"></canvas>
        </div>
      </div>
      <!-- Fin Elementos de Segunda fila -->

      <!-- Elementos de Tercera fila -->
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-2 gap-4 mt-4 ">
        <div class=" bg-white p-6 rounded-lg shadow-sm ">
        <canvas id="saleChart" width="400" height="400"></canvas>
        </div>
      </div>
      <!-- Fin Elementos de Tercera fila -->
    </div>
@endsection

@section('script')
<script src="{{ asset('js/dashboardChart.js') }}"></script>
@endsection