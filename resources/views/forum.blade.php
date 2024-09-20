<x-app-layout>
    <div class="flex flex-col lg:flex-row"> <!-- Mudança para responsividade em colunas menores e linhas maiores -->

        <!-- Barra Lateral de Filtro -->
        <div class="w-full lg:w-1/5 p-6 bg-red-900"> <!-- A barra ocupa 100% da largura em telas pequenas -->
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

        <!-- Conteúdo Principal -->
        <div id="barra" class="w-full lg:flex-1 p-4 sm:p-6 lg:p-8 overflow-y-auto transition-all duration-300 ease-in-out">
            <h1 class="text-2xl sm:text-3xl font-semibold text-center">Fórum de Dúvidas</h1>

            <!-- Perguntas e Respostas -->
            @foreach ($questions as $question)
            <div class="bg-white p-4 rounded-lg shadow mb-4">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4">
                    <div>
                        <h2 class="text-lg font-semibold">{{ $question->user->name }}</h2>
                        <span class="text-sm text-gray-600">{{ $question->user->role }}</span>
                    </div>
                    <div class="flex space-x-2 mt-2 sm:mt-0">
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
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 w-full sm:w-auto">Responder</button>
                </form>
            </div>
            @endforeach

            <!-- Caixa de Texto para Nova Pergunta -->
            <form action="{{ route('forum.store') }}" method="POST">
                @csrf
                <textarea name="question" placeholder="Escreva aqui sua dúvida..." class="w-full p-2 border border-gray-300 rounded mb-4"></textarea>
                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 mb-4">
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
                <button type="submit" class="bg-sky-800 text-white p-2 rounded hover:bg-blue-500 w-full sm:w-auto">Enviar dúvida</button>
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
</x-app-layout>
