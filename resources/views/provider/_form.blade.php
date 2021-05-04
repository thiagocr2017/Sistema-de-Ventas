@if(Route::is('providers.create'))
<!-- Form for Create -->
<div class="col-span-6 sm:col-span-3">
  <label for="name" class="block text-sm font-medium text-gray-700">
    Nombre
  </label>
  <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de un proveedor" require>
  @error('name')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="description" class="block text-sm font-medium text-gray-700">
    Decripción
  </label>
  <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Decripción de un proveedor"></textarea>
  </div>
  @error('description')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="phone" class="block text-sm font-medium text-gray-700">
    Teléfono
  </label>
  <input type="text" name="phone" id="phone" autocomplete="given-phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="+15401489289" require>
  @error('phone')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="email" class="block text-sm font-medium text-gray-700">
    Email
  </label>
  <input type="email" name="email" id="email" autocomplete="given-email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="info@email.com">
  @error('email')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="ruc_number" class="block text-sm font-medium text-gray-700">
    Documento de Empresa
  </label>
  <input type="number" name="ruc_number" id="ruc_number" autocomplete="given-ruc_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="80109075387" require>
  @error('ruc_number')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="address" class="block text-sm font-medium text-gray-700">
    Dirección
  </label>
  <textarea id="address" name="address" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Ed. Numero 2, calle 3, barrio 4, ciudad 5"></textarea>
  @error('address')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="state" class="block text-sm font-medium text-gray-700">
    Esdado / Provincia
  </label>
  <input type="text" name="state" id="state" autocomplete="given-state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre del Estado o Provincia">
  @error('state')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="country" class="block text-sm font-medium text-gray-700">
    País
  </label>
  <input type="text" name="country" id="country" autocomplete="given-country" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre del País">
  @error('country')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<!-- End Form for Create -->
@else
<!-- Form for Edit -->
<div class="col-span-6 sm:col-span-3">
  <label for="name" class="block text-sm font-medium text-gray-700">
    Nombre
  </label>
  <input type="text" name="name" id="name" value="{{$provider->name}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de un proveedor" require>
  @error('name')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="description" class="block text-sm font-medium text-gray-700">
  Decripción
  </label>
  <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Decripción de un proveedor">{{$provider->description}}</textarea>
  </div>
  @error('description')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4 col-span-6 sm:col-span-3">
  <label for="phone" class="block text-sm font-medium text-gray-700">
    Teléfono
  </label>
  <input type="text" name="phone" id="phone" value="{{$provider->phone}}" autocomplete="given-phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="+15401489289" require>
  @error('phone')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="email" class="block text-sm font-medium text-gray-700">
    Email
  </label>
  <input type="text" name="email" id="email" value="{{$provider->email}}" autocomplete="given-email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="info@email.com">
  @error('email')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="ruc_number" class="block text-sm font-medium text-gray-700">
    Documento de Empresa
  </label>
  <input type="text" name="ruc_number" id="ruc_number" value="{{$provider->ruc_number}}" autocomplete="given-ruc_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="801090753" require>
</div>
  @error('ruc_number')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="address" class="block text-sm font-medium text-gray-700">
    Dirección
  </label>
  <textarea id="address" name="address" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Ed. Numero 2, calle 3, barrio 4, ciudad 5">{{$provider->address}}</textarea>
</div>
  @error('address')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="state" class="block text-sm font-medium text-gray-700">
    Esdado / Provincia
  </label>
  <input type="text" name="state" id="state" value="{{$provider->state}}" autocomplete="given-state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre del Estado o Provincia">
</div>
  @error('state')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="country" class="block text-sm font-medium text-gray-700">
    País
  </label>
  <input type="text" name="country" id="country" value="{{$provider->country}}" autocomplete="given-country" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre del País">
  @error('country')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<!-- End Form for Edit -->
@endif