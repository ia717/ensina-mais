<aside class="lg:w-64 md:w-32 sm:w-2">
    <div class="h-screen fixed ">
        <div class="drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <!-- Page Content -->
            <div class="drawer-content flex flex-col">
                <!-- Mobile Navbar -->
                <div class="navbar lg:hidden">
                    <div class="flex-none">
                        <label for="my-drawer-2" class="btn btn-square btn-ghost">
                            <!-- Hamburger Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </label>
                    </div>
                </div>
            
        </div>
        <!-- Sidebar -->
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-white dark:bg-neutral-800 text-black dark:text-white min-h-full w-64 p-4 rounded-r-3xl space-y-2">
                <!-- Sidebar content here -->
                <li><a>Home</a></li>
                <li><a>Área do Aluno</a></li>
                <li><a>Calendário</a></li>
                <li><a>Cronograma</a></li>
                <li><a>Matérias</a></li>
                <li><a>Simulados</a></li>
                <li><a>Fórum</a></li>
                <li><a>Redação</a></li>
                <li><a>Questões</a></li>
                <div class="divider"></div>
                <li><a>FAQ</a></li>
                <li><a class="text-red-500">Logout</a></li>
                <div class="divider"></div>
                
                <x-theme-toggle></x-theme-toggle>
            </ul>
        </div>
    </div>
</div>
</aside>