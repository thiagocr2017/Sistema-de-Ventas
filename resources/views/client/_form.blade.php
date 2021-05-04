@if(Route::is('clients.create'))
<!-- Form for Create -->
<div class="col-span-6 sm:col-span-3">
  <label for="name" class="block text-sm font-medium text-gray-700">
    Nombre
  </label>
  <input value="{{ old('name') }}" type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de un cliente" require>
  @error('name')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="dni" class="block text-sm font-medium text-gray-700"> 
    Documento de Identificación
  </label>
  <input value="{{ old('dni') }}" type="text" name="dni" id="dni" autocomplete="given-dni" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="ABC09075387" require>
  @error('dni')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="ruc" class="block text-sm font-medium text-gray-700">
    Documento de Empresa
  </label>
  <input value="{{ old('ruc') }}" type="number" name="ruc" id="ruc" autocomplete="given-ruc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="80109075387" require>
  @error('ruc')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="phone" class="block text-sm font-medium text-gray-700">
    Teléfono
  </label>
  <input value="{{ old('phone') }}" type="text" name="phone" id="phone" autocomplete="given-phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="+15401489289" require>
  @error('phone')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="email" class="block text-sm font-medium text-gray-700">
    Email
  </label>
  <input value="{{ old('email') }}" type="email" name="email" id="email" autocomplete="given-email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="info@email.com">
  @error('email')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="address" class="block text-sm font-medium text-gray-700">
    Dirección
  </label>
  <textarea id="address" name="address" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Ed. Numero 2, calle 3, barrio 4, ciudad 5">{{ old('address') }}</textarea>
  @error('address')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="state" class="block text-sm font-medium text-gray-700">
    Esdado / Provincia
  </label>
  <input value="{{ old('state') }}" type="text" name="state" id="state" autocomplete="given-state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre del Estado o Provincia">
  @error('state')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="country" class="block text-sm font-medium text-gray-700">
    País
  </label>
  <input value="{{ old('country') }}" type="text" name="country" id="country" autocomplete="given-country" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre del País">
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
  <input type="text" name="name" id="name" value="{{$client->name}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de un proveedor" require>
  @error('name')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="dni">Documento</label>
  <input type="text" name="dni" id="dni" value="{{$client->dni}}" autocomplete="given-dni" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="ABC09075387" require>
  @error('dni')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="ruc" class="block text-sm font-medium text-gray-700">
    Documento de Empresa
  </label>
  <input type="number" name="ruc" id="ruc" value="{{$client->ruc}}" autocomplete="given-ruc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="80109075387" require>
  @error('ruc')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4 col-span-6 sm:col-span-3">
  <label for="phone" class="block text-sm font-medium text-gray-700">
    Teléfono
  </label>
  <input type="text" name="phone" id="phone" value="{{$client->phone}}" autocomplete="given-phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="+15401489289" require>
  @error('phone')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="email" class="block text-sm font-medium text-gray-700">
    Email
  </label>
  <input type="text" name="email" id="email" value="{{$client->email}}" autocomplete="given-email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="info@email.com">
  @error('email')
      <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="address" class="block text-sm font-medium text-gray-700">
    Dirección
  </label>
  <textarea id="address" name="address" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Ed. Numero 2, calle 3, barrio 4, ciudad 5">{{$client->address}}</textarea>
  @error('address')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="state" class="block text-sm font-medium text-gray-700">
    Esdado / Provincia
  </label>
  <input type="text" name="state" id="state" value="{{$client->state}}" autocomplete="given-state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre del Estado o Provincia">
  @error('state')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="country" class="block text-sm font-medium text-gray-700">
    País
  </label>
  <input type="text" name="country" id="country" value="{{$client->country}}" autocomplete="given-country" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre del País">
  @error('country')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<!-- End Form for Edit -->
@endif