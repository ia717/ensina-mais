<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ensina Mais</title>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .scroll {
            margin-top: 20px;
            margin-inline: auto;
            max-width: 1440px;
            padding: 10px;
            border-radius: 5px;
            overflow: hidden;
            mask: linear-gradient(to right,
                    transparent,
                    black 10%,
                    black 95%,
                    transparent);
        }

        .scroll__container {
            display: flex;
            width: max-content;
            gap: 0px;
            animation: scrollInfinito 20s linear infinite;
        }

        .scroll__item {

            border-radius: 5px;
            padding: 7px 7px;
            white-space: nowrap;
        }

        @keyframes scrollInfinito {
            to {
                translate: calc(-50% - 5px);
            }
        }

        .scroll1 {
            margin-top: 20px;
            margin-inline: auto;
            max-width: 1440px;
            padding: 10px;
            border-radius: 5px;
            overflow: hidden;
            mask: linear-gradient(to right, transparent, black 10%, black 95%, transparent);
        }

        .scroll__container1 {
            display: flex;
            width: max-content;
            gap: 0px;
            animation: scrollInfinito1 25s linear infinite reverse;
        }

        .scroll__item1 {
            border-radius: 5px;
            padding: 7px 7px;
            white-space: nowrap;
        }

        @keyframes scrollInfinito1 {
            to {
                translate: calc(-50% - 5px);
            }
        }
    </style>
</head>

