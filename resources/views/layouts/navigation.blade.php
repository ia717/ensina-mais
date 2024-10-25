<nav class="absolute top-0 z-50 w-full">
    <div class="block md:hidden px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                    aria-controls="logo-sidebar" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-sm sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
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
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-8 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-neutral-800 dark:border-neutral-700"
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
                <a href="{{ route('area-aluno') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fas fa-user-graduate mr-2"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Área do Aluno</span>
                </a>
            </li>
            <li>
                <a href="{{ route('calendario') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Calendário</span>
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
                <a href="{{ route('simulados') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fas fa-pencil-alt mr-2"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Simulados</span>
                </a>
            </li>
            <li>
                <a href="{{ route('forum.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fas fa-comments mr-2"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Fórum</span>
                </a>
            </li>
            <li>
                <a href="{{ route('redacao') }}"
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
                <a href="{{ route('faq') }}"
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