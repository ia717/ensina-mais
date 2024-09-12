<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensina+</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body class="relative bg-gray-100 user-select-none">
    @include('headernav')
    <div>
        <img class="absolute z-0 left-0 top-48 hidden md:block" src="{{asset('/imagens/Vector (2).png')}}" alt="">
    </div>
    <!-- Main Content -->
    <main class="container mx-auto mt-8 p-4 md:flex md:space-x-8 space-y-4 md:space-y-0">
        <!-- Promotional Section (Video) -->
        <div class="relative bg-white shadow-lg rounded-3xl w-full md:w-2/3 overflow-hidden md:ml-6 z-10 order-1 md:order-2">
            <video class="w-full" autoplay muted loop playsinline src="{{asset('videos/Para Gabaritar.mp4')}}"></video>
        </div>
        <!-- Login Form -->
        <div class="bg-white shadow-lg rounded-3xl p-8 w-full md:w-1/3 z-10 order-2 md:order-1">
            <h2 class="text-2xl font-semibold mb-7 subpixel-antialiased">Faça seu login</h2>
            <form>
                <label class="block mb-4">
                    <span class="font-medium text-gray-700">Email ou CPF</span>
                    <input type="text" class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50" placeholder="Digite seu Email ou CPF">
                </label>
                <label class="block mb-4">
                    <span class="font-medium text-gray-700 ">Senha</span>
                    <input type="password" class="focus:outline-none mb-5 mt-1 block w-full rounded-md border-black border-2 shadow-sm focus:border-sky-800 focus:ring-2 p-2 focus:ring-sky-800 focus:ring-opacity-50" placeholder="Digite sua Senha">
                </label>
                <div class="mb-4">
                    <span class="font-medium text-gray-700">Eu sou um(a)</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-green-600" name="role" value="Aluno">
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
                <button type="submit" class="transition-all duration-75 w-full bg-sky-800 text-white py-2 rounded-lg hover:bg-sky-500 font-medium">Acessar</button>
                <a href="#" class="block text-center mt-4 text-sky-800 hover:underline transition-all duration-75 font-thin">Esqueci minha senha</a>
            </form>
        </div>
    </main>
    <!-- Section Title -->
    <section class="mt-20 md:mt-56 container mx-auto flex flex-col justify-center gap-20 md:gap-40 bg-white pt-10 md:pt-24">
    <div class="flex flex-col md:flex-row items-center justify-center">
    <div class="mt-7 text-center md:text-left">
        <h2 class="text-3xl md:text-5xl font-semibold text-black subpixel-antialiased reveal">A nossa</h2>
        <h2 class="text-3xl md:text-5xl font-semibold text-black subpixel-antialiased reveal">
            <span class="text-sky-800 font-bold">educação</span> em
        </h2>
        <h2 class="text-3xl md:text-5xl font-semibold text-black subpixel-antialiased reveal">números</h2>
    </div>

    <div>
        <img class="absolute left-0 -mt-10 hidden md:block" src="{{asset('/imagens/Vector (4).png')}}" alt="">
    </div>

    <div>
        <img class="reveal absolute left-36 top-96 pt-10 mt-5 md:pt-20 md:mt-10 lg:hidden" src="{{asset('/imagens/Vector (5).png')}}" alt="">
    </div>

    <div>
        <img class="reveal absolute left-2/3 ml-56 -mt-10 hidden md:block" src="{{asset('/imagens/Vector (3).png')}}" alt="">
    </div>

    <!-- Statistics Section -->
    <div class="reveal bg-sky-800 text-white rounded-3xl px-2 py-5 md:py-10 mt-8 w-full md:w-auto flex flex-col md:flex-row items-center justify-around relative space-y-4 md:space-y-0">
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
<div class="relative overflow-hidden w-full max-w-5xl mx-auto">
    <div id="carousel" class="reveal flex transition-transform duration-300 ease-out">

        <!-- First Slide -->
        <div class="flex-shrink-0 flex min-w-full space-x-0">
            <span><img src="{{asset('imagens/teste marcela.png')}}" alt="" class="rounded-full h-40 md:h-80 w-40 md:w-80"></span>
            <img src="{{asset('imagens/teste cogh.png')}}" alt="" class="rounded-full h-40 md:h-80 w-40 md:w-80">
            <img src="{{asset('imagens/teste joao.png')}}" alt="" class="rounded-full h-40 md:h-80 w-40 md:w-80">
        </div>

        <!-- Second Slide -->
        <div class="flex-shrink-0 flex min-w-full space-x-0 mb-20">
            <img src="{{asset('imagens/teste eduarda.png')}}" alt="" class="rounded-full h-40 md:h-80 w-40 md:w-80">
            <img src="{{asset('imagens/teste pedro.png')}}" alt="" class="rounded-full h-40 md:h-80 w-40 md:w-80">
            <img src="{{asset('imagens/teste everton.png')}}" alt="" class="rounded-full h-40 md:h-80 w-40 md:w-80">
        </div>
    </div>

    <!-- Carousel Controls -->
    <div class="absolute left-10 top-1/2 transform -translate-y-1/2">
    <button id="prev" class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 transition-all duration-75">
        <svg height="40px" width="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#000000">
            <g>
                <circle style="fill:#2D6796;" cx="256" cy="256" r="256"></circle>
                <path style="fill:#E6F3FF;" d="M301.954,109.254c-7.406-3.067-15.936-1.372-21.606,4.298L151.897,242.019
                    c-3.718,3.718-5.806,8.763-5.806,14.019c0,5.258,2.089,10.302,5.81,14.019l128.431,128.395c3.793,3.791,8.863,5.806,14.021,5.806
                    c2.553,0,5.13-0.495,7.583-1.51c7.406-3.069,12.236-10.297,12.238-18.315l0.021-256.862
                    C314.192,119.551,309.363,112.323,301.954,109.254z"></path>
            </g>
        </svg>
    </button>
