<body class="bg-blue-500">
<nav class="relative px-4 py-4 flex justify-between items-center bg-gray-100">
        <!-- Container das logos -->
        <div class="flex items-center space-x-4">
            <!-- Logo "ensina+" -->
            <a class="text-3xl font-bold leading-none" href="#">
                <img src="{{asset('/imagens/Logo ensina claro.png')}}" alt="Logo" class="h-8 pb-1">
            </a>
            <!-- Logos SESI e SENAI -->
            <div class="flex items-center space-x-2">
                <img src="{{asset('/imagens/logos_sesi_preto_01.webp')}}" alt="SESI" class="h-8">
                <img src="{{asset('/imagens/logo-senai.fw_.png')}}" alt="SENAI" class="h-8 bg-black">
            </div>
        </div>

        <!-- Botão do menu no mobile -->
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
    </nav>

    <section class="bg-sky-800 shadow-md p-1 mb-16 py-1.5 z-20">
        <ul class="hidden justify-center lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-sm text-white hover:font-bold transition-all mx-10" href="#">Sobre nós</a></li>
            <li><a class="text-sm text-white hover:font-bold transition-all mx-10" href="#">Mural dos Aprovados</a></li>
            <li><a class="text-sm text-white hover:font-bold transition-all mx-10" href="#">Nossa Metodologia</a></li>
            <li><a class="text-sm text-white hover:font-bold transition-all mx-10" href="#">Estude Conosco</a></li>
        </ul>
    </section>

    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <img src="{{asset('/imagens/Logo ensina claro.png')}}" alt="Logo" class="h-8 pb-1">
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Sobre Nós</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Mural dos Aprovados</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Nossa Metodologia</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Estude Conosco</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright © 2024</span>
                </p>
            </div>
        </nav>
    </div>
</body>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            burger.forEach((btn, index) => {
                btn.addEventListener('click', () => {
                    menu[index].classList.toggle('hidden');
                });
            });
        }

        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            close.forEach((btn, index) => {
                btn.addEventListener('click', () => {
                    menu[index].classList.toggle('hidden');
                });
            });
        }

        if (backdrop.length) {
            backdrop.forEach((backdropEl, index) => {
                backdropEl.addEventListener('click', () => {
                    menu[index].classList.toggle('hidden');
                });
            });
        }
    });
</script>
