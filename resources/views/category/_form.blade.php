@if(Route::is('categories.create'))
<div class="">
  <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
  <input value="{{ old('name') }}" type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de una categoría">
  @error('name')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="description" class="block text-sm font-medium text-gray-700">
  Decripción
  </label>
  <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Decripción de una categoría">value="{{ old('description') }}"</textarea>
    @error('description')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
    @enderror
  </div>
</div>
@else
<div class="">
  <label for="name" class="block text-sm font-medium text-gray-700">
  Nombre</label>
  <input type="text" name="name" id="name" value="{{$category->name}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md p-2" placeholder="Nombre de una categoría">
  @error('name')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
  @enderror
</div>
<div class="mt-4">
  <label for="description" class="block text-sm font-medium text-gray-700">
  Decripción</label>
  <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="pl-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md " placeholder="Decripción de una categoría">{{$category->description}}</textarea>
    @error('description')
    <div class="text-sm font-light mt-2 p-2 bg-red-200 text-red-500 rounded-lg">{{ $message }}</div>
    @enderror
  </div>
</div>
@endif