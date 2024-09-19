<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<<<<<<< HEAD
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
=======
<body class="bg-gray-50">
<aside class="hidden md:block w-full md:w-1/5 p-3">
            @include('menuteste')
        </aside>
    <main class="container mx-auto  p-4">
        
        <div class="block md:hidden w-full">
            @include('headernav')
        </div>
        
        

        <div class="w-full md:w-4/5 p-3">
            <div>
                <div class="flex flex-col md:flex-row items-start md:items-center w-full">
                    <img src="{{asset('imagens/banner home.png')}}" alt="" class="w-full md:w-[99%] mb-4 md:mb-0 object-cover">

                    <div class="flex md:flex-col md:ml-4 hidden md:block">
                        <div class="mb-4">
                            <button>
                                <i class="fas fa-clock fa-2x text-sky-800"></i>
                            </button>
                        </div>
                        <div>
                            <button onclick="window.location.href='cronograma'">
                                <i class="fas fa-calendar-alt fa-2x text-sky-800"></i>
                            </button>
>>>>>>> cc74a3f536cb8bbcece13c73ff1c4e261005bdd7
                        </div>
                    </div>
                </div>
             
                <!-- Carrossel de progresso no modo mobile -->
                <div class="md:hidden flex overflow-x-auto space-x-4 p-4">
                    <div class="min-w-[80%] bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso diário</h2>
                        <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                            <div class="bg-sky-800 h-4 rounded-full" style="width: 10%;"></div>
                        </div>
                        <p class="text-sky-800 text-lg font-semibold">10%</p>
                    </div>
                    <div class="min-w-[80%] bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso mensal</h2>
                        <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                            <div class="bg-sky-800 h-4 rounded-full" style="width: 25%;"></div>
                        </div>
                        <p class="text-sky-800 text-lg font-semibold">25%</p>
                    </div>
                    <div class="min-w-[80%] bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso anual</h2>
                        <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                            <div class="bg-sky-800 h-4 rounded-full" style="width: 45%;"></div>
                        </div>
                        <p class="text-sky-800 text-lg font-semibold">45%</p>
                    </div>
                </div>

                <div class="hidden md:grid grid-cols-1 md:grid-cols-3 gap-6 p-4">
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
<<<<<<< HEAD
            </div>
        </div>
    </div>
=======

                <div class="hidden md:block mt-6">
                    <button class="w-full justify-center"> 
                        <div class="bg-white shadow-md rounded-md p-4 flex">
                            <div class="flex-none">
                                <h1 class="text-lg font-semibold">Continuar Assistindo</h1>
                                <div class="rounded-md flex items-center justify-center">
                                    <img src="{{asset('imagens/matematica.png')}}" alt="">
                                </div>
                            </div>
                            <div class="p-10">
                                <h2 class="text-lg font-semibold">Expressões numéricas</h2>
                                <p class="text-gray-500">Matemática Básica</p>
                                <div>
                                    <p class="text-sm text-start text-gray-500">10:20 de 20:46</p>
                                    <div class="w-full bg-gray-300 rounded-full h-4">
                                        <div class="bg-sky-800 h-4 rounded-full" style="width: 50%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="block md:hidden mt-6">
                    <div class="bg-white shadow-md rounded-md p-4">
                        <h2 class="text-lg font-semibold mb-4">Aulas Assistidas</h2>
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-md font-semibold">Matemática</h3>
                                <div class="w-full bg-gray-200 rounded-full h-4 mb-2">
                                    <div class="bg-sky-800 h-4 rounded-full" style="width: 40%;"></div>
                                </div>
                                <p class="text-sm text-gray-700">40% concluído</p>
                            </div>
                            <div>
                                <h3 class="text-md font-semibold">Química</h3>
                                <div class="w-full bg-gray-200 rounded-full h-4 mb-2">
                                    <div class="bg-sky-800 h-4 rounded-full" style="width: 20%;"></div>
                                </div>
                                <p class="text-sm text-gray-700">20% concluído</p>
                            </div>
                            <div>
                                <h3 class="text-md font-semibold">Física</h3>
                                <div class="w-full bg-gray-200 rounded-full h-4 mb-2">
                                    <div class="bg-sky-800 h-4 rounded-full" style="width: 60%;"></div>
                                </div>
                                <p class="text-sm text-gray-700">60% concluído</p>
                            </div>
                            <div>
                                <h3 class="text-md font-semibold">Redação</h3>
                                <div class="w-full bg-gray-200 rounded-full h-4 mb-2">
                                    <div class="bg-sky-800 h-4 rounded-full" style="width: 80%;"></div>
                                </div>
                                <p class="text-sm text-gray-700">80% concluído</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
>>>>>>> cc74a3f536cb8bbcece13c73ff1c4e261005bdd7
</body>
</html>