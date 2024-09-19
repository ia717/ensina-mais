<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tópicos de {{$disciplina->name}}</title>
    <!-- Importando Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Importando Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="main-content">
        <h1 class="text-3xl">Tópicos de {{ $disciplina->name }}</h1>

        <div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @if ($topicos->isEmpty())
                <p>Não há tópicos cadastrados para esta disciplina.</p>
                @else
                @foreach ($topicos as $topic)

                <a href="{{ route('aulas', ['disciplinas' => $disciplina->slug, 'slug' => $topic->slug,'topicos' => $topic->slug]) }}" class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">{{ $topic->name }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ $topic->lessons->count() }} AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">10 de {{ $topic->lessons->count() }} aulas</div>
                    <div class="bg-blue-400 h-1 mt-2 rounded"></div>
                </a>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</body>

</html>