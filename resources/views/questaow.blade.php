<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" h-screen">

    <main class="flex-1 flex flex-col">
        <!-- Navigation -->
        <nav class="bg-gray-200 p-4 flex justify-between items-center">
            <a href="#" class="text-blue-600">Anterior</a>
            <p class="text-gray-700">Questão 1/500</p>

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
            <div class="flex-1 p-4">
                <!-- Question Content -->
                <div class="bg-white p-8 rounded-3xl shadow-lg transition duration-300 hover:shadow-xl w-full">
                    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Questão</h1>

                    <p class="text-lg text-gray-600 mb-6">Seja X o subconjunto dos números inteiros dado por
                        {0,1,2,3,4,5}. Quantos pares distintos (A,B) de subconjuntos A e B de X existem tais que AC – B =
                        {0,1}, em que AC denota o complementar de A em X?</p>

                    <ul class="space-y-3 mb-6">
                        <li>
                            <label class="flex items-center rounded-lg">
                                <span class="text-gray-700 mx-2">(A)</span>
                                <input type="radio" name="options" class="mr-2">
                                <span class="text-gray-700 mx-1">16</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center bg-[#ff041569] rounded-lg">
                                <span class="text-gray-700 mx-2">(B)</span>
                                <input type="radio" name="options" class="mr-2">
                                <span class="text-gray-700 mx-1">14</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center rounded-lg">
                                <span class="text-gray-700 mx-2">(C)</span>
                                <input type="radio" name="options" class="mr-2">
                                <span class="text-gray-700 mx-1">10</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center rounded-lg">
                                <span class="text-gray-700 mx-2">(D)</span>
                                <input type="radio" name="options" class="mr-2">
                                <span class="text-gray-700 mx-1">12</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center rounded-lg">
                                <span class="text-gray-700 mx-2">(E)</span>
                                <input type="radio" name="options" class="mr-2">
                                <span class="text-gray-700 mx-1">18</span>
                            </label>
                        </li>
                    </ul>

                    <!-- Resolution and Statistics -->
                    <div class="bg-[#efb9bc] border-2 p-8 rounded-3xl space-y-6 mt-4">
                        <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0">
                            <!-- Left Column -->
                            <div class="flex flex-col items-center space-y-4">
                                <h1 class="font-semibold">Resolução</h1>
                                <button
                                    class="bg-[#ff0415] text-white py-2 px-6 rounded-lg hover:bg-[#ff3e3e]">
                                    Ver Resolução
                                </button>
                                <button
                                    class="bg-[#ff0415] text-white py-2 px-6 rounded-lg hover:bg-[#ff3e3e]">
                                    Ver Resolução
                                </button>
                            </div>

                            <!-- Middle Column -->
                            <div class="text-center">
                                <p class="font-semibold">Percentual de Acertos</p>
                                <div class="relative pt-4 w-full">
                                    <div class="w-full h-1 bg-gray-300 rounded">
                                        <div class="w-11/12 h-1 bg-[#ff0415] rounded"></div>
                                    </div>
                                    <p class="mt-2 font-semibold text-[#ff0415] text-right">95,7%</p>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="flex flex-col items-center space-y-4">
                                <h1 class="font-semibold">Dificuldade</h1>
                                <button class="bg-[#ff0415] text-white py-1 px-4 rounded-full">Fácil</button>
                                <button class="bg-gray-300 text-gray-500 py-1 px-4 rounded-full">Médio</button>
                                <button class="bg-gray-300 text-gray-500 py-1 px-4 rounded-full">Difícil</button>
                            </div>
                        </div>

                        <!-- Most Marked Alternatives -->
                        <div class="text-center  py-4 rounded-xl">
                            <p class="font-semibold text-lg">Alternativas mais Marcadas</p>
                            <div class="grid grid-cols-5 mt-2 text-sm gap-1">
                                <div>
                                    <p class="font-bold">A</p>
                                    <p class="text-red-500 text-xs">0,6%</p>
                                </div>
                                <div>
                                    <p class="font-bold">B</p>
                                    <p class="text-red-500 text-xs">1,3%</p>
                                </div>
                                <div>
                                    <p class="font-bold">C</p>
                                    <p class="text-red-500 text-xs">0,7%</p>
                                </div>
                                <div>
                                    <p class="font-bold">D</p>
                                    <p class="text-red-500 text-xs">95,7%</p>
                                </div>
                                <div>
                                    <p class="font-bold">E</p>
                                    <p class="text-red-500 text-xs">1,7%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden lg:flex w-64 flex-shrink-0">
                @include('caixafiltros')
            </div>
        </div>
    </main>
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
            @include('caixafiltros')
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
</body>

</html>