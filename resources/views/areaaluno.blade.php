<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Aluno</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div>
        @include('menuteste')
    </div>
    <main class="max-w-4xl mx-auto p-4 sm:p-6 md:p-8">
        <div class="bg-white rounded-lg shadow-md p-6 sm:p-8 mb-8">
            <div class="text-start mb-6">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-semibold">Área do Aluno</h1>
            </div>
            <h2 class="flex justify-center items-center text-xl sm:text-2xl font-bold m-8 sm:m-12">Informações básicas</h2>
            <div class="flex flex-col md:flex-row flex-wrap items-center">
                <div class="text-center mb-4 md:mb-0">
                    <div class="w-20 h-20 sm:w-24 sm:h-24 bg-gray-300 rounded-full m-4"></div>
                    <button class="text-blue-500">Editar perfil</button>
                </div>
                <div class="flex-1 space-y-1 md:ml-4">
                    <p class="text-gray-500 text-sm">Nome:</p>
                    <p>Fulano da Silva</p>
                    <p class="text-gray-500 text-sm">Idade:</p>
                    <p>17 anos</p>
                </div>
                <div class="flex-1 space-y-1 mt-4 md:mt-0 md:ml-8">
                    <p class="text-gray-500 text-sm">Escola:</p>
                    <p>CE SESI 227 - Monte Alto, SP</p>
                    <p class="text-gray-500 text-sm">Email:</p>
                    <p>fulano.silva@portalsesiSP.org.br</p>
                </div>
            </div>

            <h2 class="flex justify-center items-center text-xl sm:text-2xl font-bold m-8 sm:m-12">Seu Progresso</h2>

            <!-- Progresso Diário -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-gray-700 font-bold text-lg">Progresso diário</p>
                    <p class="text-gray-500">10%</p>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 10%;"></div>
                </div>

                <div class="flex flex-col md:flex-row justify-between text-gray-600 text-sm flex-wrap">
                    <div class="flex-1 mb-2 md:mb-0">
                        <p><strong>Matérias restantes:</strong> Arte, História, Física</p>
                    </div>
                    <div class="flex-1 mb-2 md:mb-0">
                        <p><strong>Matérias estudadas:</strong> Matemática</p>
                    </div>
                    <div class="flex-1">
                        <p><strong>Questões feitas:</strong> 5/20</p>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="#" class="text-gray-600 font-medium hover:underline">Ver cronograma →</a>
                </div>
            </div>

            <!-- Progresso Mensal -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-gray-700 font-bold text-lg">Progresso mensal</p>
                    <p class="text-gray-500">25%</p>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 25%;"></div>
                </div>
                <div class="flex flex-col md:flex-row justify-between text-gray-600 text-sm flex-wrap">
                    <div class="flex-1 mb-2 md:mb-0">
                        <p><strong>Redações feitas:</strong> 2/4</p>
                    </div>
                    <div class="flex-1 mb-2 md:mb-0">
                        <p><strong>Horas de estudo:</strong> 25 horas</p>
                    </div>
                    <div class="flex-1">
                        <p><strong>Questões feitas:</strong> 38/150</p>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="#" class="text-gray-600 font-medium hover:underline">Ver cronograma →</a>
                </div>
            </div>

            <!-- Progresso Anual -->
            <div>
                <div class="flex justify-between items-center mb-2">
                    <p class="text-gray-700 font-bold text-lg">Progresso anual</p>
                    <p class="text-gray-500">55%</p>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 55%;"></div>
                </div>
                <div class="flex flex-col md:flex-row justify-between text-gray-600 text-sm flex-wrap">
                    <div class="flex-1 mb-2 md:mb-0">
                        <p><strong>Redações feitas:</strong> 31/50</p>
                    </div>
                    <div class="flex-1 mb-2 md:mb-0">
                        <p><strong>Horas de estudo:</strong> 130 horas</p>
                    </div>
                    <div class="flex-1">
                        <p><strong>Questões feitas:</strong> 210/600</p>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="#" class="text-gray-600 font-medium hover:underline">Ver cronograma →</a>
                </div>
            </div>

            <!-- Seu Conteúdo -->
            <div class="bg-white rounded-lg p-6 mb-8">
                <h2 class="flex justify-center items-center text-xl sm:text-2xl font-bold m-8 sm:m-12">Seu conteúdo</h2>
                <div class="flex flex-col md:flex-row justify-center space-x-0 md:space-x-8">
                    <!-- Box de Química -->
                    <div class="w-full max-w-xs bg-gray-50 border border-gray-700 rounded-lg p-4 text-center shadow-sm mb-8 md:mb-0">
                        <h3 class="text-xl sm:text-2xl font-medium">Sua matéria favorita é</h3>
                        <span class="text-green-500 font-medium text-2xl sm:text-3xl">Química!</span>
                        <p class="mt-4 sm:mt-8 text-left">Revise seu último conteúdo:</p>
                        <p class="text-gray-600 text-left">Moléculas e Propriedades</p>
                        <div class="mt-4 text-left text-sm">
                            <a href="#" class="text-gray-600 font-medium hover:underline">Aulas →</a>
                        </div>
                        <div class="mt-2 text-left text-sm">
                            <a href="#" class="text-gray-600 font-medium hover:underline">Questões →</a>
                        </div>
                        <p class="mt-4 text-left text-lg">Não deixe de estudar:</p>
                        <p class="text-gray-600 text-left">Separação de misturas</p>
                        <div class="mt-4 text-left text-sm">
                            <a href="#" class="text-gray-600 font-medium hover:underline">Aulas →</a>
                        </div>
                        <div class="mt-2 text-left text-sm">
                            <a href="#" class="text-gray-600 font-medium hover:underline">Questões →</a>
                        </div>
                        <div class="mt-4 text-left">
                            <p class="text-lg">Vídeo Útil</p>
                            <video autoplay muted loop playsinline src=""></video>
                        </div>
                    </div>

                    <!-- Box de Geografia -->
                    <div class="w-full max-w-xs bg-gray-50 border border-gray-700 rounded-lg p-4 text-center shadow-sm">
                        <h3 class="text-xl sm:text-2xl font-medium">Que tal um pouco de</h3>
                        <span class="text-yellow-500 font-medium text-2xl sm:text-3xl mt-4 sm:mt-8">Geografia?</span>
                        <p class="mt-4 sm:mt-8 font-medium text-left text-lg">Aprenda sobre:</p>
                        <p class="text-gray-600 text-left">Geologia e Relevo</p>
                        <div class="mt-4 text-left text-sm">
                            <a href="#" class="text-gray-600 font-medium hover:underline">Aulas →</a>
                        </div>
                        <div class="mt-2 text-left text-sm">
                            <a href="#" class="text-gray-600 font-medium hover:underline">Questões →</a>
                        </div>
                        <p class="mt-4 text-left">Não deixe de estudar:</p>
                        <p class="text-gray-600 text-left">Geopolítica</p>
                        <div class="mt-4 text-left text-sm">
                            <a href="#" class="text-gray-600 font-medium hover:underline">Aulas →</a>
                        </div>
                        <div class="mt-2 text-left text-sm">
                            <a href="#" class="text-gray-600 font-medium hover:underline">Questões →</a>
                        </div>
                        <div class="mt-4 text-left">
                            <p class="text-lg">Vídeo Útil</p>
                            <video autoplay muted loop playsinline src=""></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>