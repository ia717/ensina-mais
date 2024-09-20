<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{$topic->name}}</title>
</head>

<body>
    @include('menuteste')
    <div class="main-content">

        <div class="flex h-10 items-center mb-10">
            <p class="text-3xl text-[{{$corCategoria}}] fontbold translate-y-[-3px] mr-3">|</p>
            <p class="text-3xl text-black font-bold">{{$topic->name}}</p>
        </div>


        <div class="flex flex-col gap-7">
            @foreach ($aulas as $aula)
            <a href="{{$aula->link}}">
                <div class=" flex border-2 border-[{{$corCategoria}}] rounded-lg shadow-md min-w-4xl justify-between p-5 pb-14 hover:-translate-x-2 transition ease">
                    <div class="text-gray-700 flex">
                        <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="mr-4" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"></path>
                                <path d="M305.312,148.688c-6.25-6.25-16.375-6.25-22.625,0l-96,96c-6.25,6.25-6.25,16.375,0,22.625l96,96 C285.812,366.438,289.906,368,294,368s8.188-1.562,11.312-4.688c6.25-6.25,6.25-16.375,0-22.625L220.625,256l84.688-84.688 C311.562,165.062,311.562,154.938,305.312,148.688z"></path>
                            </g>
                        </svg>
                        <!-- Texto e Data -->
                        <div class="">
                            <p class="text-lg font-bold text-gray-800">{{$aula->name}}</p>
                            <p class="text-1xl text-gray-800">{{$aula->duration}}</p>
                        </div>
                    </div>
                    <!-- Relevância -->
                    @if ($aula->is_high_relevance)
                    <div class="flex w-[100px] flex-col gap-2">
                        <p class="self-end">Relevância:</p>
                        <p class="font-bold text-white bg-[#FF0000] rounded-lg p-1 w-14 text-center self-end">Alta</p>
                    </div>
                    @else
                    <div class="flex w-[100px] flex-col gap-2">
                        <p class="self-end">Relevância:</p>
                        <p class="font-bold text-white bg-[#21C61C] rounded-lg p-1 w-14 text-center self-end">Baixa</p>
                    </div>
                    @endif
                    <!-- Fim Aula -->
                </div>
            </a>
            @endforeach
        </div>
    </div>
</body>

</html>