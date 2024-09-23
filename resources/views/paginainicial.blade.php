<x-app-layout>
    <div class="lg:ml-80 md:ml-40 sm:ml-28 p-3">
        <div>
            <div class="flex w-full h-max">
                <img src="{{asset('imagens\rafao juninho.png')}}" alt="">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso diário</h2>
                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                        <div class="bg-sky-800 h-4 rounded-full" style="width: 10%;"></div>
                    </div>
                    <p class="text-sky-800 text-lg font-semibold">10%</p>
                </div>

                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso mensal</h2>
                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                        <div class="bg-sky-800 h-4 rounded-full" style="width: 25%;"></div>
                    </div>
                    <p class="text-sky-800 text-lg font-semibold">25%</p>
                </div>

                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso anual</h2>
                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                        <div class="bg-sky-800 h-4 rounded-full" style="width: 45%;"></div>
                    </div>
                    <p class="text-sky-800 text-lg font-semibold">45%</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>