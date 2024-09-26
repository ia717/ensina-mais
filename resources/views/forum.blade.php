

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
    </script>
</head>

    <x-app-layout>
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold text-purple-700 mb-4">Fórum de Dúvidas</h1>
            <div class="flex justify-between items-center mb-4">
                <input type="text" placeholder="Escreva aqui sua dúvida..." class="w-full p-2 border border-gray-300 rounded-lg">
                <button class="ml-4 bg-blue-500 text-white px-4 py-2 rounded-lg">Filtrar dúvidas</button>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Disciplina</label>
                <select class="w-full p-2 border border-gray-300 rounded-lg">
                    <option>Selecione uma disciplina</option>
                    <option>Matemática</option>
                    <option>Física</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
            <div class="space-y-4 mb-20">
                <!-- Card de dúvida -->
                <div class="bg-gray-50 p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 font-semibold">Rogério Bilha</span>
                        <span class="text-sm text-gray-500">Gramatica</span>
                        <button onclick="toggleAnswer('answer1', 'arrow1')" class="text-gray-500 focus:outline-none transition-transform" id="arrow1">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <p class="text-gray-700 mt-2 mb-20">Professora, eu tenho uma dúvida sobre o uso da crase. Quando eu devo usar?</p>
                    <div id="answer1" class="mt-2 hidden fade">
                        <span class="text-sm text-gray-500">Respostas</span>
                        <p class="text-gray-700">A crase é utilizada para indicar a fusão de duas vogais idênticas, geralmente a preposição "a" com o artigo definido "a" ou "as". Você deve usar a crase quando houver essa fusão.</p>
                    </div>
                </div>
                <!-- Adicione mais cards de dúvida conforme necessário -->
            </div>
            
            
        </div>
    </x-app-layout>


