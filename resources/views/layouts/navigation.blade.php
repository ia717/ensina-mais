<body class="m-0 font-sans h-screen overflow-hidden bg-gray-100 transition-colors duration-300">

    <!-- Script do Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="flex bg-red-500">
        <!-- Menu Hambúrguer -->
        <input type="checkbox" id="checkbox" class="hidden">
        <label for="checkbox" class="fixed top-4 left-4 z-[1001] cursor-pointer sm:hidden">
            <div class="w-8 h-1 bg-black my-1.5 transition-all duration-300 transform origin-top-left bars"
                :class="{'rotate-45 translate-y-2': checkbox.checked}"></div>
            <div class="w-8 h-1 bg-black my-1.5 transition-all duration-300 bars"
                :class="{'opacity-0': checkbox.checked}"></div>
            <div class="w-8 h-1 bg-black my-1.5 transition-all duration-300 transform origin-bottom-left bars"
                :class="{'-rotate-45 -translate-y-2': checkbox.checked}"></div>
        </label>

        <!-- Menu Lateral -->
        <div id="sidebar" class="fixed top-0 left-0 w-64 h-full bg-white pt-16 transform transition-transform duration-300 z-[1000] sm:relative sm:translate-x-0 sm:w-64 -translate-x-64"
            :class="{'translate-x-0': checkbox.checked, '-translate-x-64': !checkbox.checked}">
            <h2 class="text-black text-center mb-5 text-xl font-bold">Menu</h2>
            <ul class="list-none p-0 m-0">
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-home"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Home</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-user-graduate"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Área do Aluno</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-calendar-alt"></i>
                    <a href="#" class="text-black dark:text-white no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Calendário</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-list"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Cronograma</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-book"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Matérias</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-pencil-ruler"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Simulados</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-comments"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Fórum</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-file-alt"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Redação</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-question-circle"></i>
                    <a href="#" class="text-black no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Questões</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-cogs"></i>
                    <a href="#" class="text-red-500 no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Configurações</a>
                </li>
                <li class="flex items-center px-5 py-3">
                    <i class="mr-3 fa-solid fa-sign-in-alt"></i>
                    <a href="#" class="text-red-500 no-underline text-base block flex-1 hover:bg-gray-100 hover:pl-2 transition-all duration-300">Log-out</a>
                </li>
            </ul>
        </div>

    

    <script>
        document.getElementById('checkbox').addEventListener('change', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('translate-x-0', this.checked);
            sidebar.classList.toggle('-translate-x-64', !this.checked);
        });
    </script>

</body>
