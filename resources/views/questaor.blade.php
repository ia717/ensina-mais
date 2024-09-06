@include('menuteste')
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão e Filtro com Menu Lateral</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function verificarResposta() {
            const respostaCorreta = document.getElementById('resposta-correta');
            const explicacao = document.getElementById('explicacao');
            const mensagemExplicacao = document.getElementById('mensagem-explicacao');
            const percentualAcerto = 75; 
            const nivelDificuldade = 'Médio'; 
            // nível de dificuldade da questão
            
            // Verifica se a resposta correta está marcada
            if (respostaCorreta.checked) {
                mensagemExplicacao.innerHTML = `
                    <strong class='font-bold'>Correto!</strong> 
                    <span class='block sm:inline'>
                        Se há 304 pessoas e 19 fileiras, podemos dividir 304 por 19 para encontrar o número de cadeiras por fileira: 304 ÷ 19 = 16 cadeiras por fileira.
                    </span>
                    <div class='mt-4'>
                        <p><strong>Percentual de Acertos:</strong> ${percentualAcerto}%</p>
                        <p><strong>Nível de Dificuldade:</strong> ${nivelDificuldade}</p>
                    </div>`;
                explicacao.classList.remove('bg-red-100', 'border-red-400', 'text-red-700');
                explicacao.classList.add('bg-green-100', 'border-green-400', 'text-green-700');
            } else {
                mensagemExplicacao.innerHTML = `
                    <strong class='font-bold'>Incorreto!</strong> 
                    <span class='block sm:inline'>
                        Tente novamente. A resposta correta é 16 cadeiras por fileira. Divida 304 por 19 para obter esse valor.
                    </span>
                    <div class='mt-4'>
                        <p><strong>Percentual de Acertos:</strong> ${percentualAcerto}%</p>
                        <p><strong>Nível de Dificuldade:</strong> ${nivelDificuldade}</p>
                    </div>`;
                explicacao.classList.remove('bg-green-100', 'border-green-400', 'text-green-700');
                explicacao.classList.add('bg-red-100', 'border-red-400', 'text-red-700');
            }

            // Mostra a explicação
            explicacao.classList.remove('hidden');
        }
    </script>
</head>

<body class="bg-gray-100 flex h-screen overflow-hidden">

    <!-- Contêiner principal flexível -->
    <div class="flex w-full h-full p-6 space-x-6">
        
        <!-- Caixa de Questões no centro -->
        <div class="flex-1 flex justify-center">
            <div class="question-container w-full lg:w-2/3 bg-white p-8 rounded-lg shadow-lg transition duration-300 hover:shadow-xl">
                <h1 class="text-2xl font-semibold text-gray-800 mb-4">Questão</h1>
                <p class="text-lg text-gray-600 mb-6">1- Em um projeto para a construção de um cinema, os arquitetos estão avaliando a relação entre a quantidade de fileiras e a quantidade de cadeiras em cada fileira.</p>
                <p class="text-md text-gray-500 mb-6">O projeto inicial prevê uma sala para 304 pessoas. No caso de utilizarem 19 fileiras, o número de cadeiras por fileira será?</p>
                <ul class="space-y-3 mb-6">
                    <li>
                        <label class="flex items-center">
                            <input type="radio" name="options1" class="mr-2">
                            <span class="text-gray-700">14</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center">
                            <input type="radio" name="options1" id="resposta-correta" class="mr-2">
                            <span class="text-gray-700">16</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center">
                            <input type="radio" name="options1" class="mr-2">
                            <span class="text-gray-700">15</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center">
                            <input type="radio" name="options1" class="mr-2">
                            <span class="text-gray-700">13</span>
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center">
                            <input type="radio" name="options1" class="mr-2">
                            <span class="text-gray-700">12</span>
                        </label>
                    </li>
                </ul>
                <button class="bg-green-500 text-white py-3 px-6 rounded-lg w-full transition duration-300 hover:bg-green-600" onclick="verificarResposta()">Responder</button>
                
                <!-- Caixa de Explicação, inicialmente oculta -->
                <div id="explicacao" class="hidden mt-6 px-4 py-3 rounded relative">
                    <span id="mensagem-explicacao"></span>
                </div>
            </div>
        </div>

    </div>

</body>

</html>


