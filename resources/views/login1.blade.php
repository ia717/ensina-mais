<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ensina+</title>

    <script src="https://unpkg.com/scrollreveal"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative bg-gray-100 user-select-none m-0 p-0">
    @include('layouts.navigationlogin')
    <div>
        <img class="absolute z-0 left-0 top-48 hidden md:block" src="{{ asset('/imagens/Vector (2).png') }}"
            alt="">
    </div>
    <div>
        <img class="absolute z-0 left-1/4  top-28 hidden md:block" src="{{ asset('/imagens/Vector (1).png') }}"
            alt="">
    </div>
    <div>
        <img class="absolute z-0 left-24 top-96 hidden md:block" src="{{ asset('/imagens/Vector (5).png') }}"
            alt="">
    </div>
    <!-- Main Content -->
    <main class="container p-0 md:p-0 md:flex md:space-x-8 space-y-0 md:space-y-0 m-0 md:my-8 sm:mx-auto ">
        <!-- Promotional Section (Video) -->
        <div class="relative  bg-white sm:rounded-3xl w-full md:w-2/3 overflow-hidden md:ml-6 z-10 order-1 md:order-2 space-y-4 md:space-y-2">
            <video class="w-full" autoplay muted loop playsinline src="{{asset('videos/Para Gabaritar Zuchi.mp4')}}"></video>
        </div>
        <!-- Login Form -->
        <div class="relative bg-white md:shadow-lg md:rounded-3xl p-8 w-full md:w-1/3 z-10 order-2 md:order-1 mt-10 md:mt-0 bg-transparent">
            <h2 class="text-2xl font-semibold mb-7 subpixel-antialiased">Faça seu login</h2>

            @auth
            @php
            $user = Auth::user();

            if ($user->role == 'aluno') {
            $redirect = route('dashboard');
            } elseif ($user->role == 'professor') {
            $redirect = url('/teacherPanel');
            } elseif ($user->role == 'admin') {
            $redirect = url('/admin');
            }
            @endphp
            <form method="GET" action="{{ $redirect }}">
                @csrf

                <p>Você já está logado. <button type="submit">Clique aqui</button> para acessar o sistema.</p>

            </form>
            @endauth

            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
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
                <div class="mb-4">
                    <span class="font-medium text-gray-700">Eu sou um(a)</span>
                    <div class="form-control">
                        <label class="cursor-pointer label">
                            <input type="checkbox" checked="" class="checkbox checkbox-info" />
                            <span class="label-text">Aluno(a)</span>
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="cursor-pointer label">
                            <input type="checkbox" checked="" class="checkbox checkbox-info" />
                            <span class="label-text">Professor(a)</span>
                        </label>
                    </div>
                </div>


                <button type="submit"
                    class="transition-all duration-75 w-full bg-sky-800 text-white py-2 rounded-lg hover:bg-sky-500 font-medium">Acessar</button>
                {{-- <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button> --}}


                <a href="#"
                    class="block text-center mt-4 text-sky-800 hover:underline transition-all duration-75 font-thin">Esqueci
                    minha senha</a>
                @if (Route::has('password.request'))
                {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
                </a> --}}
                @endif
            </form>
            <div class="flex items-center justify-end mt-4">
            </div>
        </div>
    </main>
    <div class="bg-white">
        <section class="lg:mt-56 container mx-auto flex flex-col items-center mb-4 justify-center gap-24 bg-white pt-24">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <div class="mt-7 text-center md:text-left ">
                    <h2 class="text-3xl md:text-5xl font-semibold text-black subpixel-antialiased reveal">A nossa</h2>
                    <h2 class="text-3xl md:text-5xl font-semibold text-black subpixel-antialiased reveal mr-4">
                        <span class="text-sky-800 font-bold">educação</span> em
                    </h2>
                    <h2 class="text-3xl md:text-5xl font-semibold text-black subpixel-antialiased reveal">números</h2>
                </div>

                <div>
                    <img class="absolute justify-center left-0 -mt-10 hidden md:block" src="{{asset('/imagens/Vector (4).png')}}" alt="">
                </div>
                <div>
                    <img class="reveal absolute right-0 ml-56 -mt-10 hidden md:block" src="{{asset('/imagens/Vector (3).png')}}" alt="">
                </div>

                <!-- Statistics Section -->
                <div class="reveal bg-sky-800 text-white rounded-3xl px-2 py-5 md:py-10 mt-8 w-full md:w-auto sm:w-1/2 flex flex-col md:flex-row items-center justify-around relative space-y-4 md:space-y-0">
                    <div class="mx-5 md:mx-10 flex-1 text-center">
                        <p class="text-3xl md:text-5xl font-bold">+12.500</p>
                        <p class="font-medium text-sm md:text-base">do Ensino Médio cadastrados</p>
                    </div>
                    <div class="mx-5 md:mx-10 flex-1 text-center">
                        <p class="text-3xl md:text-5xl font-bold">+400</p>
                        <p class="font-medium text-sm md:text-base">questões no</p>
                        <p class="font-medium text-sm md:text-base">repertório</p>
                    </div>
                    <div class="mx-5 md:mx-10 flex-1 text-center">
                        <p class="text-3xl md:text-5xl font-bold">+700</p>
                        <p class="font-medium text-sm md:text-base">aprovações no vestibular</p>
                    </div>
                </div>
            </div>

        </section>
        <!-- Sobre nós Section -->
        <section id="sobre" class="md:mt-44 reveal flex flex-col items-center justify-center bg-white py-12">
            <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold text-black subpixel-antialiased text-center mb-8">Sobre nós <span class="text-sky-800">+</span></h3>

            <!-- Content Container -->
            <div class="relative w-full flex justify-center items-center z-10 px-4">
                <!-- Blue Bar Behind -->
                <div class="absolute bg-sky-800 w-full h-8 sm:h-10 md:h-12 top-1/2 transform -translate-y-1/2"></div>

                <!-- Card Container -->
                <div class="flex space-x-4 sm:space-x-8 relative z-10 w-full max-w-screen-lg justify-center items-center">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-lg rounded-2xl sm:rounded-3xl p-4 sm:p-6 w-1/2">
                        <ul class="text-sm sm:text-lg list-disc pl-4 space-y-2 text-gray-700">
                            <li class="subpixel-antialiased">Plataforma de estudos focada em vestibulares</li>
                            <li class="subpixel-antialiased">Criada pela escola para apoio aos alunos</li>
                            <li class="subpixel-antialiased">Combina conteúdos teóricos, exercícios, videoaulas e simulados</li>
                        </ul>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white shadow-lg rounded-2xl sm:rounded-3xl p-4 sm:p-6 w-1/2">
                        <ul class="text-sm sm:text-lg list-disc pl-4 space-y-2 text-gray-700">
                            <li class="subpixel-antialiased">Consolida conhecimentos e prepara para exames</li>
                            <li class="subpixel-antialiased">Aumenta as chances de sucesso acadêmico</li>
                            <li class="subpixel-antialiased">Oferece um ambiente de aprendizado interativo e acessível</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alunos section -->
        <section class="bg-white md:mt-56">
            <h3 id="aprova" class="reveal text-3xl md:text-5xl font-bold text-black justify-center items-center flex">
                Alunos <span class="text-red-600 p-4">SESI SENAI</span>
            </h3>
            <div class="relative overflow-hidden w-full max-w-5xl mx-auto pt-10">
                <div id="carousel" class="reveal flex transition-transform duration-300 ease-out">

                    <!-- First Slide -->
                    <div class="flex-shrink-0 flex min-w-full space-x-0 ml-5">
                        <span><img src="{{asset('imagens/teste marcela.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80"></span>
                        <img src="{{asset('imagens/teste cogh.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                        <img src="{{asset('imagens/teste joao.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                    </div>

                    <!-- Second Slide -->
                    <div class="flex-shrink-0 flex min-w-full space-x-0 mb-20">
                        <img src="{{asset('imagens/teste eduarda.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                        <img src="{{asset('imagens/teste everton.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                        <img src="{{asset('imagens/teste pedro.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">

                    </div>

                </div>

                <!-- Carousel Controls -->
                <div class="absolute mt-14 left-10 top-1/2 transform -translate-y-1/2">
                    <button id="prev" class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 hover:pl-4 transition-all">
                        <svg fill="#ffffff" width="64px" height="64px" viewBox="-3.36 -3.36 30.72 30.72" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" transform="matrix(1, 0, 0, -1, 0, 0)" stroke-width="0.00024000000000000003">
                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                <path transform="translate(-3.36, -3.36), scale(0.96)" d="M16,26.770188650581986C19.186110614276764,27.11547725260842,22.68931702461402,27.21229436467344,25.095483017937546,25.095483017937546C27.599505000857558,22.892583400609073,28.341167811617755,19.33363745909855,28.242404932621866,16C28.146717551394396,12.770172744395039,26.819293836365066,9.749766874708184,24.572061505161194,7.427938494838806C22.284507987394075,5.064450481484889,19.277483836460757,3.628839294882452,16,3.3512129494920373C12.388512296909237,3.0452940853690538,8.457891164992812,3.3333361709602727,5.841309719822798,5.841309719822796C3.188764466079395,8.383754307522999,2.213701304776176,12.373402508800119,2.8034567129798234,15.999999999999998C3.3255412866585403,19.21046755783813,6.163241126417239,21.260222871149118,8.68316981832066,23.316830181679336C10.855253596890229,25.089548351222476,13.212666114083566,26.46811670852938,16,26.770188650581986" fill="#2D6796" strokewidth="0"></path>
                            </g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g data-name="Layer 2">
                                    <g data-name="arrow-left">
                                        <rect width="24" height="24" opacity="0"></rect>
                                        <path d="M13.54 18a2.06 2.06 0 0 1-1.3-.46l-5.1-4.21a1.7 1.7 0 0 1 0-2.66l5.1-4.21a2.1 2.1 0 0 1 2.21-.26 1.76 1.76 0 0 1 1.05 1.59v8.42a1.76 1.76 0 0 1-1.05 1.59 2.23 2.23 0 0 1-.91.2z"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>

                <div class="absolute right-10 mt-14 top-1/2 transform -translate-y-1/2">
                    <button id="next" class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 hover:pr-4 transition-all">
                        <svg fill="#ffffff" width="64px" height="64px" viewBox="-3.36 -3.36 30.72 30.72" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" transform="matrix(-1, 0, 0, -1, 0, 0)" stroke-width="0.00024000000000000003">
                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                <path transform="translate(-3.36, -3.36), scale(0.96)" d="M16,26.770188650581986C19.186110614276764,27.11547725260842,22.68931702461402,27.21229436467344,25.095483017937546,25.095483017937546C27.599505000857558,22.892583400609073,28.341167811617755,19.33363745909855,28.242404932621866,16C28.146717551394396,12.770172744395039,26.819293836365066,9.749766874708184,24.572061505161194,7.427938494838806C22.284507987394075,5.064450481484889,19.277483836460757,3.628839294882452,16,3.3512129494920373C12.388512296909237,3.0452940853690538,8.457891164992812,3.3333361709602727,5.841309719822798,5.841309719822796C3.188764466079395,8.383754307522999,2.213701304776176,12.373402508800119,2.8034567129798234,15.999999999999998C3.3255412866585403,19.21046755783813,6.163241126417239,21.260222871149118,8.68316981832066,23.316830181679336C10.855253596890229,25.089548351222476,13.212666114083566,26.46811670852938,16,26.770188650581986" fill="#2D6796" strokewidth="0"></path>
                            </g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g data-name="Layer 2">
                                    <g data-name="arrow-left">
                                        <rect width="24" height="24" opacity="0"></rect>
                                        <path d="M13.54 18a2.06 2.06 0 0 1-1.3-.46l-5.1-4.21a1.7 1.7 0 0 1 0-2.66l5.1-4.21a2.1 2.1 0 0 1 2.21-.26 1.76 1.76 0 0 1 1.05 1.59v8.42a1.76 1.76 0 0 1-1.05 1.59 2.23 2.23 0 0 1-.91.2z"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </section>
    </div>

    <div>
        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0">
            <img class="hidden md:block" src="{{asset('imagens/TURBINA DESKTOP.png')}}" alt="Banner Turbina Desktop">
            <img class="block md:hidden" src="{{asset('imagens/mobile sla fds me ajuda aaaaa.png')}}" alt="Banner Turbina Mobile">
        </a>
    </div>
    <section id="aluno" class="reveal flex flex-col-reverse md:flex-row justify-center bg-white my-6 p-4 md:p-20 items-center">
        <div class="flex flex-col items-center md:items-start text-center md:text-left w-full md:w-1/2 gap-4 md:gap-8">
            <h5 class="text-2xl md:text-4xl font-bold text-black">Ainda não é nosso aluno?</h5>
            <p class="text-base md:text-lg text-gray-600 w-full md:w-3/4">Garanta uma preparação de excelência para o vestibular! Somos referência nacional em educação e preparação para vestibular.</p>
            <a href="#" class="transition-all duration-75 bg-sky-800 subpixel-antialiased text-sm md:text-base text-white font-semibold rounded-md hover:bg-sky-500 hover:px-7 py-2 px-4 md:py-3 md:px-6">Conheça nossa proposta de ensino</a>
        </div>
        <div class="flex justify-center md:w-1/2">
            <img src="{{asset('imagens\rafa(antiga  jessica).png')}}" class="w-48 md:w-full max-w-xs md:max-w-md lg:max-w-lg object-contain">
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
    <a id="scrollToTop" class="fixed right-2 bottom-2 z-40 bg-sky-800 rounded-full text-white transition-opacity duration-300 ease-in-out opacity-0 hover:text-sky-400 font-bold text-xl no-underline border" href="#inicio">
        <svg fill="#ffffff" width="50px" height="50px" class="hover:px-2 hover:py-2 transition-all" viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" transform="matrix(1, 0, 0, 1, 0, 0)rotate(90)" stroke-width="0.00024000000000000003">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <g data-name="Layer 2">
                    <g data-name="arrow-left">
                        <rect width="24" height="24" opacity="0"></rect>
                        <path d="M13.54 18a2.06 2.06 0 0 1-1.3-.46l-5.1-4.21a1.7 1.7 0 0 1 0-2.66l5.1-4.21a2.1 2.1 0 0 1 2.21-.26 1.76 1.76 0 0 1 1.05 1.59v8.42a1.76 1.76 0 0 1-1.05 1.59 2.23 2.23 0 0 1-.91.2z"></path>
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
    </script>
</body>

</html>