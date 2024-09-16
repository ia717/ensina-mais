<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tópicos: Nome da disciplina</title>

</head>

<body>
    <div>
        @include('menuteste')
    </div>



    <a href="#">
        <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="absolute top-7 mt-1 left-72 hover:pl-1 transition-all " xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
            </g>
        </svg>
    </a>
    <p class="text-3xl text-orange-500 fontbold ml-80 mt-6">|</p>
    <p class="text-4xl text-black font-bold pl-2 mt-6">Tópicos</p>


    <div class="rounded-full absolute top-6 left-1/2 ml-72 z-10 shadow-lg" style="width: 30%;">
        <svg class="absolute top-2 left-2" fill="#4b5563" width="24px" height="24px" viewBox="0 0 256.00098 256.00098" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="#4b5563" stroke-width="12.800049000000001">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M226.82129,221.17236,180.955,175.306a88.10138,88.10138,0,1,0-5.657,5.65649L221.165,226.82959a3.99992,3.99992,0,0,0,5.65625-5.65723ZM35.999,116a80,80,0,1,1,80,80A80.09041,80.09041,0,0,1,35.999,116Z"></path>
            </g>
        </svg>
        <input class="pl-10 pr-5 min-w-full py-2 rounded-full shadow focus:outline-none focus:border-none bg-gray-300 placeholder-gray-600 placeholder:font-thin" type="text" placeholder="Pesquisar">
    </div>



    <div class="grid grid-cols-3 gap-14 absolute right-32 mr-2 pt-32 text-xl">
        <div class="bg-white p-6 rounded-lg shadow-md text-start px-auto py-auto">
            <div class="flex pb-5">
                <div class="w-20 h-20 bg-gray-300 rounded-lg"></div>
                <div class="font-semibold max-w-26 mx-5">Nome do tópico</div>
            </div>
            <!-- para mudar o progresso do aluno basta modificar o "widht: 25%" nessa div que tem o bg-sky-500 -->

            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-sky-800 h-4 rounded-full" style="width: 25%;"></div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-start px-auto py-auto">
            <div class="flex pb-5">
                <div class="w-20 h-20 bg-gray-300 rounded-lg"></div>
                <div class="font-semibold max-w-26 mx-5">Nome do tópico</div>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-sky-800 h-4 rounded-full" style="width: 60%;"></div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-start px-auto py-auto">
            <div class="flex pb-5">
                <div class="w-20 h-20 bg-gray-300 rounded-lg"></div>
                <div class="font-semibold max-w-26 mx-5">Nome do tópico</div>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-sky-800 h-4 rounded-full" style="width: 55%;"></div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-start px-auto py-auto">
            <div class="flex pb-5">
                <div class="w-20 h-20 bg-gray-300 rounded-lg"></div>
                <div class="font-semibold max-w-26 mx-5">Nome do tópico</div>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-sky-800 h-4 rounded-full" style="width: 25%;"></div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-start px-auto py-auto">
            <div class="flex pb-5">
                <div class="w-20 h-20 bg-gray-300 rounded-lg"></div>
                <div class="font-semibold max-w-26 mx-5">Nome do tópico</div>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-sky-800 h-4 rounded-full" style="width: 90%;"></div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-start px-auto py-auto">
            <div class="flex pb-5">
                <div class="w-20 h-20 bg-gray-300 rounded-lg"></div>
                <div class="font-semibold max-w-26 mx-5">Nome do tópico</div>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-sky-800 h-4 rounded-full" style="width: 15%;"></div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-start px-auto py-auto">
            <div class="flex pb-5">
                <div class="w-20 h-20 bg-gray-300 rounded-lg"></div>
                <div class="font-semibold max-w-26 mx-5">Nome do tópico</div>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-sky-800 h-4 rounded-full" style="width: 100%;"></div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-start px-auto py-auto">
            <div class="flex pb-5">
                <div class="w-20 h-20 bg-gray-300 rounded-lg"></div>
                <div class="font-semibold max-w-26 mx-5">Nome do tópico</div>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-sky-800 h-4 rounded-full" style="width: 14%;"></div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md text-start px-auto py-auto">
            <div class="flex pb-5">
                <div class="w-20 h-20 bg-gray-300 rounded-lg"></div>
                <div class="font-semibold max-w-26 mx-5">Nome do tópico</div>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-sky-800 h-4 rounded-full" style="width: 31%;"></div>
            </div>
        </div>
    </div>

    <div class="top-full absolute left-80 flex gap-10">
        <p class="absolute text-3xl text-orange-500 fontbold mt-0">|</p>
        <p class="absolute text-4xl w-80 text-black font-bold pl-4 mt-0">Material Turbina</p>

        <div class="w-72 h-80 rounded-lg bg-gray-300 mt-20 p-5">*BANNER TURBINA DEPENDENTE DA MATÉRIA*</div>
        <div class="w-72 h-80 rounded-lg bg-gray-300 mt-20 p-5 mb-80">
            <p class="font-light text-xl">Apostila de matemática - Método Turbina SESI</p>
            <ul class="mt-5 text-lg">
                <li>*MATÉRIA*</li>
                <li>*MATÉRIA*</li>
                <li>*MATÉRIA*</li>
                <li>*MATÉRIA*</li>
                <li>*MATÉRIA*</li>
                <li>*MATÉRIA*</li>

            </ul>
        </div>
    </div>
</body>

</html>