<body class="relative bg-gray-100 user-select-none m-0 p-0 font-poppins">

    <header id="inicio" class="bg-blue-500"
        style="-webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;">
        <nav class="relative px-4 py-4 flex justify-between items-center bg-gray-100">
            <!-- Container das logos -->
            <div class="flex items-center space-x-4">
                <!-- Logo "ensina+" -->
                <a class="text-3xl font-bold leading-none" href="#">
                    <img src="{{ asset('/images/logos/logo-ensina-claro.svg') }}" alt="Logo" class="h-8 pb-1">
                </a>
                <!-- Logos SESI e SENAI -->
                <div class="md:flex items-center space-x-2 hidden ">
                    <img src="{{ asset('/images/logos/logo-sesi.webp') }}" alt="SESI" class="h-8">
                    <img src="{{ asset('/images/logos/logo-senai.png') }}" alt="SENAI" class="h-8 bg-black">
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

        <section class="bg-sky-800 shadow-md p-1 py-1.5 z-20">
            <ul class="hidden justify-center lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                <li><a class="text-sm text-white hover:font-bold transition-all mx-10" href="#sobre">Sobre nós</a></li>
                <li><a class="text-sm text-white hover:font-bold transition-all mx-10" href="#aprova">Mural dos
                        Aprovados</a></li>
                <li><a class="text-sm text-white hover:font-bold transition-all mx-10" href="#turbina">Nossa
                        Metodologia</a></li>
                <li><a class="text-sm text-white hover:font-bold transition-all mx-10" href="#aluno">Estude Conosco</a>
                </li>
            </ul>
        </section>

        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav
                class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                <div class="flex items-center">
                    <a class="mr-auto text-3xl font-bold leading-none" href="#">
                        <img src="{{ asset('/images/logos/logo-ensina-claro.svg') }}" alt="Logo" class="h-8 pb-1">
                    </a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                href="#sobre">Sobre Nós</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                href="#aprova">Mural dos Aprovados</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                href="#turbina">Nossa Metodologia</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                                href="#aluno">Estude Conosco</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div>
        <img class="absolute z-0 left-0 top-48 hidden md:block" src="{{ asset('/images/login/vector2.svg') }}"
            alt="">
    </div>
    <div>
        <img class="absolute z-0 left-1/4 top-28 hidden md:block" src="{{ asset('/images/login/vector1.svg') }}"
            alt="">
    </div>
    <div>
        <img class="absolute z-0 left-24 top-96 hidden md:block" src="{{ asset('/images/login/vector5.svg') }}"
            alt="">
    </div>
    <!-- Main Content -->
    <main class="container p-0 md:p-0 md:flex md:space-x-8 space-y-0 md:space-y-0 m-0 md:my-8 sm:mx-auto ">
        <!-- Promotional Section (Video) -->
        <div
            class="relative  bg-white sm:rounded-3xl w-full md:w-2/3 overflow-hidden md:ml-6 z-10 order-1 md:order-2 space-y-4 md:space-y-2">
            <video class="w-full" autoplay muted loop playsinline
                src="{{ asset('videos/Para Gabaritar Zuchi.mp4') }}"></video>
        </div>
        <!-- Login Form -->
        <div
            class="relative bg-white md:shadow-lg md:rounded-3xl p-8 w-full md:w-1/3 z-10 order-2 md:order-1 mt-10 md:mt-0 bg-transparent">
            <h2 class="text-2xl font-semibold mb-7 subpixel-antialiased">Faça seu login</h2>

            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form class="space-y-8" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="block mb-4">
                    <span class="font-medium text-gray-700">Email</span>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username"
                        class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50 text-black bg-white"
                        placeholder="Digite seu Email ou CPF" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="block mb-4">
                    <span class="font-medium text-gray-700 ">Senha</span>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password"
                        class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50 text-black"
                        placeholder="Digite sua Senha" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>


                <button type="submit"
                    class="transition-all duration-75 w-full bg-sky-800 text-white py-2 rounded-lg hover:bg-sky-500 font-medium">Acessar</button>

                <a class="block text-sky-800 hover:underline transition-all duration-75"
                    href="{{ route('password.request') }}">
                    Esqueci minha senha
                </a>
            </form>
            <div class="flex items-center justify-end mt-4">
            </div>
        </div>
    </main>
    <div class="bg-white">
        <section
            class="lg:mt-20 container mx-auto flex flex-col anima items-center mb-4 justify-center gap-24 bg-white pt-24">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <div class="mt-7 text-center md:text-left pr-14 ">
                    <h2 class="text-3xl md:text-5xl font-semibold text-black subpixel-antialiased reveal">A nossa</h2>
                    <h2 class="text-3xl md:text-5xl font-semibold text-black subpixel-antialiased reveal mr-4">
                        <span class="text-sky-800 font-bold">educação</span> em
                    </h2>
                    <h2 class="text-3xl md:text-5xl font-semibold text-black subpixel-antialiased reveal">números</h2>
                </div>

                <div>
                    <img class="absolute justify-center left-0 -mt-10 hidden md:block"
                        src="{{ asset('/images/login/vector4.svg') }}" alt="">
                </div>
                <div>
                    <img class="reveal absolute right-0 ml-56 -mt-10 hidden md:block"
                        src="{{ asset('/images/login/vector3.svg') }}" alt="">
                </div>

                <div
                    class="reveal bg-sky-800 text-white rounded-3xl px-2 py-5 md:py-10 mt-5 w-full md:w-auto sm:w-1/2 flex flex-col md:flex-row items-center justify-around relative space-y-4 md:space-y-0">
                    <div class="mx-5 md:mx-10 flex-1 text-center">
                        <p class="text-3xl md:text-5xl font-bold counter-up" data-count-to="1500">0</p>
                        <p class="font-medium text-sm md:text-base">do Ensino Médio cadastrados</p>
                    </div>
                    <div class="mx-5 md:mx-10 flex-1 text-center">
                        <p class="text-3xl md:text-5xl font-bold counter-up" data-count-to="400">0</p>
                        <p class="font-medium text-sm md:text-base">questões no</p>
                        <p class="font-medium text-sm md:text-base">repertório</p>
                    </div>
                    <div class="mx-5 md:mx-10 flex-1 text-center">
                        <p class="text-3xl md:text-5xl font-bold counter-up" data-count-to="700">0</p>
                        <p class="font-medium text-sm md:text-base">aprovações no vestibular</p>
                    </div>
                </div>

        </section>
        <!-- Sobre nós Section -->
        <section id="sobre"
            class="md:mt-44 reveal anima flex flex-col items-center justify-center bg-white py-12">
            <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold text-black subpixel-antialiased text-center mb-8">
                Sobre nós <span class="text-sky-800">+</span></h3>

            <!-- Content Container -->
            <div class="relative w-full flex justify-center anima items-center z-10 px-4">
                <!-- Blue Bar Behind -->
                <div class="absolute bg-sky-800 w-full h-8 sm:h-10 md:h-12 top-1/2 transform -translate-y-1/2"></div>

                <!-- Card Container -->
                <div
                    class="flex space-x-4 sm:space-x-8 relative z-10 w-full max-w-screen-lg justify-center items-center">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-lg rounded-2xl sm:rounded-3xl p-4 sm:p-6 w-1/2">
                        <ul class="text-sm sm:text-xl list-disc pl-4 space-y-2 text-gray-700">
                            <li class="subpixel-antialiased">Plataforma de estudos focada em vestibulares no geral;
                            </li>
                            <li class="subpixel-antialiased">Criada pela escola para apoio aos alunos;</li>
                            <li class="subpixel-antialiased">Combina conteúdos teóricos, exercícios, videoaulas e
                                simulados.</li>
                        </ul>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white shadow-lg rounded-2xl sm:rounded-3xl p-4 sm:p-6 w-1/2">
                        <ul class="text-sm sm:text-xl list-disc pl-4 space-y-2 text-gray-700">
                            <li class="subpixel-antialiased">Consolida conhecimentos e prepara para exames;</li>
                            <li class="subpixel-antialiased">Aumenta as chances de sucesso acadêmico;</li>
                            <li class="subpixel-antialiased">Oferece um ambiente de aprendizado interativo e acessível.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alunos section -->
        <section id="aprova" class="bg-white md:mt-20 anima mb-0">
            <h3 id="aprova"
                class="reveal text-3xl md:text-5xl font-bold text-black justify-center items-center flex">
                Alunos <span class="text-red-600 p-4">SESI SENAI</span>
            </h3>
            <div class="relative overflow-hidden w-full max-w-5xl mx-auto pt-10">
                <div id="carousel" class="reveal flex transition-transform duration-300 ease-out">

                    <!-- First Slide -->
                    <div class="flex-shrink-0 flex min-w-full space-x-0 ml-5">
                        <span><img src="{{ asset('images/login/marcela.png') }}" alt=""
                                class=" h-40 md:h-80 w-40 md:w-80"></span>
                        <img src="{{ asset('images/login/cogh.png') }}" alt=""
                            class=" h-40 md:h-80 w-40 md:w-80">
                        <img src="{{ asset('images/login/joao.png') }}" alt=""
                            class=" h-40 md:h-80 w-40 md:w-80">
                    </div>

                    <!-- Second Slide -->
                    <div class="flex-shrink-0 flex min-w-full space-x-0 mb-20">
                        <img src="{{ asset('images/login/eduarda.png') }}" alt=""
                            class=" h-40 md:h-80 w-40 md:w-80">
                        <img src="{{ asset('images/login/everton.png') }}" alt=""
                            class=" h-40 md:h-80 w-40 md:w-80">
                        <img src="{{ asset('images/login/pedro.png') }}" alt=""
                            class=" h-40 md:h-80 w-40 md:w-80">
                    </div>

                </div>

                <!-- Carousel Controls -->
                <div class="absolute mt-14 left-10 top-1/2 transform -translate-y-1/2">
                    <button id="prev"
                        class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 hover:pl-4 transition-all">
                        <svg fill="#ffffff" width="64px" height="64px" viewBox="-3.36 -3.36 30.72 30.72"
                            xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" transform="matrix(1, 0, 0, -1, 0, 0)"
                            stroke-width="0.00024000000000000003">
                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                <path transform="translate(-3.36, -3.36), scale(0.96)"
                                    d="M16,26.770188650581986C19.186110614276764,27.11547725260842,22.68931702461402,27.21229436467344,25.095483017937546,25.095483017937546C27.599505000857558,22.892583400609073,28.341167811617755,19.33363745909855,28.242404932621866,16C28.146717551394396,12.770172744395039,26.819293836365066,9.749766874708184,24.572061505161194,7.427938494838806C22.284507987394075,5.064450481484889,19.277483836460757,3.628839294882452,16,3.3512129494920373C12.388512296909237,3.0452940853690538,8.457891164992812,3.3333361709602727,5.841309719822798,5.841309719822796C3.188764466079395,8.383754307522999,2.213701304776176,12.373402508800119,2.8034567129798234,15.999999999999998C3.3255412866585403,19.21046755783813,6.163241126417239,21.260222871149118,8.68316981832066,23.316830181679336C10.855253596890229,25.089548351222476,13.212666114083566,26.46811670852938,16,26.770188650581986"
                                    fill="#2D6796" strokewidth="0"></path>
                            </g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g data-name="Layer 2">
                                    <g data-name="arrow-left">
                                        <rect width="24" height="24" opacity="0"></rect>
                                        <path
                                            d="M13.54 18a2.06 2.06 0 0 1-1.3-.46l-5.1-4.21a1.7 1.7 0 0 1 0-2.66l5.1-4.21a2.1 2.1 0 0 1 2.21-.26 1.76 1.76 0 0 1 1.05 1.59v8.42a1.76 1.76 0 0 1-1.05 1.59 2.23 2.23 0 0 1-.91.2z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>

                <div class="absolute right-10 mt-14 top-1/2 transform -translate-y-1/2">
                    <button id="next"
                        class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 hover:pr-4 transition-all">
                        <svg fill="#ffffff" width="64px" height="64px" viewBox="-3.36 -3.36 30.72 30.72"
                            xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"
                            transform="matrix(-1, 0, 0, -1, 0, 0)" stroke-width="0.00024000000000000003">
                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                <path transform="translate(-3.36, -3.36), scale(0.96)"
                                    d="M16,26.770188650581986C19.186110614276764,27.11547725260842,22.68931702461402,27.21229436467344,25.095483017937546,25.095483017937546C27.599505000857558,22.892583400609073,28.341167811617755,19.33363745909855,28.242404932621866,16C28.146717551394396,12.770172744395039,26.819293836365066,9.749766874708184,24.572061505161194,7.427938494838806C22.284507987394075,5.064450481484889,19.277483836460757,3.628839294882452,16,3.3512129494920373C12.388512296909237,3.0452940853690538,8.457891164992812,3.3333361709602727,5.841309719822798,5.841309719822796C3.188764466079395,8.383754307522999,2.213701304776176,12.373402508800119,2.8034567129798234,15.999999999999998C3.3255412866585403,19.21046755783813,6.163241126417239,21.260222871149118,8.68316981832066,23.316830181679336C10.855253596890229,25.089548351222476,13.212666114083566,26.46811670852938,16,26.770188650581986"
                                    fill="#2D6796" strokewidth="0"></path>
                            </g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g data-name="Layer 2">
                                    <g data-name="arrow-left">
                                        <rect width="24" height="24" opacity="0"></rect>
                                        <path
                                            d="M13.54 18a2.06 2.06 0 0 1-1.3-.46l-5.1-4.21a1.7 1.7 0 0 1 0-2.66l5.1-4.21a2.1 2.1 0 0 1 2.21-.26 1.76 1.76 0 0 1 1.05 1.59v8.42a1.76 1.76 0 0 1-1.05 1.59 2.23 2.23 0 0 1-.91.2z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </section>
    </div>

    <div id="turbina" class="anima">
        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">
            <img class="hidden md:block" src="{{ asset('images/login/turbina-desktop.png') }}"
                alt="Banner Turbina Desktop">
            <img class="block md:hidden" src="{{ asset('images/login/turbina-mobile.png') }}"
                alt="Banner Turbina Mobile">
        </a>
    </div>
    <section id="aluno"
        class="anima flex flex-col-reverse md:flex-row  justify-center bg-white my-1 p-4 md:p-10 items-center">
        <div class="flex flex-col items-center md:items-start text-center md:text-left w-full md:w-1/2 gap-4 md:gap-8">
            <h5 class="text-2xl md:text-4xl font-bold text-black">Ainda não é nosso aluno?</h5>
            <p class="text-base md:text-lg text-gray-600 w-full md:w-3/4">Garanta uma preparação de excelência para o
                vestibular! Somos referência nacional em educação e preparação para vestibular.</p>
            <a href="#"
                class="transition-all duration-75 bg-sky-800 subpixel-antialiased text-sm md:text-base text-white font-semibold rounded-md hover:bg-sky-500 hover:px-7 py-2 px-4 md:py-3 md:px-6">Conheça
                nossa proposta de ensino</a>
        </div>
        <div class="flex justify-center md:w-1/2">
            <img src="{{ asset('images\login\rafa.png') }}"
                class="w-48 md:w-full max-w-xs md:max-w-md lg:max-w-lg object-contain">
        </div>

    </section>

    <section class="text-center anima py-5 bg-gray-100">
        <div class="flex justify-center mb-10">
            <h1 class="text-3xl font-bold text-gray-800">CONHEÇA A EQUIPE QUE DEU VIDA AO <span
                    class="inline-block ml-2"><img src="{{ asset('images/logos/logo-ensina-claro.svg') }}"
                        alt=""></span></h1>
        </div>
        <h1 class="text-2xl font-bold mt-16 text-gray-800">Alunos De Desenvolvimento de Sistemas</h1>
        <div class="scroll m-0 p-0">
            <div class="scroll__container">
                <div class="scroll__item"><img src="{{ asset('images/alunos/caio.png') }}" alt=""></div>
                <div class="scroll__item"><img src="{{ asset('images/alunos/gi.png') }}" alt=""></div>
                <div class="scroll__item"><img src="{{ asset('images/alunos/japa.png') }}" alt=""></div>
                <div class="scroll__item"><img src="{{ asset('images/alunos/junin.png') }}" alt=""></div>
            </div>

        </div>

        <h1 class="text-2xl mt-16 font-bold text-gray-800">Alunos De Multimídia</h1>
        <div class="scroll1 m-0 p-0">
            <div class="scroll__container1">
                <div class="scroll__item1"><img src="{{ asset('images/alunos/caio.png') }}" alt=""></div>
                <div class="scroll__item1"><img src="{{ asset('images/alunos/gi.png') }}" alt=""></div>
                <div class="scroll__item1"><img src="{{ asset('images/alunos/japa.png') }}" alt=""></div>
                <div class="scroll__item1"><img src="{{ asset('images/alunos/junin.png') }}" alt=""></div>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer class="bg-sky-800 text-white py-5 mt-10 pr-16 pl-10 ">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="font-bold text-center md:text-left flex flex-col mb-4 md:mb-0">
                <p class="text-sm">SESI - MONTE ALTO</p>
                <p class="text-sm">Rua Paschoale di Madeo, 301 - Jd. Bela Vista</p>
            </div>
            <div class="font-bold text-center md:text-left flex flex-col mb-4 md:mb-0">
                <p class="text-sm">SENAI - MONTE ALTO</p>
                <p class="text-sm">R. Quinze de Maio, 523 - Centro</p>
            </div>
            <div class="font-bold text-center md:text-left flex flex-col">
                <p class="text-sm">Contato: ce227@gmail.com - (16) 3242-1240</p>
                <p class="text-sm">Copyright 2024 &copy; 2024 Todos os direitos reservados. - DVN</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a id="scrollToTop"
        class="fixed right-2 bottom-2 z-40 bg-sky-800 rounded-full text-white transition-opacity duration-300 ease-in-out opacity-0 hover:text-sky-400 font-bold text-xl no-underline border"
        href="#inicio">
        <svg fill="#ffffff" width="50px" height="50px" class="hover:px-2 hover:py-2 transition-all"
            viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"
            transform="matrix(1, 0, 0, 1, 0, 0)rotate(90)" stroke-width="0.00024000000000000003">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <g data-name="Layer 2">
                    <g data-name="arrow-left">
                        <rect width="24" height="24" opacity="0"></rect>
                        <path
                            d="M13.54 18a2.06 2.06 0 0 1-1.3-.46l-5.1-4.21a1.7 1.7 0 0 1 0-2.66l5.1-4.21a2.1 2.1 0 0 1 2.21-.26 1.76 1.76 0 0 1 1.05 1.59v8.42a1.76 1.76 0 0 1-1.05 1.59 2.23 2.23 0 0 1-.91.2z">
                        </path>
                    </g>
                </g>
            </g>
        </svg>
    </a>
    @include('smoothlink')
    </div>
    <script>
        const scrollToTopButton = document.getElementById('scrollToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                scrollToTopButton.classList.remove('opacity-0');
                scrollToTopButton.classList.add('opacity-100');
            } else {
                scrollToTopButton.classList.remove('opacity-100');
                scrollToTopButton.classList.add('opacity-0');
            }
        });

        const carousel = document.getElementById('carousel');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        let currentIndex = 0;

        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < carousel.children.length - 1) {
                currentIndex++;
                updateCarousel();
            }
        });

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

        ScrollReveal().reveal('.anima', {
            duration: 1000, //
            origin: 'bottom',
            distance: '20px',
            reset: false,
        });

        let elemScroll = document.querySelector(".scroll");
        let elemContainer = elemScroll.querySelector(".scroll__container");
        let elemChildren = Array.from(elemContainer.children);

        elemChildren.forEach((item) => {
            let itemDuplicado = item.cloneNode(true);

            elemContainer.appendChild(itemDuplicado);
        });
        let elemScroll1 = document.querySelector(".scroll1");
        let elemContainer1 = elemScroll1.querySelector(".scroll__container1");
        let elemChildren1 = Array.from(elemContainer1.children);

        elemChildren1.forEach((item) => {
            let itemDuplicado1 = item.cloneNode(true);

            elemContainer1.appendChild(itemDuplicado1);
        });

        function count_up(ele, count_to, timer, i) {
            if (i > count_to) {
                return;
            }
            ele.text(i.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
            i += 1;
            setTimeout(function() {
                count_up(ele, count_to, timer, i);
            }, timer);
        }

        // Intersection Observer para iniciar a contagem quando o container aparecer na tela
        function startCounting(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $(entry.target).find('.counter-up').each(function() {
                        var count_to = parseInt($(this).data('count-to'));
                        var timer = Math.floor(2000 / count_to); // Ajustar a duração da animação
                        count_up($(this), count_to, timer, 0);
                    });
                    // Desconecta o observador após iniciar a animação
                    observer.unobserve(entry.target);
                }
            });
        }

        // Configuração do Intersection Observer
        const observerOptions = {
            threshold: 0.5 // Inicia a contagem quando 50% do container estiver visível
        };
        const observer = new IntersectionObserver(startCounting, observerOptions);

        // Observa o container da classe "reveal"
        document.querySelectorAll('.reveal').forEach(container => {
            observer.observe(container);
        });
    </script>
</body>

</html>
