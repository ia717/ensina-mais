@include('menuteste')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cronograma</title>
</head>

<body>
    <div>
        @include('menuteste')
    </div>

    <main class="flex-1 flex justify-around items-center">
        <div class="text-center w-full p-8 md:p-0 md:w-auto">
            <div class="text-gray-500 text-lg mb-5">Utilize os filtros para buscar cronogramas</div>
            <span class="material-icons text-gray-400 text-5xl"></span>
        </div>
    </main>

    </div>
    <!-- Filtro de Disciplinas -->
    @include('caixafiltros')

</body>

</html>