<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Dúvidas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-100 flex ml-0">
    <div class="flex ">

        <!-- Conteúdo do Fórum -->
        <div id="barra" class="ml-[245px] flex-1 p-8 overflow-y-auto transition-all duration-300 ease-in-out">
            <h1 class="text-3xl font-semibold">Fórum de Dúvidas</h1>

            <!-- Perguntas e Respostas -->
            @foreach ($questions as $question)
            <div class="bg-white p-4 rounded-lg shadow mb-4 relative">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h2 class="text-lg font-semibold">{{ $question->user->name }}</h2>
                        <span class="text-sm text-gray-600">{{ $question->user->role }}</span>
                    </div>
                    <div class="flex space-x-2">
                        <!-- Categoria da Disciplina -->
                        <span class="px-2 py-1 rounded text-xs" style="background-color: {{ $question->discipline->category->color ?? '#ccc' }};">
                            {{ $question->discipline->name ?? 'Disciplina Desconhecida' }}
                        </span>
                        <!-- Categoria do Assunto -->
                        <span class="px-2 py-1 rounded text-xs ml-2" style="background-color: {{ $question->discipline->category->color ?? '#ccc' }};">
                            {{ $question->topic->name ?? 'Assunto Desconhecido' }}
                        </span>
                    </div>
                </div>
        
                <p class="mb-4">{{ $question->question }}</p>
        
                <!-- Respostas -->
                <div class="relative">
                    <button class="toggle-button bottom-4 right-4 text-black px-4 py-2 bg-gray-200 rounded">Respostas</button>
                    <div class="resposta border-t text-gray-600 hidden mt-12 text-xs">
                        @foreach ($question->answers as $answer)
                            <div class="mt-4">
                                <h3 class="text-sm font-semibold">{{ optional($answer->user)->name ?? 'Usuário Desconhecido' }}</h3>
                                <span class="text-xs text-gray-600">{{ optional($answer->user)->role ?? 'Função Desconhecida' }}</span>
                                <p class="mt-2">{{ $answer->answer }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
        
                <!-- Formulário para Responder -->
                <form action="{{ route('answers.store', $question->id) }}" method="POST" class="mt-4">
                    @csrf
                    <textarea name="answer" placeholder="Escreva sua resposta..." class="w-full p-2 border border-gray-300 rounded mb-2"></textarea>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Responder</button>
                </form>
            </div>
        @endforeach
        
        <!-- Caixa de Texto para Nova Pergunta -->
        <form action="{{ route('forum.store') }}" method="POST">
            @csrf
            <textarea name="question" placeholder="Escreva aqui sua dúvida..." class="w-full p-2 border border-gray-300 rounded mb-4"></textarea>
            <div class="flex space-x-2 mb-4">
                <select id="discipline" name="discipline_id" class="w-full p-2 border border-gray-300 rounded">
                    <option value="">Selecione uma disciplina</option>
                    @foreach ($disciplines as $discipline)
                        <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                    @endforeach
                </select>
                <select id="topic" name="topic_id" class="w-full p-2 border border-gray-300 rounded">
                    <option value="">Selecione um tópico</option>
                </select>
            </div>
            <button type="submit" class="bg-sky-800 text-white p-2 rounded hover:bg-blue-500">Enviar dúvida</button>
        </form>
        </div>  
        <!-- Barra Lateral de Filtro -->
        <div class="w-1/5 p-6 bg-gray-200">
            <h2 class="text-lg font-semibold mb-4">Filtrar dúvidas</h2>
            <form method="GET" action="/forum">
                <div class="space-y-4">
                    <!-- Seleção de Disciplina no Filtro -->
                    <select id="filter-discipline" name="discipline_id" class="w-full p-2 border border-gray-300 rounded" onchange="updateFilterTopics(this.value)">
                        <option value="">Selecione uma disciplina</option>
                        @foreach ($disciplines as $discipline)
                            <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                        @endforeach
                    </select>

                    <!-- Seleção de Tópico no Filtro -->
                    <select id="filter-topic" name="topic_id" class="w-full p-2 border border-gray-300 rounded">
                        <option value="">Selecione um tópico</option>
                        <!-- Tópicos serão preenchidos aqui -->
                    </select>
                    <button type="submit" class="bg-sky-800 text-white p-2 w-full rounded hover:bg-blue-500">Filtrar</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="{{ asset('js/forumscript.js') }}"></script>
    <script>
        function updateTopics(disciplineId) {
            const topicSelect = document.getElementById('topic');
            const filterTopicSelect = document.getElementById('filter-topic');

            // Limpa as opções
            topicSelect.innerHTML = '<option value="">Selecione um tópico</option>';
            filterTopicSelect.innerHTML = '<option value="">Selecione um tópico</option>';

            if (disciplineId) {
                fetch(`/forum/topics?discipline_id=${disciplineId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(topic => {
                            const option = document.createElement('option');
                            option.value = topic.id;
                            option.textContent = topic.name;
                            topicSelect.appendChild(option);
                            filterTopicSelect.appendChild(option.cloneNode(true));
                        });
                    });
            }
        }
    </script>
</body>
</html>