
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<body class="bg-gray-100 text-black transition-colors duration-300 h-screen flex overflow-hidden">

    <!-- Menu Hambúrguer -->
    <input type="checkbox" id="checkbox" class="hidden">
    <label for="checkbox" class="fixed top-4 left-4 lg:hidden w-10 h-8 cursor-pointer flex items-center justify-center z-[1100]">
        <i class="fas fa-bars text-2xl text-teal-500"></i>
        <i class="fas fa-times text-2xl text-teal-500 hidden"></i>
    </label>

    <!-- Menu Lateral -->
    <div id="sidebar" class="bg-white dark:bg-neutral-800 w-64 h-full fixed top-0 left-0 lg:translate-x-0 transform -translate-x-full transition-transform duration-300 z-40 shadow-lg lg:w-64">
        <ul class="space-y-2 pt-16">
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-gray-700 dark:text-gray-300">
                    <i class="fas fa-home text-xl mr-3"></i> Home
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-gray-700 dark:text-gray-300">
                    <i class="fas fa-user-graduate text-xl mr-3"></i> Área do Aluno
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-gray-700 dark:text-gray-300">
                    <i class="fas fa-calendar-alt text-xl mr-3"></i> Calendário
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-gray-700 dark:text-gray-300">
                    <i class="fas fa-list text-xl mr-3"></i> Cronograma
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-gray-700 dark:text-gray-300">
                    <i class="fas fa-book text-xl mr-3"></i> Matérias
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-gray-700 dark:text-gray-300">
                    <i class="fas fa-pencil-ruler text-xl mr-3"></i> Simulados
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-gray-700 dark:text-gray-300">
                    <i class="fas fa-comments text-xl mr-3"></i> Fórum
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-gray-700 dark:text-gray-300">
                    <i class="fas fa-file-alt text-xl mr-3"></i> Redação
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-gray-700 dark:text-gray-300">
                    <i class="fas fa-question-circle text-xl mr-3"></i> Questões
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-teal-500">
                    <i class="fas fa-cog text-xl mr-3"></i> Configurações
                </a>
            </li>
            <li class="px-6 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <a href="#" class="flex items-center text-red-500">
                    <i class="fas fa-sign-out-alt text-xl mr-3"></i> Logout
                </a>
            </li>
            <li class="theme-toggle px-6 py-2 flex items-center cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                <i class="fas fa-moon text-xl mr-3"></i> Alternar Tema
            </li>
        </ul>
    </div>





    <script>
        const checkbox = document.getElementById('checkbox');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        // Função para alternar a barra lateral
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                sidebar.classList.remove('-translate-x-full');  // Mostra o menu
                mainContent.classList.remove('lg:ml-64'); // Remove a margem
                mainContent.classList.add('ml-0');
            } else {
                sidebar.classList.add('-translate-x-full');  // Esconde o menu
                mainContent.classList.add('lg:ml-64');  // Adiciona margem no conteúdo
                mainContent.classList.remove('ml-0');
            }
        });


    </script>

</body>


