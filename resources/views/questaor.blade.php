<x-app-layout>
<div>
<div class="rounded-md bg-white dark:bg-neutral-800 p-6 space-y-8">
    <div class="h-1/2 bg-white dark:bg-neutral-800 p-8 rounded-lg shadow-lg transition duration-300">
        <div class="flex-1 flex flex-col w-96">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Questão</h1>
            <p class="text-lg text-gray-600 dark:text-white mb-6">Seja X o subconjunto dos números inteiros dado por {0,1,2,3,4,5}. Quantos pares distintos (A,B) de subconjuntos A e B de X existem tais que AC – B = {0,1}, em que AC denota o complementar de A em X?</p>
            <ul class="space-y-3 mb-6">
                <li>
                    <label class="flex items-center">
                        <input type="radio" name="options" class="mr-2">
                        <span class="text-gray-700 dark:text-white">(A) 16</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center">
                        <input type="radio" name="options" class="mr-2">
                        <span class="text-gray-700 dark:text-white">(B) 14</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center">
                        <input type="radio" name="options" class="mr-2">
                        <span class="text-gray-700 dark:text-white">(C) 10</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center bg-[#04a58269] rounded-lg">
                        <input type="radio" name="options" class="mr-2">
                        <span class="text-gray-700 dark:text-white">(D) 12</span>
                    </label>
                </li>
                <li>
                    <label class="flex items-center">
                        <input type="radio" name="options" class="mr-2">
                        <span class="text-gray-700 dark:text-white">(E) 18</span>
                    </label>
                    <div class="flex justify-center">
                        <button class="w-28 bg-[#04a582] text-white py-2 font-bold rounded-lg transition duration-300 hover:bg-[#27af91]">Responder</button>
                    </div>
                </li>
            </ul>
        </div>

        <div class="bg-[#bdd9d2] border-2 p-8 rounded-3xl space-y-6 mt-4">
            <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0">
                <!-- Left Column -->
                <div class="flex flex-col items-center space-y-4">
                    <h1 class="font-semibold">Resolução</h1>
                    <button
                        class="bg-[#04a582] text-white py-2 px-6 rounded-lg hover:bg-[#27af91]">
                        Ver Resolução
                    </button>
                    <button
                        class="bg-[#04a582] text-white py-2 px-6 rounded-lg hover:bg-[#27af91]">
                        Ver Resolução
                    </button>
                </div>

                <div class="text-center">
                    <p class="font-semibold">Percentual de Acertos</p>
                    <div class="relative pt-4 w-full">
                        <div class="w-full h-1 bg-gray-300 rounded">
                            <div class="w-11/12 h-1 bg-[#04a582] rounded"></div>
                        </div>
                        <p class="mt-2 font-semibold text-[#04a582] text-right">95,7%</p>
                    </div>
                </div>

                <div class="flex flex-col items-center space-y-4">
                    <h1 class="font-semibold">Dificuldade</h1>
                    <button class="bg-[#04a582] text-white py-1 px-4 rounded-full">Fácil</button>
                    <button class="bg-gray-300 text-gray-500 py-1 px-4 rounded-full">Médio</button>
                    <button class="bg-gray-300 text-gray-500 py-1 px-4 rounded-full">Difícil</button>
                </div>
            </div>

            <div class="text-center py-4 rounded-xl">
                <p class="font-semibold text-lg">Alternativas mais Marcadas</p>
                <div class="grid grid-cols-5 mt-2 text-sm gap-1">
                    <div>
                        <p class="font-bold">A</p>
                        <p class="text-green-500 text-xs">0,6%</p>
                    </div>
                    <div>
                        <p class="font-bold">B</p>
                        <p class="text-green-500 text-xs">1,3%</p>
                    </div>
                    <div>
                        <p class="font-bold">C</p>
                        <p class="text-green-500 text-xs">0,7%</p>
                    </div>
                    <div>
                        <p class="font-bold">D</p>
                        <p class="text-green-500 text-xs">95,7%</p>
                    </div>
                    <div>
                        <p class="font-bold">E</p>
                        <p class="text-green-500 text-xs">1,7%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <aside class="right-0 top-0 fixed">
        @include('caixafiltros')
    </aside>
    </div>
    </div>
</x-app-layout>