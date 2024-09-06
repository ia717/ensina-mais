<div class="m-0 font-sans overflow-hidden bg-gray-100 transition-colors duration-300">

    <div class="">
        <!-- Menu Hambúrguer -->
        <input type="checkbox" id="checkbox" class="hidden">
        <label for="checkbox" class="fixed top-4 left-4 z-[1001] cursor-pointer lg:hidden">
            <div class="w-8 h-1 bg-black dark:bg-white my-1.5 transition-all duration-300 transform origin-top-left"
                id="bar1"></div>
            <div class="w-8 h-1 bg-black dark:bg-white my-1.5 transition-all duration-300" id="bar2"></div>
            <div class="w-8 h-1 bg-black dark:bg-white my-1.5 transition-all duration-300 transform origin-bottom-left"
                id="bar3"></div>
        </label>

        <!-- Menu Lateral -->
        <div id="sidebar"
            class="fixed w-64 h-full bg-white dark:bg-neutral-800 pt-16 transform transition-transform duration-300 z-[1000]">
            <h2 class="text-black dark:text-white text-center mb-5 text-xl font-bold">Menu</h2>
            <ul class="list-none p-0 m-0">
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-home"></i>
                    <a href="#"
                        class="text-black  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Home</a>
                </li>
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-user-graduate"></i>
                    <a href="#"
                        class="text-black  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Área
                        do Aluno</a>
                </li>
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-calendar-alt"></i>
                    <a href="#"
                        class="text-black  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Calendário</a>
                </li>
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-list"></i>
                    <a href="#"
                        class="text-black  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Cronograma</a>
                </li>
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-book"></i>
                    <a href="/materias"
                        class="text-black  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Matérias</a>
                </li>
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-pencil-ruler"></i>
                    <a href="#"
                        class="text-black  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Simulados</a>
                </li>
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-comments"></i>
                    <a href="#"
                        class="text-black  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Fórum</a>
                </li>
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-file-alt"></i>
                    <a href="#"
                        class="text-black  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Redação</a>
                </li>
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-question-circle"></i>
                    <a href="#"
                        class="text-black  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Questões</a>
                </li>
                <li class="flex items-center px-5 py-3 dark:text-white">
                    <i class="mr-3 fa-solid fa-cogs"></i>
                    <a href="#"
                        class="text-red-500  dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Configurações</a>
                </li>
                <li class="flex items-center px-5 py-3 text-red-500 ">
                    <i class="mr-3 fa-solid fa-sign-in-alt"></i>
                    <a href="#"
                        class="text-red-500   no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Log-out</a>
                </li>
                <x-theme-toggle />
            </ul>
        </div>


    </div>

    <!-- Ícones no Canto Superior Direito -->
    <div class="fixed top-4 right-4 space-x-4 z-[1001]">
        <i class="fas fa-calendar-alt text-2xl cursor-pointer"></i>
        <i class="fas fa-clock text-2xl cursor-pointer"></i>
    </div>

    
</div>
