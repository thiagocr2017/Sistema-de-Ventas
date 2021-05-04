@if(Route::is('products.create'))
<!-- Form for Create -->
<div class="col-span-6 sm:col-span-3">
  <label for="code" class="block text-sm font-medium text-gray-700">
    Código
  </label>
  <input type="text" name="code" id="code" autocomplete="given-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Código de un producto" require>
  @error('code')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="name" class="block text-sm font-medium text-gray-700">
    Nombre
  </label>
  <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de un producto" require>
  @error('name')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="description" class="block text-sm font-medium text-gray-700">
  Decripción
  </label>
  <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Decripción de un producto"></textarea>
  </div>
  @error('description')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="stock" class="block text-sm font-medium text-gray-700">
    Stock
  </label>
  <input type="number" name="stock" id="stock" autocomplete="given-stock" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="0" require>
  @error('stock')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="sell_price" class="block text-sm font-medium text-gray-700">
    Precio de Venta
  </label>
  <input type="number" name="sell_price" id="sell_price" autocomplete="given-sell_price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="0" require>
  @error('sell_price')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="category_id" class="block text-sm font-medium text-gray-700">
    Categoría
  </label>
  <select name="category_id" id="category_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2 appearance-none" require>
  <option value="{{ null }}">Seleccione una Categoría</option>  
  @foreach($categories as $category)
    <option value="{{ $category->id }}"> {{ $category->name }} </option>
    @endforeach
  </select>
  @error('category_id')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="provider_id" class="block text-sm font-medium text-gray-700">
    Proveedor
  </label>
  <select name="provider_id" id="provider_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2 appearance-none" require>
    <option value="{{ null }}">Seleccione un Proveedor</option>
    @foreach($providers as $provider)
    <option value="{{ $provider->id }}"> {{ $provider->name }} </option>
    @endforeach
  </select>
  @error('provider_id')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="status" class="block text-sm font-medium text-gray-700">
    Status
  </label>
  <select name="status" id="status" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2 appearance-none" require>
    <option value="ACTIVE">Activo</option>
    <option value="DEACTIVATED">Inactivo</option>
  </select>
  @error('status')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="image" class="block text-sm font-medium text-gray-700">
    Imagen
  </label>
  <div class=" mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2">
    <div class="flex relative text-sm text-gray-400">
      <input type="file" name="image" id="image" autocomplete="given-image" class=" self-center" hidden>
      <label for="image" class="flex items-center content-start relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
        <svg class=" h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        Agregar imagen
      </label>
      <span id="file-chosen" class="flex items-center mx-2 font-light"></span>
    </div>
  </div>
  @error('image')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<!-- End Form for Create -->
@else
<!-- Form for Edit -->
<div class="flex flex-col items-center col-span-6 sm:col-span-3 ">
  @if(file_exists(public_path('images/products/').$product->image))
    <img class="h-full object-cover" src="{{asset('images/products/'.$product->image)}}">
  @else
    <span class="p-4 inline-flex leading-5 font-semibold rounded-full bg-gray-200 text-grey-800">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-56 w-56 self-stretch" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
      </svg>
    </span>
  @endif
</div>
<div class="col-span-6 sm:col-span-3">
  <label for="code" class="block text-sm font-medium text-gray-700">
    Código
  </label>
  <input type="text"value="{{$product->code}}" name="code" id="code" autocomplete="given-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Código de un producto" require>
  @error('code')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="name" class="block text-sm font-medium text-gray-700">
    Nombre
  </label>
  <input type="text"value="{{$product->name}}" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de un producto" require>
  @error('name')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="description" class="block text-sm font-medium text-gray-700">
  Decripción
  </label>
  <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Decripción de un producto">{{$product->description}}</textarea>
  </div>
  @error('description')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="stock" class="block text-sm font-medium text-gray-700">
    Stock
  </label>
  <input type="text"value="{{$product->stock}}" name="stock" id="stock" autocomplete="given-stock" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="0" require>
  @error('stock')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="sell_price" class="block text-sm font-medium text-gray-700">
    Precio de Venta
  </label>
  <input type="text"value="{{$product->sell_price}}" name="sell_price" id="sell_price" autocomplete="given-sell_price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="0" require>
  @error('sell_price')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="category_id" class="block text-sm font-medium text-gray-700">
    Categoría
  </label>
  <select name="category_id" id="category_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2 appearance-none" require>
  <option value="{{ $product->category->id }}">{{$product->category->name}}</option>  
  @foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
  @error('category_id')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="provider_id" class="block text-sm font-medium text-gray-700">
    Proveedor
  </label>
  <select name="provider_id" id="provider_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2 appearance-none" require>
    <option value="{{$product->provider_id}}">{{$product->provider->name}}</option>
    @foreach($providers as $provider)
    <option value="{{ $provider->id }}">{{ $provider->name }}</option>
    @endforeach
  </select>
  @error('provider_id')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="status" class="block text-sm font-medium text-gray-700">
    Status
  </label>
  <select name="status" id="status" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" require>
    <option value="{{$product->status}}">
      @if($product->status === "ACTIVE")
        Activo
        @else
        Inactivo
      @endif
    </option>
    <option value="ACTIVE">Activo</option>
    <option value="DEACTIVATED">Inactivo</option>
  </select>
</div>
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="image" class="block text-sm font-medium text-gray-700">
    Imagen
  </label>
  <div class=" mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2">
    <div class="flex relative text-sm text-gray-400">
      <input type="file" name="image" id="image" autocomplete="given-image" class=" self-center" hidden>
      <label for="image" class="flex items-center content-start relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
        <svg class=" h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        Cambiar imagen
      </label>
      <span id="file-chosen" class="flex items-center mx-2 font-light"></span>
    </div>
    @error('image')
      <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
    @enderror
  </div>
</div>
<!-- End Form for Edit -->
@endif