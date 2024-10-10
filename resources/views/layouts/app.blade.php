<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ensina+') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body x-cloak x-data="{ darkMode: $persist(false) }" :class="{ 'dark': darkMode === true }"
    class="font-sans antialiased bg-gray-200 dark:bg-neutral-700 text-black dark:text-white">

    <div class="flex min-h-screen">
        <nav class="absolute top-0 z-50 w-full">
            <div class="block md:hidden px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar" type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>
                        <a href="#" class="flex ms-2 md:me-24 fixed right-0 sm:hidden ">
                            <img src="{{ asset('images/logos/logo-ensina-claro.svg') }}"
                                class="h-8 me-3 block dark:hidden" alt="Ensina Mais Logo (claro)" />
                            <img src="{{ asset('images/logos/logo-ensina-escuro.svg') }}"
                                class="h-8 me-3 hidden dark:block" alt="Ensina Mais Logo (escuro)" />
                            <span
                                class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white"></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-8 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-neutral-800 dark:border-neutral-700 rounded-r-3xl"
            aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-neutral-800">
                <a href="{{ route('home') }}" class="sm:flex hidden justify-center items-center ps-2.5 mb-5">
                    <img src="{{ asset('images/logos/logo-ensina-claro.svg') }}"
                        class="h-6 sm:h-10 me-3 items-center block dark:hidden" alt="Ensina Mais Logo" />
                    <img src="{{ asset('images/logos/logo-ensina-escuro.svg') }}"
                        class="h-6 sm:h-10 me-3 items-center hidden dark:block" alt="Ensina Mais Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
                <ul class="space-y-2 font-medium mt-4 sm:mt-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-home mr-2"></i>
                            <span class="ms-3">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="arealuno"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-user-graduate mr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Área do Aluno</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendario"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Calendário</span>
                        </a>
                    </li>
                    <li>
                        <a href="cronograma"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-calendar-check mr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Cronograma</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('disciplinas') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-book mr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Disciplinas</span>
                        </a>
                    </li>
                    <li>
                        <a href="simulados"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-pencil-alt mr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Simulados</span>
                        </a>
                    </li>
                    <li>
                        <a href="forum"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-comments mr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Fórum</span>
                        </a>
                    </li>
                    <li>
                        <a href="redacao"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-file-alt mr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Redação</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('questao.index') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-question-circle mr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Questões</span>
                        </a>
                    </li>
                    <li>
                        <a href="perguntas"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-info-circle mr-2"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">FAQ</span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                class="flex items-center p-2 text-red-500 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                            </a> 
                        </form>
                    </li>
                    <div class="items-center justify-center flex mt-2">
                        <x-theme-toggle></x-theme-toggle>
                    </div>
                </ul>
            </div>
        </aside>
        <div class="sm:ml-64">

            <!-- Page Content -->
            <main class="flex-1 bg-gray-200 dark:bg-neutral-700 px-4 lg:px-12 py-4 mt-20 sm:mt-0">
                <div>
                    {{ $slot }}
                </div>
            </main>


        </div>

    </div>

</body>

</html>
