<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Dúvidas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .rotate-180 {
            transform: rotate(180deg);
        }

        .transition-transform {
            transition: transform 0.3s ease;
        }

        .fade {
            transition: opacity 0.3s ease;
        }

        .hidden {
            opacity: 0;
            height: 0;
            overflow: hidden;
        }

        .visible {
            opacity: 1;
            height: auto;
        }
    </style>
    <script>
        function toggleAnswer(id, arrowId) {
            const answer = document.getElementById(id);
            const arrow = document.getElementById(arrowId);
            answer.classList.toggle('hidden');
            answer.classList.toggle('visible');
            arrow.classList.toggle('rotate-180');
        }

        function filterQuestions() {
            const selectedDiscipline = document.getElementById('filter-discipline').value;
            const cards = document.querySelectorAll('.question-card');
            cards.forEach(card => {
                const discipline = card.getAttribute('data-discipline');
                card.classList.toggle('hidden', selectedDiscipline !== 'all' && discipline !== selectedDiscipline);
            });
        }

        function searchQuestions() {
            const query = document.getElementById('searchQuery').value.toLowerCase();
            const cards = document.querySelectorAll('.question-card');
            cards.forEach(card => {
                const questionText = card.querySelector('.question-text').textContent.toLowerCase();
                card.classList.toggle('hidden', !questionText.includes(query));
            });
        }
    </script>
</head>

<x-app-layout>
    <div>
        <div class="rounded-md bg-white dark:bg-neutral-800 p-6 space-y-8">
            <div class="flex">
                <!-- Conteúdo do Fórum -->
                <div id="barra" class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg flex-grow dark:bg-neutral-700">
                    <h1 class="text-3xl font-bold text-black mb-4 dark:text-gray-200">Fórum de Dúvidas</h1>

                    <!-- Perguntas e Respostas -->
                    @foreach ($questions as $question)
                    <div class="bg-gray-50 p-4 rounded-lg shadow mb-2.5 border-2 dark:bg-neutral-700"
                        style="border-color: {{ $question->discipline->category->color ?? '#ccc' }};">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700 font-semibold dark:text-gray-200">{{ $question->user->name }}</span>
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-medium rounded px-2 text-black"
                                    style="background-color: {{ $question->discipline->category->color ?? '#ccc' }};">
                                    {{ $question->discipline->name ?? 'Disciplina Desconhecida' }}
                                </span>
                                <span class="text-sm font-medium rounded px-2 text-black ml-2"
                                    style="background-color: {{ $question->discipline->category->color ?? '#ccc' }};">
                                    {{ $question->topic->name ?? 'Assunto Desconhecido' }}
                                </span>
                                <button onclick="toggleAnswer('answer{{ $question->id }}', 'arrow{{ $question->id }}')"
                                    class="text-gray-500 focus:outline-none transition-transform"
                                    id="arrow{{ $question->id }}">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <p class="text-gray-700 mt-2 mb-2.5 question-text dark:text-gray-200">{{ $question->question }}</p>

                        <div id="answer{{ $question->id }}" class="mt-2 hidden fade">
                            <hr class="my-5">
                            @foreach ($question->answers as $answer)
                            <div class="mt-2">
                                <span class="text-sm text-gray-500">Resposta de:
                                    {{ optional($answer->user)->name ?? 'Usuário Desconhecido' }}</span>
                                <p class="text-gray-700">{{ $answer->answer }}</p>
                            </div>
                            @endforeach
                        </div>

                        <!-- Formulário para Responder dentro do card -->
                        <form action="{{ route('answers.store', $question->id) }}" method="POST" class="mt-4">
                            @csrf
                            <textarea name="answer" placeholder="Escreva sua resposta..." class="w-full p-2 border border-gray-300 rounded mb-2 dark:bg-neutral-700"
                                ></textarea>
                            <button type="submit"
                                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Responder</button>
                        </form>
                    </div>
                    @endforeach

                    <!-- Caixa de Texto para Nova Pergunta -->
                    <form action="{{ route('forum.store') }}" method="POST">
                        @csrf
                        <textarea name="question" placeholder="Escreva aqui sua dúvida..."
                            class="w-full p-2 border border-gray-300 rounded mb-4 dark:bg-neutral-700"></textarea>
                        <div class="flex space-x-2 mb-4">
                            <select id="discipline" name="discipline_id" class="w-full p-2 border border-gray-300 rounded dark:bg-neutral-700">
                                <option value="">Selecione uma disciplina</option>
                                @foreach ($disciplines as $discipline)
                                <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                                @endforeach
                            </select>
                            <select id="topic" name="topic_id" class="w-full p-2 border border-gray-300 rounded dark:bg-neutral-700">
                                <option value="">Selecione um tópico</option>
                            </select>
                        </div>
                        <button type="submit" class="bg-sky-800 text-white p-2 rounded hover:bg-blue-500">Enviar
                            dúvida</button>
                    </form>
                </div>

                <!-- Barra Lateral de Filtro -->
                '<div class="w-1/5 p-6 bg-slate-50 rounded-lg shadow dark:bg-neutral-700 border-white">
                    <h2 class="text-lg font-semibold mb-4 dark:text-gray-200">Filtrar dúvidas</h2>
                    <form method="GET" action="/forum">
                        <div class="space-y-4">
                            <!-- Seleção de Disciplina no Filtro -->
                            <select id="filter-discipline" name="discipline_id"
                                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500 dark:bg-neutral-700"
                                onchange="updateFilterTopics(this.value)">
                                <option value="">Selecione uma disciplina</option>
                                @foreach ($disciplines as $discipline)
                                <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                                @endforeach
                            </select>

                            <!-- Seleção de Tópico no Filtro -->
                            <select id="filter-topic" name="topic_id"
                                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500 dark:bg-neutral-700">
                                <option value="">Selecione um tópico</option>
                                <!-- Tópicos serão preenchidos aqui -->
                            </select>

                            <button type="submit"
                                class="bg-sky-800 text-white p-2 w-full rounded hover:bg-blue-500 transition duration-200">Filtrar</button>
                        </div>
                    </form>
                </div>'
            </div>
        </div>
    </div>
    <script src="{{ asset('js/forumscript.js') }}"></script>
</x-app-layout>