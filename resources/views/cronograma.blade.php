<x-app-layout>
  
  
  <!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css'])
  </head> -->
  
    <main class="flex-1 flex flex-col">
      <!-- Navigation -->
  
  
      <!-- Right-side Icons -->
      <div class="flex items-center space-x-4">
        <!-- Hamburger Menu for Mobile (Menu) -->
        <button id="mobile-menu-button" class="block lg:hidden">
          <!-- Hamburger Icon -->
          <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <!-- Filter Icon for Mobile -->
        <button id="mobile-filter-button" class="block lg:hidden">
          <!-- Filter Icon -->
          <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707l-6.414 6.414A1 1 0 0014 13v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5a1 1 0 00-.293-.707L3.293 6.707A1 1 0 013 6V4z" />
          </svg>
        </button>
      </div>
      </nav>
      <!-- Question Card -->
      <div class="flex-grow flex w-full  mx-auto"> <!-- Added max-w and mx-auto for proper centering -->
        <!-- Left Sidebar (Desktop) -->
        <div class="hidden lg:flex w-64 flex-shrink-0">
          @include('menuteste')
        </div>
  
        <!-- Main Content -->
        <div class="join join-vertical w-full">
          <!-- Semana 1 -->
          <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="checkbox" />
            <div class="collapse-title text-xl font-medium flex flex-col">
              <span class="text-xl font-semibold">Semana 1</span>
              <span class="text-gray-500 text-sm">Dia/mes/ano - Horário</span>
            </div>
            <div class="collapse-content">
              <div class="space-y-4">
                <!-- Tarefa 1 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex items-center border-2 border-orange-400">
                  <div class="mr-4">
                    <i class="fas fa-clock text-sm"></i>
                  </div>
                  <div>
                    <div class="text-gray-800 text-md">Horário</div>
                    <div class="text-black font-semibold">Tarefa</div>
                  </div>
                </div>
                <!-- Tarefa 2 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex items-center border-2 border-pink-500">
                  <div class="mr-4">
                    <i class="fas fa-clock text-sm"></i>
                  </div>
                  <div>
                    <div class="text-gray-800 text-md">Horário</div>
                    <div class="text-black font-semibold">Tarefa</div>
                  </div>
                </div>
                <!-- Tarefa 3 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex items-center border-2 border-purple-400">
                  <div class="mr-4">
                    <i class="fas fa-clock text-sm"></i>
                  </div>
                  <div>
                    <div class="text-gray-800 text-md">Horário</div>
                    <div class="text-black font-semibold">Tarefa</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Semana 2 -->
          <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="checkbox" />
            <div class="collapse-title text-xl font-medium flex flex-col">
              <span class="text-xl font-semibold">Semana 2</span>
              <span class="text-gray-500 text-sm">08/01/2024 - 02:30:10</span>
            </div>
            <div class="collapse-content">
              <div class="space-y-4">
                <!-- Tarefa 1 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex items-center border-2 border-orange-400">
                  <div class="mr-4">
                    <i class="fas fa-clock text-sm"></i>
                  </div>
                  <div>
                    <div class="text-gray-800 text-md">Horário</div>
                    <div class="text-black font-semibold">Tarefa</div>
                  </div>
                </div>
                <!-- Tarefa 2 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex items-center border-2 border-pink-500">
                  <div class="mr-4">
                    <i class="fas fa-clock text-sm"></i>
                  </div>
                  <div>
                    <div class="text-gray-800 text-md">Horário</div>
                    <div class="text-black font-semibold">Tarefa</div>
                  </div>
                </div>
                <!-- Tarefa 3 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex items-center border-2 border-purple-400">
                  <div class="mr-4">
                    <i class="fas fa-clock text-sm"></i>
                  </div>
                  <div>
                    <div class="text-gray-800 text-md">Horário</div>
                    <div class="text-black font-semibold">Tarefa</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Semana 3 -->
          <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="checkbox" />
            <div class="collapse-title text-xl font-medium flex flex-col">
              <span class="text-xl font-semibold">Semana 3</span>
              <span class="text-gray-500 text-sm">22/01/2024 - 01:50:45</span>
            </div>
            <div class="collapse-content">
              <div class="space-y-4">
                <!-- Tarefa 1 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex items-center border-2 border-orange-400">
                  <div class="mr-4">
                    <i class="fas fa-clock text-sm"></i>
                  </div>
                  <div>
                    <div class="text-gray-800 text-md">Horário</div>
                    <div class="text-black font-semibold">Tarefa</div>
                  </div>
                </div>
                <!-- Tarefa 2 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex items-center border-2 border-pink-500">
                  <div class="mr-4">
                    <i class="fas fa-clock text-sm"></i>
                  </div>
                  <div>
                    <div class="text-gray-800 text-md">Horário</div>
                    <div class="text-black font-semibold">Tarefa</div>
                  </div>
                </div>
                <!-- Tarefa 3 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex items-center border-2 border-purple-400">
                  <div class="mr-4">
                    <i class="fas fa-clock text-sm"></i>
                  </div>
                  <div>
                    <div class="text-gray-800 text-md">Horário</div>
                    <div class="text-black font-semibold">Tarefa</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
    </div>
    <div class="hidden lg:flex w-64 flex-shrink-0">
      @include('caixafiltros')
    </div>
  
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
      <div class="absolute top-0 right-0 w-64 bg-white h-full p-6">
        <!-- Close Button -->
        <button id="close-mobile-menu" class="text-gray-700 mb-4">
          <!-- Close Icon -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        @include('menuteste')
      </div>
    </div>
  
    <!-- Mobile Filter Overlay -->
    <div id="mobile-filter-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
      <div class="absolute top-0 right-0 w-64 bg-white h-full p-6">
        <!-- Close Button -->
        <button id="close-mobile-filter" class="text-gray-700 mb-4">
          <!-- Close Icon -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
  
      </div>
    </div>
  
    <!-- Scripts -->
    <script>
      // Mobile Menu
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
      const closeMobileMenu = document.getElementById('close-mobile-menu');
  
      mobileMenuButton.addEventListener('click', () => {
        mobileMenuOverlay.classList.remove('hidden');
      });
  
      closeMobileMenu.addEventListener('click', () => {
        mobileMenuOverlay.classList.add('hidden');
      });
  
      mobileMenuOverlay.addEventListener('click', (e) => {
        if (e.target === mobileMenuOverlay) {
          mobileMenuOverlay.classList.add('hidden');
        }
      });
  
      // Mobile Filter
      const mobileFilterButton = document.getElementById('mobile-filter-button');
      const mobileFilterOverlay = document.getElementById('mobile-filter-overlay');
      const closeMobileFilter = document.getElementById('close-mobile-filter');
  
      mobileFilterButton.addEventListener('click', () => {
        mobileFilterOverlay.classList.remove('hidden');
      });
  
      closeMobileFilter.addEventListener('click', () => {
        mobileFilterOverlay.classList.add('hidden');
      });
  
      mobileFilterOverlay.addEventListener('click', (e) => {
        if (e.target === mobileFilterOverlay) {
          mobileFilterOverlay.classList.add('hidden');
        }
      });
    </script>
</x-app-layout>
