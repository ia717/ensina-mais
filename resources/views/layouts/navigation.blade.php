<div class="lg:w-60 md:w-32 sm:w-2 z-10">
    <div class="h-screen fixed">
        <div x-data="{ drawerOpen: true }" class="drawer" :class="{ 'lg:drawer-open': drawerOpen }">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <!-- Page Content -->
            <div class="drawer-content flex flex-col">
                <!-- Toggle Button for Large Screens -->
                <button @click="drawerOpen = !drawerOpen" class="lg:block hidden m-4 transition-all duration-300"
                    :class="{ '-ml-16 mt-16 z-10': drawerOpen }">
                    <i x-show="drawerOpen" class="fas fa-arrow-left text-black rounded-full bg-blue-500 p-2"></i>
                    <i x-show="!drawerOpen" class="fas fa-arrow-right text-black rounded-full bg-blue-500 p-2"></i>
                </button>
            </div>
            <!-- Sidebar -->
            <div class="drawer-side">
                <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul
                    class="menu bg-white dark:bg-neutral-800 text-black dark:text-white min-h-full w-64 p-4 rounded-r-3xl space-y-2">
                    <!-- Sidebar content here -->
                    <div class="mb-8">
                        <a href="{{ route('paginainicial') }}" class="text-3xl font-bold leading-none">
                            <img src="{{ asset('/images/Logo ensina claro.png') }}" alt="Logo" class="">
                        </a>
                    </div>
                    <li><a href="{{ route('paginainicial') }}"><i class="fas fa-home mr-2"></i>Home</a></li>
                    <li><a href="areaaluno"><i class="fas fa-user-graduate mr-2"></i>Área do Aluno</a></li>
                    <li><a href="calendario"><i class="fas fa-calendar-alt mr-2"></i>Calendário</a></li>
                    <li><a href="cronograma"><i class="fas fa-calendar-check mr-2"></i>Cronograma</a></li>
                    <li><a href="{{ route('disciplinas') }}"><i class="fas fa-book mr-2"></i>Disciplinas</a></li>
                    <li><a href="simulados"><i class="fas fa-pencil-alt mr-2"></i>Simulados</a></li>
                    <li><a href="forum"><i class="fas fa-comments mr-2"></i>Fórum</a></li>
                    <li><a href="redacao"><i class="fas fa-file-alt mr-2"></i>Redação</a></li>
                    <li><a href="{{ route('questao.index') }}"><i class="fas fa-question-circle mr-2"></i>Questões</a>
                    </li>
                    <div class="divider"></div>
                    <li><a href="perguntas"><i class="fas fa-info-circle mr-2"></i>FAQ</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a :href="route('logout')"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                class="text-red-500 no-underline text-base block flex-1 transition-all duration-300">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                Logout
                            </a>
                        </form>
                    </li>
                    <div class="divider"></div>
                    <div class="flex justify-center items-center">
                        <x-theme-toggle></x-theme-toggle>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
