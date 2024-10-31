<x-app-layout>
    <div class="flex flex-col">

            <div>
                <div id="questions-container" class="relative h-full">
                    @foreach ($questions as $index => $question)
                    <div id="question_{{ $index }}" class="question h-full bg-white dark:bg-neutral-800 p-8 rounded-lg shadow-lg transition duration-300 {{ $index === 0 ? '' : 'hidden' }}">
                        <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Questão {{$index + 1}}</h1>
                        <form method="POST" action="{{ route('questions.check', $question) }}">
                            @csrf
                            <p class="text-lg text-gray-600 dark:text-white mb-6">
                                {{ strip_tags($question->statement) }}
                            </p>
                            <ul class="space-y-3 mb-6">
                                @foreach ($question->answers as $index => $answer)
                                <x-radio-answer :question-id="$question->id" :answer="$answer" :index="$index" />
                                @endforeach
                            </ul>
                            <div class="flex justify-center">
                                <button class="w-28 bg-sky-800 text-white py-2 font-bold rounded-lg transition duration-300 hover:bg-blue-600"
                                    onclick="corrigirQuestao({{$index}})">Responder</button>
                            </div>
                        </form>
                    </div>
                    @endforeach
                    <div class="flex justify-between mt-4">
                        <button id="prev-btn" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-700">← Anterior</button>
                        <button id="next-btn" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-700">Próxima →</button>
                    </div>
                </div>
            </div>


            <!-- Navegação -->


        <x-question-filter></x-question-filter>
    </div>

    <!-- Script para Navegação -->
    <script>
        let currentQuestion = 0;
        const totalQuestions = {{count($questions)}}; // Passando o valor total de perguntas do Blade


        function showQuestion(index) {
            document.querySelectorAll('.question').forEach((question, idx) => {
                question.classList.toggle('hidden', idx !== index);
            });
        }

        function corrigirQuestao(index) {
            event.preventDefault();
            
        }

        document.getElementById('next-btn').addEventListener('click', () => {
            currentQuestion = (currentQuestion + 1) % totalQuestions;
            showQuestion(currentQuestion);
        });

        document.getElementById('prev-btn').addEventListener('click', () => {
            currentQuestion = (currentQuestion - 1 + totalQuestions) % totalQuestions;
            showQuestion(currentQuestion);
        });

        // Exibe a primeira questão
        showQuestion(currentQuestion);
    </script>
</x-app-layout>