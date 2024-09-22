<x-app-layout>
    <div class="h-1/2 w-1/2 bg-white dark:bg-neutral-800 p-8 rounded-lg shadow-lg transition duration-300 lg:ml-80 md:ml-40 sm:ml-28 ">
        <div class="flex-1 flex flex-col w-96">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Questão</h1>
            <p class="text-lg text-gray-600 dark:text-white mb-6">Seja X o subconjunto dos números inteiros dado por {0,1,2,3,4,5}. Quantos pares distintos (A,B) de subconjuntos A e B de X existem tais que AC – B = {0,1}, em que AC denota o complementar de A em X?</p>
            <ul class="space-y-3 mb-6">
                <li>
                    <label class="flex items-center ">
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
                    <label class="flex items-center">
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
                        <button class="w-28 bg-sky-800 text-white py-2 font-bold rounded-lg transition duration-300 hover:bg-blue-600">Responder</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <aside class="right-0 top-0 fixed">
        @include('caixafiltros')
    </aside>

</x-app-layout>