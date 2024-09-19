<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Matemática</title>
    <!-- Importando Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Importando Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Conteúdo Principal */
        .main-content {
            margin-left: 245px;
            flex: 1;
            padding: 2rem;
            overflow-y: auto;
            transition: margin-left 0.3s ease;
        }

        .main-content.hamburger-active {
            margin-left: 30px;
            /* Move o conteúdo para a esquerda quando o menu é escondido */
        }

        .main-content h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    @include('menuteste')

    <!-- Conteúdo Principal -->

    <div class="main-content">
        <h1>Página de {{ $materia->name }}</h1>

        <div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @if ($topicos->isEmpty())
                <p>Não há tópicos cadastrados para esta matéria.</p>
                <p>Não há tópicos cadastrados para esta matéria.</p>
                @else
                @foreach ($topicos as $topic)
<<<<<<< HEAD





                <a href="{{ route('conteudo', ['materia' => $materia->slug, 'slug' => $topic->slug]) }}" class="bg-white rounded-lg shadow p-4">
=======
                <a href="{{ route('aulas', ['materia' => $materia->slug, 'slug' => $topic->slug]) }}" class="bg-white rounded-lg shadow p-4">
>>>>>>> 4a0f38714b2c2a6c6d132fe687d39528ee33a5bc
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

        <!-- Categoria: Matemática -->
        <!-- <div class="category">
            <h2>Escolha um assunto</h2>
            Grid de Assuntos
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Matemática básica</h3>
                    <p class="text-sm text-gray-600 mt-2">35 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">10 de 35 aulas</div>
                    <div class="bg-blue-400 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Matemática básica</h3>
                    <p class="text-sm text-gray-600 mt-2">35 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">10 de 35 aulas</div>
                    <div class="bg-blue-400 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Exponencial</h3>
                    <p class="text-sm text-gray-600 mt-2">15 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">0 de 15 aulas</div>
                    <div class="bg-gray-300 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Probabilidade</h3>
                    <p class="text-sm text-gray-600 mt-2">10 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">0 de 10 aulas</div>
                    <div class="bg-gray-300 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Matriz</h3>
                    <p class="text-sm text-gray-600 mt-2">5 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">0 de 5 aulas</div>
                    <div class="bg-gray-300 h-1 mt-2 rounded"></div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800">Matriz</h3>
                    <p class="text-sm text-gray-600 mt-2">5 AULAS</p>
                    <div class="mt-2 text-sm text-gray-600">0 de 5 aulas</div>
                    <div class="bg-gray-300 h-1 mt-2 rounded"></div>
                </div>
            </div>
        </div> -->
    </div>
</body>

</html>