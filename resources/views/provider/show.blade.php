@extends('components.layout')
@section('title', 'Proveedor')
@section('breadcrumbs')
    {{ Breadcrumbs::render('providers.show', $provider) }}
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
        Proveedor
      </a>
    </li>
    <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
      <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" id="2">
          Productos
      </a>
    </li>
    <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
      <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" id="3">
          Compras
      </a>
    </li>
    <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
      <a :class="openTab === 4 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" id="4">
          Top 10
      </a>
    </li>
  </ul>
  <!-- Tab 1 -->
  <div class="card" x-show="openTab === 1">
    <div class="border rounded-lg rounded-tl-none border-gray-200">
      <dl>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-t-lg rounded-tl-none">
          <dt class="text-sm font-medium text-gray-500">
            Proveedor
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $provider->name }}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Descripción
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $provider->description }}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Documento ID
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $provider->ruc_number }}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Teléfono
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $provider->phone }}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Email
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $provider->email }}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            País
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $provider->country }}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Estado / Provincia
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $provider->state }}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 rounded-b-lg">
          <dt class="text-sm font-medium text-gray-500">
            Dirección
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $provider->address }}
          </dd>
        </div>
      </dl>
    </div>
  </div>
  <!-- End Tab 1 -->

  <!-- Tab 2 -->
  <div class="card p-4 rounded-tl-none" x-show="openTab === 2">
    <div class="container pt-4 mx-auto" x-data="loadData()">
      <!-- searchField -->
      <input
        x-ref="searchField"
        x-model="search"
        x-on:click="viewPage(0)"
        x-on:keydown.window.prevent.slash=" viewPage(0), $refs.searchField.focus()"
        placeholder="Buscar producto..."
        type="search"
        class="block w-full focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 font-light rounded-lg "
      />
      <!-- End searchField -->
      <div class="mt-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Grid Data -->
        <template x-for="item in filteredData" :key="item">
          <a :href="`{{url('products')}}/${item.id}`">
            <div
              :class="{
                'border-red-500': item.status === 'DEACTIVATED',
                'border-green-500': item.status === 'ACTIVE'
              }"
              class="p-1 border-r-4 flex items-center shadow hover:shadow-lg hover:rounded transition duration-150 ease-in-out transform hover:scale-105">
              <img class="w-10 h-10 rounded-full mr-4" :src="`{{asset('images/products')}}/${item.image}`"/>
              <div class="text-sm">
                <p class="text-indigo-500 leading-none text-sm font-medium" x-text="item.code + ' (' + item.name + ')'"></p>
                <p x-text="'Stock: ' + item.stock"></p>
                <p class="text-gray-600" x-text="'$'+item.sell_price/100"></p>
              </div>
            </div>
          </a>
        </template>
        <!-- End Grid Data -->
      </div>
      <!-- Footer Grid Buttons -->
      <div class="grid grid-rows-1 grid-flow-col gap-4 justify-items-center mt-4">
        <div class="flex items-center w-48 h-8 text-sm leading-5 text-gray-700" x-show="pageCount() > 1">
          <div class="justify-start">
            Page <span x-text="pageNumber+1"></span> of
            <span x-text="pageCount()"></span> | Showing
            <span x-text="startResults()"></span> to
            <span x-text="endResults()"></span>
          </div>
        </div>
        <div class="flex items-center h-8 text-sm leading-5 text-gray-700" 
          x-show="pageCount() > 1">
          <div class="flex">
            <!--First Button-->
            <button
              x-on:click="viewPage(0)"
              :disabled="pageNumber==0"
              :class="{ 'disabled cursor-not-allowed ' : pageNumber==0 }">
              <svg
                class="h-8 w-8 "
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
                stroke-linecap="round"
                stroke-linejoin="round">
                <polygon points="19 20 9 12 19 4 19 20"></polygon>
                <line x1="5" y1="19" x2="5" y2="5"></line>
              </svg>
            </button>
            <!--Previous Button-->
            <button
              x-on:click="prevPage"
              :disabled="pageNumber==0"
              :class="{ 'disabled cursor-not-allowed ' : pageNumber==0 }">
              <svg
                class="h-8 w-8 "
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
                stroke-linecap="round"
                stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>
            <!-- Display page numbers -->
            <template x-for="(page,index) in pages()" :key="index">
              <button
                class="px-3 py-1 rounded"
                :class="{ 'bg-gray-200  font-bold' : index === pageNumber }"
                type="button"
                x-on:click="viewPage(index)">
                <span x-text="index+1"></span>
              </button>
            </template>
            <!--Next Button-->
            <button
              x-on:click="nextPage"
              :disabled="pageNumber >= pageCount() -1"
              :class="{ 'disabled cursor-not-allowed ' : pageNumber >= pageCount() -1 }">
              <svg
                class="h-8 w-8 "
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
                stroke-linecap="round"
                stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
            <!--Last Button-->
            <button
              x-on:click="viewPage(Math.ceil(total/size)-1)"
              :disabled="pageNumber >= pageCount() -1"
              :class="{ 'disabled cursor-not-allowed ' : pageNumber >= pageCount() -1 }">
              <svg
                class="h-8 w-8 "
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
                stroke-linecap="round"
                stroke-linejoin="round">
                <polygon points="5 4 15 12 5 20 5 4"></polygon>
                <line x1="19" y1="5" x2="19" y2="19"></line>
              </svg>
            </button>
          </div>
        </div>
        <div class="flex items-center w-28 h-8 text-sm leading-5 text-gray-700">
          <div x-show="total > 0">
            Total <span class="font-bold" x-text="total"></span> results
          </div>
        </div>
      </div>
      <!--Message to display when no results-->
      <div class="flex justify-center items-center font-bold text-red-500"
        x-show="total===0">
        <svg
          class="h-8 text-red-500"
          viewBox="0 0 24 24"
          stroke-width="2"
          stroke="currentColor"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" />
          <circle cx="12" cy="12" r="9" />
          <line x1="9" y1="10" x2="9.01" y2="10" />
          <line x1="15" y1="10" x2="15.01" y2="10" />
          <path d="M9.5 16a10 10 0 0 1 6 -1.5" />
        </svg>
        <span class="ml-4"> No existen tados!</span>
      </div>
    </div>
  </div>
  <!-- End Tab 2 -->

  <!-- Tab 3 -->
  <div class="card"></div>  
  <!-- End Tab 3 -->

  <!-- Tab 4 -->
  <div class="card"></div>
  <!-- End Tab 4 -->
