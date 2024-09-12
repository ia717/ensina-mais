@include('menuteste')
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Dúvidas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-100 flex ml-0">
    <div class="flex ">

        <!-- Conteúdo do Fórum -->
        <div id="barra" class="ml-[245px] flex-1 p-8 overflow-y-auto transition-all duration-300 ease-in-out">
            <h1 class="text-3xl font-semibold">Fórum de Dúvidas</h1>

          <!-- Pergunta e Resposta 1 -->
<div class="bg-white p-4 rounded-lg shadow mb-4 relative">
    <div class="flex justify-between items-start mb-4">
        <div>
            <h2 class="text-lg font-semibold">Rogério Bilha</h2>
            <span class="text-sm text-gray-600">Aluno</span>
        </div>
        <div class="flex font-bold space-x-2">
            <span class="bg-sky-800 text-white px-2 py-1 rounded text-xs">Aluno</span>
            <span class="bg-pink-500 text-white px-2 py-1 rounded text-xs">Gramática</span>
        </div>
    </div>
    
    <p class="mb-4">Professora, eu tenho uma dúvida sobre o uso da crase. Quando eu devo usar?</p>
    <div class="relative">
    <button class="toggle-button bottom-4 right-4 text-black px-4 py-2 bg-gray-200 rounded">Respostas</button>
        <div class="resposta border-t text-gray-600 hidden mt-12 text-xs">
            <h3 class="text-sm font-semibold mt-8">Tatiana Lozano</h3>
            <span class="text-xs text-gray-600">Professor</span>
            <div class="flex font-bold space-x-2 mt-2">
                <span class="bg-sky-800 text-white px-2 py-1 rounded text-xs">Professor</span>
                <span class="bg-pink-500 text-white px-2 py-1 rounded text-xs">Gramática</span>
            </div>
            <p class="mt-2">A crase é utilizada para indicar a fusão de duas vogais idênticas. Geralmente a preposição "a" com o artigo definido "a" ou "as". Você deve usar a crase quando houver essa fusão.</p>
        </div>
    </div>
</div>



<!-- Pergunta e Resposta 2 -->
<div class="bg-white p-4 rounded-lg shadow mb-4 relative">
    <div class="flex justify-between items-start mb-4">
        <div>
            <h2 class="text-lg font-semibold">Lucas Fernandes</h2>
            <span class="text-sm text-gray-600">Aluno</span>
        </div>
        <div class="font-bold text-black flex space-x-2">
            <span class="bg-sky-800 text-white px-2 py-1 rounded text-xs">Aluno</span>
            <span class="bg-orange-500  px-2 py-1 rounded text-xs">Matemática</span>
            <span class="bg-orange-500 px-2 py-1 rounded text-xs">Matemática básica</span>
        </div>
    </div>
    <p class="mb-4">Professor, tenho uma dúvida sobre como resolver sistemas lineares. Pode me explicar o método da substituição?</p>
    <div class="relative">
        <button class="toggle-button bottom-4 right-4 text-black px-4 py-2 bg-gray-200 rounded">Respostas</button>
        <div class="resposta border-t text-gray-600 hidden mt-12 text-xs">
            <h3 class="text-sm font-semibold mt-8">Giseli Barbosa</h3>
            <span class="text-xs text-gray-600">Professora</span>
            <div class="flex font-bold space-x-2 mt-2">
                <span class="bg-sky-800 text-white px-2 py-1 rounded text-xs">Professora</span>
                <span class="bg-orange-500 text-black px-2 py-1 rounded text-xs">Matemática</span>
            </div>
            <p class="mt-2">Para resolver um sistema linear pelo método da substituição, siga estes passos: 
                1. Resolva uma das equações para uma das variáveis.
                2. Substitua essa expressão na outra equação.
                3. Resolva a nova equação para encontrar o valor da outra variável.
                4. Substitua o valor encontrado na expressão inicial para encontrar o valor da primeira variável.
            </p>
        </div>
    </div>
