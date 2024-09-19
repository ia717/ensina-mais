<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-cloak x-data="{darkMode: $persist(false)}" :class="{'dark': darkMode === true }" class="dark:bg-neutral-700">
    <div class="flex">

        <aside class="lg:w-64 md:w-32 sm:w-2">
            @include('menuteste')
        </aside>
        <div class="w-4/5 p-3 bg-white dark:bg-neutral-700">
            <div>
                <div class="flex w-full">
                    <img src="{{asset('imagens/banner home.png')}}" alt="">
                    <div class="flex-col justify-end mb-4">
                        <div class="m-4 justify-end">
                            <button> <i class="fas fa-clock fa-2x dark:text-white text-black"></i> </button>
                        </div>
                        <div class="m-4 justify-end">
                            <button> <i class="fas fa-calendar-alt fa-2x dark:text-white text-black"></i> </button>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4">
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
    </div>
</body>
</html>