</div>
@endsection
@section('script')
<script>
      var sourceData = {!!$data!!};

      function loadData() {
        return {
          search: "",
          pageNumber: 0,
          size: 5,
          total: "",
          myForData: sourceData,

          get filteredData() {
            const start = this.pageNumber * this.size,
              end = start + this.size;

            if (this.search === "") {
              this.total = this.myForData.length;
              return this.myForData.slice(start, end);
            }

            //Return the total results of the filters
            this.total = this.myForData.filter((item) => {
              return item.name
                .toLowerCase()
                .includes(this.search.toLowerCase());
            }).length;

            //Return the filtered data
            return this.myForData
              .filter((item) => {
                return item.name
                  .toLowerCase()
                  .includes(this.search.toLowerCase());
              })
              .slice(start, end);
          },

          //Create array of all pages (for loop to display page numbers)
          pages() {
            return Array.from({
              length: Math.ceil(this.total / this.size),
            });
          },

          //Next Page
          nextPage() {
            this.pageNumber++;
          },

          //Previous Page
          prevPage() {
            this.pageNumber--;
          },

          //Total number of pages
          pageCount() {
            return Math.ceil(this.total / this.size);
          },

          //Return the start range of the paginated results
          startResults() {
            return this.pageNumber * this.size + 1;
          },

          //Return the end range of the paginated results
          endResults() {
            let resultsOnPage = (this.pageNumber + 1) * this.size;

            if (resultsOnPage <= this.total) {
              return resultsOnPage;
            }

            return this.total;
          },

          //Link to navigate to page
          viewPage(index) {
            this.pageNumber = index;
          },
        };
      }
    </script>
@endsection

