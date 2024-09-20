<div class="drawer drawer-end lg:drawer-open mr-96">
  <input id="filtro-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content flex flex-col">
    <!-- Botão para abrir o filtro em telas móveis -->
    <div class="fixed top-0 right-0 p-2 lg:hidden">
      <label for="filtro-drawer" class="btn btn-ghost">
        <!-- Filter Icon -->
        <svg class="h-6 w-6 text-gray-700 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707l-6.414 6.414A1 1 0 0014 13v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5a1 1 0 00-.293-.707L3.293 6.707A1 1 0 013 6V4z" />
        </svg>
      </label>
    </div>
  </div>
  <!-- Sidebar do Filtro -->
  <div class="drawer-side">
    <!-- Overlay para fechar o filtro ao clicar fora -->
    <label for="filtro-drawer" class="drawer-overlay"></label>
    <!-- Caixa de Filtros (sem modificações) -->
    <div class="h-full p-4 rounded-r shadow-lg transition duration-300 hover:shadow-xl overflow-y-auto bg-white text-black dark:bg-neutral-800 dark:text-white">
    <h2 class="text-xl font-medium mb-4">Filtrar</h2>
    <div class="space-y-4">
      <div>
        <label for="disciplina" class="block mb-1">Disciplina</label>
        <select id="disciplina" class="w-full p-2 border border-gray-300 rounded-md bg-white text-black dark:bg-neutral-700 dark:text-white">
          <option>Matemática</option>
          <option>Português</option>
          <option>Ciências</option>
        </select>
      </div>
      <div>
        <label for="tipo" class="block mb-1">Tipo</label>
        <select id="tipo" class="w-full p-2 border border-gray-300 rounded-md bg-white text-black dark:bg-neutral-700 dark:text-white">
          <option>Todas</option>
        </select>
      </div>
      <div>
        <label for="banca" class="block mb-1">Banca</label>
        <select id="banca" class="w-full p-2 border border-gray-300 rounded-md bg-white text-black dark:bg-neutral-700 dark:text-white">
          <option>Todas</option>
        </select>
      </div>
      <div>
        <label for="assunto1" class="block mb-1">Assunto primário</label>
        <select id="assunto1" class="w-full p-2 border border-gray-300 rounded-md bg-white text-black dark:bg-neutral-700 dark:text-white">
          <option>Todas</option>
        </select>
      </div>
      <div>
        <label for="assunto2" class="block mb-1">Assunto secundário</label>
        <select id="assunto2" class="w-full p-2 border border-gray-300 rounded-md bg-white text-black dark:bg-neutral-700 dark:text-white">
          <option>Todas</option>
        </select>
      </div>
      <div>
        <label for="codigo" class="block mb-1">Código</label>
        <input type="text" id="codigo" class="w-full p-2 border border-gray-300 rounded-md bg-white text-black dark:bg-neutral-700 dark:text-white">
      </div>
      <button class="w-full p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Filtrar</button>
      <button class="w-full p-2 bg-gray-500 text-white rounded-md mt-2 hover:bg-gray-600">Baixar PDF</button>
    </div>
  </div>
</div>
  </div>
</div>