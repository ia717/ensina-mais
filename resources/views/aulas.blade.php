<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Aulas sobre {{$topic->name}}</title>
</head>

<body class="bg-gray-100 p-6">
    <div class="ml-[250px] bg-white rounded-md shadow-md w-full">
        <h1 class="text-xl font-bold mb-4"></h1>
        <!-- Aulas -->

        <div>
            <h1 class="text-4xl mb-4">| {{$topic->name}}</h1>
        </div>
        @foreach ($aulas as $aula)
        <a href="" class="flex flex-col">
            <div class="border-4 my-5 flex w-auto flex-col">


                <p class="text-gray-700">
                    <span class="font-bold">{{$aula->time}}</span>
                    {{$aula->name}}
                </p>
                <div>
                    <span class="font-bold">Relevância:</span>
                    @if ($aula->is_high_relevance)
                    Alta
                    @else
                    Baixa
                    @endif
                </div>

                <p class="font-bold">Duração:{{$aula->duration}}</p>
            </div>

        </a>
        @endforeach
</body>

</html>