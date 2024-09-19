<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ensina+</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body class="relative bg-gray-100 user-select-none m-0 p-0">
    @include('headernav')
    <div>
        <img class="absolute z-0 left-0 top-48 hidden md:block" src="{{ asset('/imagens/Vector (2).png') }}"
            alt="">
    </div>
    <!-- Main Content -->
    <main class="container p-0 md:p-0 md:flex md:space-x-8 space-y-0 md:space-y-0 m-0 md:my-8 sm:mx-auto">
        <!-- Promotional Section (Video) -->
        <div class="relative  bg-white sm:rounded-3xl w-full md:w-2/3 overflow-hidden md:ml-6 z-10 order-1 md:order-2 space-y-4 md:space-y-2">
            <video class="w-full" autoplay muted loop playsinline src="{{asset('videos/Para Gabaritar.mp4')}}"></video>
        </div>
        <!-- Login Form -->
        <div class="relative md:bg-white md:shadow-lg md:rounded-3xl p-8 w-full md:w-1/3 z-10 order-2 md:order-1 mt-10 md:mt-0 bg-transparent">
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
                        class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50"
                        placeholder="Digite seu Email ou CPF" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="block mb-4">
                    <span class="font-medium text-gray-700 ">Senha</span>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password"
                        class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50"
                        placeholder="Digite sua Senha" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <span class="font-medium text-gray-700">Eu sou um(a)</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-green-600" name="role" value="Aluno"
                                checked>
                            <span class="ml-2">Aluno(a)</span>
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-green-600" name="role" value="Professor">
                            <span class="ml-2">Professor(a)</span>
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
    <!-- Section Title -->
    <section class="mt-56 container mx-auto flex flex-col justify-center gap-24 bg-white pt-24">
            <div class="flex items-center justify-center">
                <div class="mt-7">
                    <h2 class="text-5xl font-semibold text-black text-balance subpixel-antialiased reveal">A nossa</h2>
                    <h2 class="text-5xl font-semibold text-black text-balance subpixel-antialiased reveal"><span class="text-sky-800 font-bold">educação</span> em</h2>
                    <h2 class="text-5xl font-semibold text-black text-balance subpixel-antialiased reveal">números</h2>
                </div>
                <div><img class="absolute left-0 -mt-20" src="{{asset('/imagens/Vector (4).png')}}" alt=""></div>
                <div><img class="reveal hidden md:flex absolute left-36 top-96 pt-20 mt-10" src="{{asset('/imagens/Vector (5).png')}}" alt=""></div>
                <div><img class="reveal absolute left-2/3 ml-56 -mt-10" src="{{asset('/imagens/Vector (3).png')}}" alt=""></div>

                <!-- Statistics Section -->
                <div class="reveal bg-sky-800 text-white rounded-3xl px-1 py-10 ml-32 mt-8 flex items-center justify-around relative">
                    <div class="mx-10 flex-1 text-center">
                        <p class="text-5xl font-bold">+12.500</p>
                        <p class="font-medium">do Ensino Médio cadastrados</p>
                    </div>
                    <div class="mx-10 flex-1 text-center">
                        <p class="text-5xl font-bold">+400</p>
                        <p class="font-medium">questões no</p>
                        <p class="font-medium">repertório</p>
                    </div>
                    <div class="mx-10 flex-1 text-center">
                        <p class="text-5xl font-bold">+700</p>
                        <p class="font-medium">aprovações no vestibular</p>
                    </div>
                </div>
            </div>


        <!-- sobre nós -->

        <h3 class="reveal text-5xl font-bold text-black justify-center items-center flex subpixel-antialiased" id="sobre">Sobre nós <span class="text-sky-800">+</span></h3>
        <div class="reveal container justify-center items-center flex z-10">
            <div class="bg-sky-800 w-full h-12 absolute"></div>
            <div class="flex space-x-20 mx-20">
                <div class="font-medium text-1xl bg-white shadow-lg rounded-3xl p-6 w-1/3 z-10">
                    <ul class="text-lg list-disc pl-4 space-y-2 text-gray-700">
                        <li class="py-2 subpixel-antialiased">Plataforma de estudos focada em vestibulares</li>
                        <li class="py-2 subpixel-antialiased">Criada pela escola para apoio aos alunos</li>
                        <li class="py-2 subpixel-antialiased">Combina conteúdos teóricos, exercícios, videoaulas e simulados</li>
                    </ul>
                </div>
                <div class="font-medium text-1xl bg-white shadow-lg rounded-3xl p-6 w-1/3 z-10">
                    <ul class="text-lg list-disc pl-4 space-y-2 text-gray-700">
                        <li class="py-2 subpixel-antialiased">Consolida conhecimentos e prepara para exames</li>
                        <li class="py-2 subpixel-antialiased">Aumenta as chances de sucesso acadêmico</li>
                        <li class="py-2 subpixel-antialiased">Oferece um ambiente de aprendizado interativo e acessível</li>
                    </ul>
                </div>
                <div class="font-medium text-1xl bg-white shadow-lg rounded-3xl p-6 w-1/3 z-10">
                    <ul class="text-lg list-disc pl-4 space-y-2 text-gray-700">
                        <li class="py-4">Estudo personalizado para cada aluno</li>
                        <li class="py-4">Flexibilidade de tempo e lugar</li>
                        <li class="py-4">Feedback contínuo para melhorar o desempenho</li>
                    </ul>
                </div>
            </div>
        </div>
        <h3 id="aprova" class="reveal text-3xl md:text-5xl font-bold text-black justify-center items-center flex">
            Alunos <span class="text-red-600 p-4">SESI SENAI</span>
        </h3>
        <div class="relative overflow-hidden w-full max-w-5xl mx-auto pt-20">
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
                    <img src="{{asset('imagens/teste pedro.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                    <img src="{{asset('imagens/teste everton.png')}}" alt="" class=" h-40 md:h-80 w-40 md:w-80">
                </div>
                
            </div>

            <!-- Carousel Controls -->
            <div class="absolute mt-20 left-0 top-1/2 transform -translate-y-1/2">
                <button id="prev" class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 hover:pl-4 transition-all">
                <svg fill="#ffffff" width="64px" height="64px" viewBox="-3.36 -3.36 30.72 30.72" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" transform="matrix(1, 0, 0, -1, 0, 0)" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"><path transform="translate(-3.36, -3.36), scale(0.96)" d="M16,26.770188650581986C19.186110614276764,27.11547725260842,22.68931702461402,27.21229436467344,25.095483017937546,25.095483017937546C27.599505000857558,22.892583400609073,28.341167811617755,19.33363745909855,28.242404932621866,16C28.146717551394396,12.770172744395039,26.819293836365066,9.749766874708184,24.572061505161194,7.427938494838806C22.284507987394075,5.064450481484889,19.277483836460757,3.628839294882452,16,3.3512129494920373C12.388512296909237,3.0452940853690538,8.457891164992812,3.3333361709602727,5.841309719822798,5.841309719822796C3.188764466079395,8.383754307522999,2.213701304776176,12.373402508800119,2.8034567129798234,15.999999999999998C3.3255412866585403,19.21046755783813,6.163241126417239,21.260222871149118,8.68316981832066,23.316830181679336C10.855253596890229,25.089548351222476,13.212666114083566,26.46811670852938,16,26.770188650581986" fill="#2D6796" strokewidth="0"></path></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g data-name="Layer 2"> <g data-name="arrow-left"> <rect width="24" height="24" opacity="0"></rect> <path d="M13.54 18a2.06 2.06 0 0 1-1.3-.46l-5.1-4.21a1.7 1.7 0 0 1 0-2.66l5.1-4.21a2.1 2.1 0 0 1 2.21-.26 1.76 1.76 0 0 1 1.05 1.59v8.42a1.76 1.76 0 0 1-1.05 1.59 2.23 2.23 0 0 1-.91.2z"></path> </g> </g> </g></svg>
                </button>
            </div>

            <div class="absolute right-10 mt-20 top-1/2 transform -translate-y-1/2">
                <button id="next" class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 hover:pr-4 transition-all">
                <svg fill="#ffffff" width="64px" height="64px" viewBox="-3.36 -3.36 30.72 30.72" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" transform="matrix(-1, 0, 0, -1, 0, 0)" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"><path transform="translate(-3.36, -3.36), scale(0.96)" d="M16,26.770188650581986C19.186110614276764,27.11547725260842,22.68931702461402,27.21229436467344,25.095483017937546,25.095483017937546C27.599505000857558,22.892583400609073,28.341167811617755,19.33363745909855,28.242404932621866,16C28.146717551394396,12.770172744395039,26.819293836365066,9.749766874708184,24.572061505161194,7.427938494838806C22.284507987394075,5.064450481484889,19.277483836460757,3.628839294882452,16,3.3512129494920373C12.388512296909237,3.0452940853690538,8.457891164992812,3.3333361709602727,5.841309719822798,5.841309719822796C3.188764466079395,8.383754307522999,2.213701304776176,12.373402508800119,2.8034567129798234,15.999999999999998C3.3255412866585403,19.21046755783813,6.163241126417239,21.260222871149118,8.68316981832066,23.316830181679336C10.855253596890229,25.089548351222476,13.212666114083566,26.46811670852938,16,26.770188650581986" fill="#2D6796" strokewidth="0"></path></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g data-name="Layer 2"> <g data-name="arrow-left"> <rect width="24" height="24" opacity="0"></rect> <path d="M13.54 18a2.06 2.06 0 0 1-1.3-.46l-5.1-4.21a1.7 1.7 0 0 1 0-2.66l5.1-4.21a2.1 2.1 0 0 1 2.21-.26 1.76 1.76 0 0 1 1.05 1.59v8.42a1.76 1.76 0 0 1-1.05 1.59 2.23 2.23 0 0 1-.91.2z"></path> </g> </g> </g></svg>
                </button>
            </div>

        </div>
        </section>
        </div>
        <!-- TURBINA (Banner) -->
        <div id="turbina" class="reveal relative w-full mt-8 pt-1">
            <img src="{{asset('/imagens/turbinanovo.png')}}" class="w-full object-cover" alt="Banner Image">
            <div class="absolute inset-0 flex flex-col items-end justify-center text-white pr-10 mr-10">
                <p class="mt-5 font-medium text-3xl md:text-5xl subpixel-antialiased">Método Ensina</p>
                <div class="mt-2">
                    <p class="font-thin mt-1 text-2xl md:text-4xl subpixel-antialiased mr-36">+ Conteúdo</p>
                    <p class="font-thin mt-2 text-2xl md:text-4xl subpixel-antialiased">+ Resultados</p>
                    <p class="font-thin mt-2 text-2xl md:text-4xl subpixel-antialiased">+ Aprovados</p>
                    <div class="mt-5">
                        <a target="blank" href="https://www.youtube.com/watch?v=xvFZjo5PgG0">
                            <button
                                class="transition-all duration-75 text-sm md:text-lg hover:px-10 font-medium bg-yellow-500 text-black py-2 px-4 md:px-8 rounded-md hover:bg-yellow-600 subpixel-antialiased">
                                Saiba Mais
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section id="aluno" class="reveal flex justify-center bg-white my-20 p-20">
            <div class="flex flex-col items-start w-1/2 gap-8">
                <h5 class="text-5xl font-bold text-black">Ainda não é nosso aluno?</h5>
                <p class="text-xl text-gray w-3/4">Garanta uma preparação de excelência para o vestibular! Somos referência nacional em
                    educação e preparação para vestibular.</p>
                <a href="#" class="transition-all duration-75 bg-sky-800 subpixel-antialiased text-lg text-white font-semibold rounded-md hover:bg-sky-500 hover:px-6 p-4">Conheça nossa proposta de ensino!</a>
            </div>
            <img src="{{asset('imagens/jéssica.png')}}" class="">
        </section>
        <!-- Footer -->
        <footer class="bg-sky-800 text-white py-5 mt-10 px-14 ">
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
        <svg fill="#ffffff" width="50px" height="50px" class="hover:px-2 hover:py-2 transition-all" viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" transform="matrix(1, 0, 0, 1, 0, 0)rotate(90)" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g data-name="Layer 2"> <g data-name="arrow-left"> <rect width="24" height="24" opacity="0"></rect> <path d="M13.54 18a2.06 2.06 0 0 1-1.3-.46l-5.1-4.21a1.7 1.7 0 0 1 0-2.66l5.1-4.21a2.1 2.1 0 0 1 2.21-.26 1.76 1.76 0 0 1 1.05 1.59v8.42a1.76 1.76 0 0 1-1.05 1.59 2.23 2.23 0 0 1-.91.2z"></path> </g> </g> </g></svg>
        </a>

        @include('smoothlink')
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
