<!--Sidebar-->
<div class="w-full px-2 fixed bottom-0 md:w-1/5 md:pt-8 md:top-10 md:left-0 h-16 md:h-full text-center bg-gray-900 md:bg-gray-900 z-10">
   <div class="md:relative mx-auto lg:float-right lg:px-6 ">
      <ul class="list-reset flex flex-row p-2 justify-center text-center md:flex-col md:text-left lg:text-left text-white">
      <h6 class=" hidden md:block mb-4 text-gray-400 border-b border-gray-200 text-sm text-center ">Acciones Rapidas</h6>
        <li class="mr-3 flex text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
            <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg></i>
            <a href="{{route('dashboard')}}" id="inicio" class="block align-middle">
                Inicio
            </a>
        </li>

        <li class="mr-3 hidden md:flex text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
            <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg></i>
            <a href="{{route('user.index')}}" class="block align-middle"> 
                Personal
            </a>
        </li>

        <li class="mr-3 flex text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
            <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg></i> 
            <a href="{{route('clients.index')}}" class="block align-middle"> 
                Clientes
            </a>
        </li>

        <li class="mr-3 hidden md:flex text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
            <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg></i>
            <a href="{{route('providers.index')}}" class="block align-middle">
                Proveedores
            </a>
        </li>

        <li class="mr-3 hidden md:flex text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
            <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg></i>
            <a href="{{route('products.index')}}" class="block align-middle">
                Productos
            </a>
        </li>

        <li class="mr-3 hidden md:flex text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
            <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg></i>
            <a href="{{route('categories.index')}}" class="block align-middle">
                Categorías
            </a>
        </li>

        <li class="mr-3 flex text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
            <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg></i>
            <a href="{{route('purchases.index')}}" class="block align-middle">
                Compras
            </a>
        </li>

        <li class="mr-3 flex text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
            <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg></i>
            <a href="{{route('sales.index')}}" class="block align-middle">
                Ventas
            </a>
        </li>

        <h6 class="mb-4 mt-4 hidden md:block text-gray-400 border-b border-gray-200 text-sm text-center">Ajustes</h6>
        <ul class="hidden md:block">
            <li class="flex  text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500"> <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg></i> 
            <a href="{{route('dashboard')}}" class="block align-middle">
                Perfil
            </a>
            </li>
            <li class="flex  text-white no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500"> <i><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 p-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg></i>
            <a href="{{route('dashboard')}}" class="block align-middle">
                Configuración
            </a>
            </li>
        </ul>
      </ul>
   </div>
</div>