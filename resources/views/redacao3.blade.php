@include('menuteste')
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redação</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
   
       
        <div class="flex flex-1 items-center justify-center p-8 bg-gray-100">
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
        </div>
        <aside class="left-3/4 ml-32 absolute w-full h-full md:w-64 bg-white shadow-lg p-6">
        <div class="w-64 bg-white p-6 shadow-lg">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-700">Correção</h2>
                <div class="text-4xl font-bold text-blue-600">960</div>
                <div class="text-sm text-gray-500">960/1.000</div>
                <div class="relative mt-2 h-2 w-full bg-gray-200">
                    <div class="absolute top-0 h-2 bg-blue-600" style="width: 96%;"></div>
                </div>
            </div>

            <!-- Competências -->
            <div class="space-y-4">
                <!-- Competência I -->
                <div>
                    <button onclick="toggleContent('content1')" class="w-full bg-gray-100 text-left p-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <span class="text-lg font-semibold text-gray-700">Competência I</span>
                    </button>
                    <div id="content1" class="hidden mt-2 p-4 bg-white rounded-lg shadow">
                        <p class="text-gray-700">
                            Demonstrar domínio da modalidade escrita formal da língua portuguesa.
                        </p>
                        <p class="mt-2 text-gray-500 text-sm">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>

                <!-- Competência II -->
                <div>
                    <button onclick="toggleContent('content2')" class="w-full bg-gray-100 text-left p-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <span class="text-lg font-semibold text-gray-700">Competência II</span>
                    </button>
                    <div id="content2" class="hidden mt-2 p-4 bg-white rounded-lg shadow">
                        <p class="text-gray-700">
                            Detalhes da Competência II.
                        </p>
                    </div>
                </div>

                <!-- Competência III -->
                <div>
                    <button onclick="toggleContent('content3')" class="w-full bg-gray-100 text-left p-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <span class="text-lg font-semibold text-gray-700">Competência III</span>
                    </button>
                    <div id="content3" class="hidden mt-2 p-4 bg-white rounded-lg shadow">
                        <p class="text-gray-700">
                            Detalhes da Competência III.
                        </p>
                    </div>
                </div>

                <!-- Competência IV -->
                <div>
                    <button onclick="toggleContent('content4')" class="w-full bg-gray-100 text-left p-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <span class="text-lg font-semibold text-gray-700">Competência IV</span>
                    </button>
                    <div id="content4" class="hidden mt-2 p-4 bg-white rounded-lg shadow">
                        <p class="text-gray-700">
                            Detalhes da Competência IV.
                        </p>
                    </div>
                </div>

                <!-- Competência V -->
                <div>
                    <button onclick="toggleContent('content5')" class="w-full bg-gray-100 text-left p-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <span class="text-lg font-semibold text-gray-700">Competência V</span>
                    </button>
                    <div id="content5" class="hidden mt-2 p-4 bg-white rounded-lg shadow">
                        <p class="text-gray-700">
                            Detalhes da Competência V.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleContent(contentId) {
            var content = document.getElementById(contentId);
            content.classList.toggle('hidden');
        }
    </script>
        </aside>