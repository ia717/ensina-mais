<head>
    <title>Fórum de Dúvidas</title>
    <style>
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
                <div id="barra"
                    class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg flex-grow dark:bg-neutral-700">
                    <h1 class="text-3xl font-bold text-black mb-4 dark:text-gray-200">Fórum de Dúvidas</h1>

                    <!-- Caixa de Texto para Nova Pergunta -->
                    <form action="{{ route('forum.store') }}" method="POST">
                        @csrf
                        <textarea name="question" placeholder="Escreva aqui sua dúvida..."
                            class="w-full p-2 border border-gray-300 rounded mb-4 dark:bg-neutral-700"></textarea>
                        <div class="flex space-x-2 mb-4">
                            <select id="discipline" name="discipline_id"
                                class="w-full p-2 border border-gray-300 rounded dark:bg-neutral-700">
                                <option value="">Selecione uma disciplina</option>
                                @foreach ($disciplines as $discipline)
                                    <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                                @endforeach
                            </select>
                            <select id="topic" name="topic_id"
                                class="w-full p-2 border border-gray-300 rounded dark:bg-neutral-700">
                                <option value="">Selecione um tópico</option>
                            </select>
                            <button type="submit"
                                class="bg-sky-800 text-white p-2 rounded w-1/3 hover:bg-blue-500">Enviar
                                dúvida</button>
                        </div>

                    </form>

                    <!-- Perguntas e Respostas -->
                    @foreach ($questions as $question)
                        <div class="bg-gray-50 p-4 rounded-lg shadow mb-2.5 border-2 dark:bg-neutral-700"
                            style="border-color: {{ $question->discipline->category->color ?? '#ccc' }};">
                            <div class="flex justify-between items-center">
                                <span
                                    class="text-gray-700 font-semibold dark:text-gray-200">{{ $question->user->name }}</span>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium rounded px-2 text-black"
                                        style="background-color: {{ $question->discipline->category->color ?? '#ccc' }};">
                                        {{ $question->discipline->name ?? 'Disciplina Desconhecida' }}
                                    </span>
                                    <span class="text-sm font-medium rounded px-2 text-black ml-2"
                                        style="background-color: {{ $question->discipline->category->color ?? '#ccc' }};">
                                        {{ $question->topic->name ?? '' }}
                                    </span>
                                    <button
                                        onclick="toggleAnswer('answer{{ $question->id }}', 'arrow{{ $question->id }}')"
                                        class="text-gray-500 focus:outline-none transition-transform duration-300 ease-in-out"
                                        id="arrow{{ $question->id }}">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <p class="text-gray-700 mt-2 mb-2.5 question-text dark:text-gray-200">
                                {{ $question->question }}</p>

                            <div id="answer{{ $question->id }}"
                                class="mt-2 hidden transition-opacity duration-300 ease-in-out">
                                <hr class="my-5">
                                @foreach ($question->answers as $answer)
                                    <div class="mt-2">
                                        <span class="text-sm text-gray-500">Resposta de:
                                            {{ optional($answer->user)->name ?? 'Usuário Desconhecido' }}</span>
                                        <p class="text-gray-700">{{ $answer->answer }}</p>
                                    </div>
                                @endforeach
                                </div>

                            <form action="{{ route('answers.store', $question->id) }}" method="POST">
                                @csrf
                                <div
                                    class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                        <label for="comment" class="sr-only">Seu comentário</label>
                                        <textarea id="comment" rows="1" name="answer"
                                            class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                            placeholder="Escreva um comentário..." required></textarea>
                                    </div>
                                    <div
                                        class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                        <button type="submit"
                                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                            Enviar comentário
                                        </button>
                                        <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                            <button type="button"
                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 12 20">
                                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                                        d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                                </svg>
                                                <span class="sr-only">Anexar arquivo</span>
                                            </button>
                                            <button type="button"
                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 16 20">
                                                    <path
                                                        d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                </svg>
                                                <span class="sr-only">Configurar localização</span>
                                            </button>
                                            <button type="button"
                                                class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 18">
                                                    <path
                                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                                </svg>
                                                <span class="sr-only">Enviar imagem</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    @endforeach


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
