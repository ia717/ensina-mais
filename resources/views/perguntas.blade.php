<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas Frequentes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl w-full">
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-500">Perguntas Frequentes</h2>
        <div class="relative mb-6 text-center">
            <select class="block w-1/3 mx-auto bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded-full shadow leading-tight focus:outline-none focus:shadow-outline">
                <option>Selecione sua dúvida</option>
                <!-- Options could be populated here -->
                 
                
            </select>
            
        </div>
        
        <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6">
            <!-- FAQ Container -->
            <div class="bg-gray-50 rounded-lg p-6 md:w-1/2">
                <!-- Question 1 -->
                <div class="border-b border-gray-200 py-3">
                    <button class="w-full text-left flex justify-between items-center focus:outline-none" onclick="toggleAnswer('answer1')">
                        O que fazer se o site estiver fora do ar ou lento?
                        <span>▼</span>
                    </button>
                    <div id="answer1" class="hidden mt-2 text-gray-600">
                        Se o site estiver fora do ar ou lento, verifique sua conexão com a internet e tente novamente mais tarde.
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="border-b border-gray-200 py-3">
                    <button class="w-full text-left flex justify-between items-center focus:outline-none" onclick="toggleAnswer('answer2')">
                        Posso personalizar meu plano de estudos no site?
                        <span>▼</span>
                    </button>
                    <div id="answer2" class="hidden mt-2 text-gray-600">
                        Sim, o site permite a personalização do seu plano de estudos de acordo com suas necessidades.
                    </div>
                </div>
                <!-- Question 3 -->
                <div class="border-b border-gray-200 py-3">
                    <button class="w-full text-left flex justify-between items-center focus:outline-none" onclick="toggleAnswer('answer3')">
                        O site oferece conteúdo para todos os níveis de aprendizado?
                        <span>▼</span>
                    </button>
                    <div id="answer3" class="hidden mt-2 text-gray-600">
                        Sim, o site oferece conteúdos que abrangem desde o nível iniciante até o avançado.
                    </div>
                </div>
                <!-- Question 4 -->
                <div class="border-b border-gray-200 py-3">
                    <button class="w-full text-left flex justify-between items-center focus:outline-none" onclick="toggleAnswer('answer4')">
                        O site prepara para exames internacionais?
                        <span>▼</span>
                    </button>
                    <div id="answer4" class="hidden mt-2 text-gray-600">
                        Sim, oferecemos cursos específicos para preparação de exames internacionais como TOEFL, IELTS, etc.
                    </div>
                </div>
                <!-- Question 5 -->
                <div class="border-b border-gray-200 py-3">
                    <button class="w-full text-left flex justify-between items-center focus:outline-none" onclick="toggleAnswer('answer5')">
                        Posso estimar o tempo do meu aprendizado?
                        <span>▼</span>
                    </button>
                    <div id="answer5" class="hidden mt-2 text-gray-600">
                        Sim, com base no seu ritmo de estudo e no plano escolhido, é possível estimar o tempo necessário.
                    </div>
                </div>
            </div>
            <!-- Contact Form Container -->
            <div class="bg-gray-50 rounded-lg p-6 md:w-1/2">
                <h3 class="text-lg font-semibold mb-4 text-blue-500">Fale Conosco</h3>
                <form>
                    <input type="text" placeholder="Seu Nome" class="block w-full mb-3 px-4 py-2 border border-gray-300 rounded-full" />
                    <input type="email" placeholder="Seu Email" class="block w-full mb-3 px-4 py-2 border border-gray-300 rounded-full" />
                    <textarea placeholder="Digite aqui..." class="block w-full mb-3 px-4 py-2 border border-gray-300 rounded-full"></textarea>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full w-full">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleAnswer(id) {
            var answer = document.getElementById(id);
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
            } else {
                answer.classList.add('hidden');
            }
        }
        
    </script>
</body>
</html>