</div>

<div class="absolute right-10 top-1/2 transform -translate-y-1/2">
    <button id="next" class="transform px-2.5 pb-1.5 bg-none text-sky-500 text-6xl rounded-full font-medium hover:text-sky-800 transition-all duration-75">
        <svg height="40px" width="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#000000" transform="rotate(180)">
            <g>
                <circle style="fill:#2D6796;" cx="256" cy="256" r="256"></circle>
                <path style="fill:#E6F3FF;" d="M301.954,109.254c-7.406-3.067-15.936-1.372-21.606,4.298L151.897,242.019
                    c-3.718,3.718-5.806,8.763-5.806,14.019c0,5.258,2.089,10.302,5.81,14.019l128.431,128.395c3.793,3.791,8.863,5.806,14.021,5.806
                    c2.553,0,5.13-0.495,7.583-1.51c7.406-3.069,12.236-10.297,12.238-18.315l0.021-256.862
                    C314.192,119.551,309.363,112.323,301.954,109.254z"></path>
            </g>
        </svg>
    </button>
</div>

</div>

        </div>
        <!-- TURBINA (Banner) -->
        <div id="turbina" class="reveal relative w-full mt-8 pt-1">
            <img src="{{asset('/imagens/turbinanovo.png')}}" class="w-full object-cover" alt="Banner Image">
            <div class="absolute inset-0 flex flex-col items-end justify-center text-white pr-10">
                <p class="mt-5 font-medium text-3xl md:text-5xl subpixel-antialiased">Método Ensina</p>
                <div class="mt-2">
                    <p class="font-thin mt-1 text-2xl md:text-4xl subpixel-antialiased">+ Conteúdo</p>
                    <p class="font-thin mt-2 text-2xl md:text-4xl subpixel-antialiased">+ Resultados</p>
                    <p class="font-thin mt-2 text-2xl md:text-4xl subpixel-antialiased">+ Aprovados</p>
                    <div class="mt-5">
                        <a target="blank" href="https://www.youtube.com/watch?v=xvFZjo5PgG0">
                            <button class="transition-all duration-75 text-sm md:text-lg font-medium bg-yellow-500 text-black py-2 px-4 md:px-8 rounded-md hover:bg-yellow-600 subpixel-antialiased">
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
        <footer class="bg-sky-800 text-white py-5 mt-10">
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
        <a id="scrollToTop" class="fixed right-2 bottom-2 z-40 bg-sky-800 rounded-full text-white transition-opacity duration-300 ease-in-out opacity-0 hover:text-sky-500 font-bold text-xl no-underline border border-white" href="#inicio"><svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000" class="transition-all hover:h-11 hover:w-11" transform="matrix(1, 0, 0, 1, 0, 0)rotate(90)">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" href="#inicio" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <circle href="#inicio" style="fill:#2D6796;" cx="256" cy="256" r="256"></circle>
                    <path style="fill:#2D6796;" d="M505.866,311.875l-197.43-198.204l-21.304,131.963l-28.134,131.491L368.083,486.21 C437.127,452.532,488.76,388.711,505.866,311.875z"></path>
                    <path href="#inicio" style="fill:#E6F3FF;" d="M301.954,109.254c-7.406-3.067-15.936-1.372-21.606,4.298L151.897,242.019 c-3.718,3.718-5.806,8.763-5.806,14.019c0,5.258,2.089,10.302,5.81,14.019l128.431,128.395c3.793,3.791,8.863,5.806,14.021,5.806 c2.553,0,5.13-0.495,7.583-1.51c7.406-3.069,12.236-10.297,12.238-18.315l0.021-256.862 C314.192,119.551,309.363,112.323,301.954,109.254z"></path>
                    <path style="fill:#CFDBE6;" d="M146.135,255.138c-0.014,0.3-0.045,0.598-0.045,0.9c0,5.258,2.089,10.302,5.81,14.019 l128.431,128.395c3.793,3.791,8.863,5.806,14.021,5.806c2.553,0,5.13-0.495,7.583-1.51c7.406-3.069,12.236-10.297,12.238-18.315 l0.009-129.295H146.135z" href="#inicio"></path>
                </g>
            </svg></a>

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