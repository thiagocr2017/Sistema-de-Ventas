@if(Route::is('categories.create'))
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
  <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de una categoría">
</div>
<div class="mt-4">
  <label for="description" class="block text-sm font-medium text-gray-700">
  Decripción
  </label>
  <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Decripción de una categoría"></textarea>
  </div>
  <p class="mt-2 text-sm text-gray-500">
    Digita la decripción para la nueva categoría.
  </p>
</div>
@else
<div class="col-span-6 sm:col-span-3 mt-4">
  <label for="name" class="block text-sm font-medium text-gray-700">
  Nombre</label>
  <input type="text" name="name" id="name" value="{{$category->name}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de una categoría">
</div>
<div class="mt-4">
  <label for="description" class="block text-sm font-medium text-gray-700">
  Decripción</label>
  <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md " placeholder="Decripción de una categoría">
    {{$category->description}}
    </textarea>
  </div>
  <p class="mt-2 text-sm text-gray-500">
    Digita la decripción para la nueva categoría.
  </p>
</div>
@endif