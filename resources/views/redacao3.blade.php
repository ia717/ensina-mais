<x-app-layout class="flex">

    <div class="flex flex-col lg:flex-row">
        
        <!-- Container principal para o conteúdo da redação -->
        <div class="w-full lg:w-3/4 max-w-4xl mb-8 lg:mb-0 mx-auto lg:ml-4">
            <!-- Botões acima do container de escrever -->
            <div class="flex justify-between mb-4">
                <a href="redacao" class="text-gray-600 hover:text-blue-600 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-.707-10.707a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L8 10.414V15a1 1 0 102 0v-4.586l2.293 2.293a1 1 0 001.414-1.414l-3-3z" clip-rule="evenodd" />
                    </svg>
                    <span>Voltar</span>
                </a>
                <div class="flex space-x-2">
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 12a1 1 0 011-1h4a1 1 0 110 2H9a1 1 0 01-1-1z" />
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.5-10V7a1 1 0 10-2 0v1a1 1 0 102 0zm-2 4h2a1 1 0 110 2h-2a1 1 0 110-2z" clip-rule="evenodd" />
                        </svg>
                        <span>Salvar rascunho</span>
                    </button>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 12a1 1 0 011-1h4a1 1 0 110 2H9a1 1 0 01-1-1z" />
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.5-10V7a1 1 0 10-2 0v1a1 1 0 102 0zm-2 4h2a1 1 0 110 2h-2a1 1 0 110-2z" clip-rule="evenodd" />
                        </svg>
                        <span>Aplicar correção</span>
                    </button>
                </div>
            </div>

            <!-- Redação Section -->
            <div class="bg-white shadow-lg rounded-lg p-8">
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <input type="text" placeholder="A violência virtual e o desafio de garantir uma internet segura no Brasil" class="w-full bg-gray-100 p-4 mb-4 border border-gray-300 rounded text-gray-700">
                    <textarea rows="10" placeholder="Escreva aqui a sua redação..." class="w-full bg-gray-100 p-4 border border-gray-300 rounded text-gray-700"></textarea>
                </div>
            </div>
        </div>

        <!-- Sidebar com Competências -->
        <aside class="w-full lg:w-1/4 lg:ml-8 bg-white shadow-lg p-6 rounded-lg">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-700">Correção</h2>
                <div class="text-4xl font-bold text-blue-600">960</div>
                <div class="text-sm text-gray-500">960/1.000</div>
                <div class="relative mt-2 h-2 w-full bg-gray-200">
                    <div class="absolute top-0 h-2 bg-blue-600" style="width: 96%;"></div>
                </div>
            </div>
          
            <div class="space-y-4">
                <!-- Competências com botões laterais -->
                <div class="flex justify-between items-center">
                    <button onclick="toggleContent('content1')" class="w-full bg-gray-100 text-left p-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 flex justify-between">
                        <span class="text-lg font-semibold text-gray-700">Competência I</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 010 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div id="content1" class="hidden mt-2 p-4 bg-white rounded-lg shadow">
                    <p class="text-gray-700">Demonstrar domínio da modalidade escrita formal da língua portuguesa.</p>
                </div>

                <div class="flex justify-between items-center">
                    <button onclick="toggleContent('content2')" class="w-full bg-gray-100 text-left p-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 flex justify-between">
                        <span class="text-lg font-semibold text-gray-700">Competência II</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 010 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div id="content2" class="hidden mt-2 p-4 bg-white rounded-lg shadow">
                    <p class="text-gray-700">Detalhes da Competência II.</p>
                </div>

                <div class="flex justify-between items-center">
                    <button onclick="toggleContent('content3')" class="w-full bg-gray-100 text-left p-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 flex justify-between">
                        <span class="text-lg font-semibold text-gray-700">Competência III</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 010 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div id="content3" class="hidden mt-2 p-4 bg-white rounded-lg shadow">
                    <p class="text-gray-700">Detalhes da Competência III.</p>
                </div>
            </div>
        </aside>

    </div>

    <script>
        function toggleContent(contentId) {
            var content = document.getElementById(contentId);
            content.classList.toggle("hidden");
        }
    </script>
</x-app-layout>
