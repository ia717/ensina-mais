
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
            const selectedDiscipline = document.getElementById('disciplineFilter').value;
            const cards = document.querySelectorAll('.question-card');
            cards.forEach(card => {
                const discipline = card.getAttribute('data-discipline');
                if (selectedDiscipline === 'all' || discipline === selectedDiscipline) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }

        function searchQuestions() {
            const query = document.getElementById('searchQuery').value.toLowerCase();
            const cards = document.querySelectorAll('.question-card');
            cards.forEach(card => {
                const questionText = card.querySelector('.question-text').textContent.toLowerCase();
                if (questionText.includes(query)) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }
    </script>
</head>

    <x-app-layout>

    
        <div class="max-w-7xl absolute dark:bg-neutral-800 mx-auto bg-white p-6 rounded-lg shadow-lg">
        
            <h1 class="text-3xl font-bold text-black mb-4 dark:text-white">Fórum de Dúvidas</h1>
            <div class="flex justify-between items-center mb-4">
                <input id="searchQuery" type="text" placeholder="Escreva aqui sua dúvida..." class="w-full p-2 text-gray-800 placeholder-gray-400 border border-gray-300 rounded-lg">
                <button onclick="searchQuestions()" class="ml-4 font-medium bg-blue-500 text-white px-3 py-2 rounded-lg">Filtrar</button>
            </div>
            <div class="mb-4">
                <label class="block text-gray-500">Disciplina</label>
                <select id="disciplineFilter" class="w-full p-2 border border-gray-300 rounded-lg" onchange="filterQuestions()">
                    <option value="all">Selecione uma disciplina</option>
                    <option value="Gramatica">Gramatica</option>
                    <option value="Matemática">Matemática</option>
                    <option value="História">História</option>

                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
            <div class="space-y-4 mb-2.5">
                <!-- Card de dúvida 1 -->
                <div class="bg-gray-50 p-4 rounded-lg shadow mb-2.5 border-2 border-pink-500 question-card" data-discipline="Gramatica">
                <div class="flex justify-between items-center">
                    <span class="text-gray-700 font-semibold">Rogério Bilha</span>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm font-medium bg-pink-500 rounded px-2 text-black">Gramatica</span>
                        <button onclick="toggleAnswer('answer1', 'arrow1')" class="text-gray-500 focus:outline-none transition-transform" id="arrow1">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                    <p class="text-gray-700 mt-2 mb-2.5 question-text">Professora, eu tenho uma dúvida sobre o uso da crase. Quando eu devo usar?</p>
                    <div id="answer1" class="mt-2 hidden fade">
                        <hr class="my-5">
                        <span class="text-sm text-gray-500">Resposta de: Tatiana Lozano</span>
                        <p class="text-gray-700">A crase é utilizada para indicar a fusão de duas vogais idênticas, geralmente a preposição "a" com o artigo definido "a" ou "as". Você deve usar a crase quando houver essa fusão.</p>
                    </div>
                </div>
                <!-- Card de dúvida 2 -->
                                
                <div class="bg-gray-50 p-4 rounded-lg shadow mb-2.5 border-2 border-orange-500 question-card" data-discipline="Matemática">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 font-semibold">Giovana Sprone</span>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm font-medium bg-orange-500 rounded px-2 text-black">Matemática</span>
                            <button onclick="toggleAnswer('answer2', 'arrow2')" class="text-gray-500 focus:outline-none transition-transform" id="arrow2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p class="text-gray-700 mt-2 mb-2.5 question-text">Professora, eu estou com uma dúvida sobre regra de três simples. Eu não entendi bem como fazer, pode me explicar?</p>
                    <div id="answer2" class="mt-2 hidden fade">
                        <hr class="my-5">
                        <span class="text-sm text-gray-500">Resposta de: Giseli Barbosa</span>
                        <p class="text-gray-700">Claro! Para fazer regra de três basta multiplicar os valores conhecidos e depois dividir pelo valor desconhecido, utilizando as operações básicas de multiplicação e divisão.</p>
                    </div>
                </div>

                <!-- Card de dúvida 3 -->
                <div class="bg-gray-50 p-4 rounded-lg shadow mb-2.5 border-2 border-yellow-500 question-card" data-discipline="História">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 font-semibold">Hiago Esteves</span>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm font-medium bg-yellow-500 rounded px-2 text-black">História</span>
                            <button onclick="toggleAnswer('answer3', 'arrow3')" class="text-gray-500 focus:outline-none transition-transform" id="arrow3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p class="text-gray-700 mt-2 mb-2.5 question-text">Tenho uma dúvida: Como o Estado Novo de Getúlio Vargas consolidou o poder presidencial no Brasil?</p>
                    <div id="answer3" class="mt-2 hidden fade">
                        <hr class="my-5">
                        <span class="text-sm text-gray-500">Resposta de: Elisangela Campos</span>
                        <p class="text-gray-700">O Estado Novo (1937-1945) centralizou o poder nas mãos de Vargas, dissolvendo o Congresso, suspendendo partidos políticos e implementando uma nova constituição que lhe conferia amplos poderes, eliminando a oposição e instaurando um governo autoritário que controlava rigidamente a sociedade e a economia.</p>
                    </div>
                </div>
            </div>
            
            
        </div>
        <aside class="right-0 top-0 fixed">
        @include('filtroforum')
        </aside>
        
    </x-app-layout>


