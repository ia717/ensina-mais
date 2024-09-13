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
        <div class="space-y-2 mb-6">
            <div class="flex justify-between items-center">
                <span class="text-gray-600">Quantidade de palavras</span>
                <span class="text-gray-800">0</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-gray-600">Quantidade de linhas</span>
                <span class="text-gray-800">0</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-gray-600">Quantidade de parágrafos</span>
                <span class="text-gray-800">0</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-gray-600">Tempo de prova</span>
                <span class="text-gray-800">00:00</span>
            </div>
        </div>

        <div class="text-gray-700">
            <h2 class="font-bold text-xl mb-4">Textos motivadores</h2>
            <h3 class="font-bold text-lg">Texto I</h3>
            <p class="text-sm mb-4">Violência virtual é a prática de violência através do uso de dispositivos tecnológicos... (texto completo)</p>

            <h3 class="font-bold text-lg">Texto II</h3>
            <p class="text-sm">O fato de que na rede social não se pode fugir da agressão... (texto completo)</p>
        </div>
    </aside>

</body>

</html>