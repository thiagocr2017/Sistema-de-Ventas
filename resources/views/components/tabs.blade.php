  
<ul class="flex ">
  <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
    <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
      Producto
    </a>
  </li>
  <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
    <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
        Compras
    </a>
  </li>
  <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
    <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
        Ventas
    </a>
  </li>
  <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
    <a :class="openTab === 4 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
        Clientes
    </a>
  </li>
</ul>