</div>

            <!-- Pergunta e Resposta 3 -->
            <div class="bg-white p-4 rounded-lg shadow mb-4 relative">
    <div class="flex justify-between items-start mb-4">
        <div>
            <h2 class="text-lg font-semibold">Ana Souza</h2>
            <span class="text-sm text-gray-600">Aluno</span>
        </div>
        <div class="font-bold flex space-x-2">
        <span class="bg-sky-800 text-white px-2 py-1 rounded text-xs">Aluno</span>
            <span class="bg-yellow-400 text-black font-bold px-2 py-1 rounded text-xs">História</span>
            <span class="bg-yellow-400 text-black font-bold px-2 py-1 rounded text-xs">História Antiga</span>
        </div>
    </div>
    <p class="mb-4">Professor, estou com uma dúvida sobre as principais características da civilização egípcia. Pode me ajudar?</p>
    <div class="relative">
        <button class="toggle-button bottom-4 right-4 text-black px-4 py-2 bg-gray-200 rounded">Respostas</button>
        <div class="resposta border-t text-gray-600 hidden mt-12 text-xs">
            <h3 class="text-sm font-semibold mt-8">Carlos Almeida</h3>
            <span class="text-xs text-gray-600">Professor</span>
            <div class="flex space-x-2 mt-2">
                <span class="bg-sky-800 text-white font-bold px-2 py-1 rounded text-xs">Professor</span>
                <span class="bg-yellow-500 text-black font-bold px-2 py-1 rounded text-xs">História</span>
            </div>
            <p class="mt-2">A civilização egípcia é conhecida por suas pirâmides monumentais, suas inovações na escrita com hieróglifos, e suas práticas de mumificação. Também tiveram um sistema político centralizado e uma forte ênfase na religião e na vida após a morte.</p>
        </div>
    </div>
</div>

            <!-- Caixa de Texto para Nova Pergunta -->
            <div class="bg-white p-4 rounded-lg shadow flex flex-col">
                <textarea placeholder="Escreva aqui sua dúvida..." class="w-full p-2 border border-gray-300 rounded mb-4"></textarea>
                <div class="flex space-x-2 mb-4">
                    <select class="w-full p-2 border border-gray-300 rounded">
                        <option>Selecione uma disciplina</option>
                        <option>Gramática</option>
                        <option>Matemática</option>
                        <option>Geografia</option>
                        <option>História</option>
                        <option>Filosofia</option>
                        <option>Sociologia</option>
                        <option>Química</option>
                        <option>Física</option>
                        <option>Biologia</option>
                        <option>Artes</option>
                        <option>Inglês</option>
                        
                    </select>
                    <select class="w-full p-2 border border-gray-300 rounded">
                        <option>Assunto primário</option>
                    </select>
                  
                    <select class="w-full p-2 border border-gray-300 rounded">
                        <option>Assunto secundário</option>
                    </select>
                </div>
                <button class="bg-sky-800 text-white p-2 rounded hover:bg-blue-500">Enviar dúvida</button>
            </div>
        </div>

        <!-- Barra Lateral de Filtro -->
        <div class="w-1/5 p-6 bg-gray-200">
            <h2 class="text-lg font-semibold mb-4">Filtrar dúvidas</h2>
            <div class="space-y-4">
                <select class="w-full p-2 border border-gray-300 rounded">
                    <option>Selecione uma disciplina</option>
                    <option>Gramática</option>
                        <option>Matemática</option>
                        <option>Geografia</option>
                        <option>História</option>
                        <option>Filosofia</option>
                        <option>Sociologia</option>
                        <option>Química</option>
                        <option>Física</option>
                        <option>Biologia</option>
                        <option>Artes</option>
                        <option>Inglês</option>
                </select>
                <select class="w-full p-2 border border-gray-300 rounded">
                    <option>Professor</option>
                    <option>Giseli</option>
                    <option>Tatiana</option>
                    <option>Elisangela</option>
                    <option>Rafael Rato</option>
                </select>
                <select class="w-full p-2 border border-gray-300 rounded">
                    <option>Assunto primário</option>
                    <option>Mecânica</option>
                    <option>Termodinâmica</option>
                    <option>Óptica</option>
                    <option>Eletromagnetismo</option>
                    <option>Ondas e Vibrações</option>
                </select>
                <select class="w-full p-2 border border-gray-300 rounded">
                    <option>Assunto secundário</option>
                </select>
                <button class="bg-sky-800 text-white p-2 w-full rounded hover:bg-blue-500">Filtrar</button>
            </div>
        </div>
    </div>
</body>
<script>
    document.querySelectorAll('.toggle-button').forEach((button) => {
        button.addEventListener('click', function() {
            const resposta = this.nextElementSibling;
            resposta.classList.toggle('hidden');
            this.textContent = resposta.classList.contains('hidden') ? 'Respostas' : 'Ocultar Resposta';
        });
    });
</script>

</html>