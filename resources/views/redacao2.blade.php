<x-app-layout>

    <div class="relative flex flex-1 items-center justify-center p-8">
        <!-- Botões laterais (lado direito empilhados verticalmente) -->
        <div class="absolute right-0 top-0 mt-8 flex flex-col space-y-4">
            <button id="openSidebar1" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 rounded"><img src="{{ asset('/imagens/book-01.png') }}" alt=""></button>
            <button id="openSidebar2" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded"><img src="{{ asset('/imagens/file-question-02.png') }}" alt=""></button>
            <button id="openSidebar3" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded"><img src="{{ asset('/imagens/server-02.png') }}" alt=""></button>
        </div>

        <!-- Container Principal -->
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-4xl">
            <div class="flex justify-between items-center mb-6">
                <a href="redacao" class="text-gray-600 hover:text-blue-600">Voltar</a>
                <div class="space-x-4">
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded">Salvar rascunho</button>
                    <button class="bg-blue-700 hover:bg-blue-800 text-white px-4 py-2 rounded">Aplicar correção</button>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-4">
                <input type="text" placeholder="Digite o título aqui" class="w-full bg-gray-100 p-4 mb-4 border border-gray-300 rounded text-gray-700">
                <textarea rows="10" placeholder="Escreva aqui a sua redação..." class="w-full bg-gray-100 p-4 border border-gray-300 rounded text-gray-700"></textarea>
            </div>
        </div>

        <!-- Sidebars -->
        <div id="sidebar1" class="hidden fixed right-0 top-0 bg-white shadow-lg p-4 w-64 h-full z-10">
    <div class="flex justify-between items-center">
        <h2 class="text-lg font-semibold mb-4">Estrutura</h2>
        <button id="closeSidebar1" class="bg-red-900 hover:bg-red-600 text-white px-2 py-1 rounded">X</button>
    </div>

    <!-- Introdução -->
    <h3 class="font-semibold mb-2">Introdução</h3>
    <div class="space-y-2 mb-4">
        <button class="bg-blue-200 text-blue-800 px-4 py-2 rounded">Alusão</button>
        <button class="bg-blue-200 text-blue-800 px-4 py-2 rounded">Conectivo</button>
        <button class="bg-blue-200 text-blue-800 px-4 py-2 rounded">Contextualização</button>
        <button class="bg-blue-200 text-blue-800 px-4 py-2 rounded">Tese</button>
    </div>

    <!-- Desenvolvimento -->
    <h3 class="font-semibold mb-2">Desenvolvimento</h3>
    <div class="space-y-2 mb-4">
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Conectivo</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Tóp. Frasal</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Repertório</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Legitimidade</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Finalização</button>
    </div>

    <!-- Finalização -->
    <h3 class="font-semibold mb-2">Finalização</h3>
    <div class="space-y-2">
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Conectivo</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Tese</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Agente</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Ação</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Meio/Modo</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Finalidade</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">Retomada</button>
    </div>
</div>


        <div id="sidebar2" class="hidden fixed right-0 top-0 bg-white shadow-lg p-4 w-64 h-full z-10">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold mb-4">Conteúdo Sidebar 2</h2>
                <button id="closeSidebar2" class="bg-red-900 hover:bg-red-600 text-white px-2 py-1 rounded">X</button>
            </div>
            <p>Este é o conteúdo da Sidebar 2.</p>
        </div>

        <div id="sidebar3" class="hidden fixed right-0 top-0 bg-white shadow-lg p-4 w-64 h-full z-10">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold mb-4">Conteúdo Sidebar 3</h2>
                <button id="closeSidebar3" class="bg-red-900 hover:bg-red-600 text-white px-2 py-1 rounded">X</button>
            </div>
            <p>Este é o conteúdo da Sidebar 3.</p>
        </div>
    </div>

    <!-- Scripts para abrir e fechar as sidebars -->
    <script>
        // Sidebar 1
        document.getElementById('openSidebar1').addEventListener('click', function() {
            document.getElementById('sidebar1').classList.remove('hidden');
        });
        document.getElementById('closeSidebar1').addEventListener('click', function() {
            document.getElementById('sidebar1').classList.add('hidden');
        });

        // Sidebar 2
        document.getElementById('openSidebar2').addEventListener('click', function() {
            document.getElementById('sidebar2').classList.remove('hidden');
        });
        document.getElementById('closeSidebar2').addEventListener('click', function() {
            document.getElementById('sidebar2').classList.add('hidden');
        });

        // Sidebar 3
        document.getElementById('openSidebar3').addEventListener('click', function() {
            document.getElementById('sidebar3').classList.remove('hidden');
        });
        document.getElementById('closeSidebar3').addEventListener('click', function() {
            document.getElementById('sidebar3').classList.add('hidden');
        });
    </script>

</x-app-layout>
