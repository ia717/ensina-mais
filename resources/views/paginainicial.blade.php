<x-app-layout>
        <!-- Conteúdo principal -->
        <div id="main-content" class="main-content">
        <!-- Seção de Banner -->
        <div class="bg-teal-500 text-white p-6 rounded-lg shadow-lg mb-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-2/3">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">A PREPARAÇÃO QUE VOCÊ PRECISA PARA GABARITAR</h1>
                    <span class="bg-orange-500 text-white py-2 px-4 rounded-full inline-block mb-4">NOTA 1000</span>
                    <ul class="text-lg list-disc pl-6">
                        <li>Vídeo aulas online</li>
                        <li>Correção de redações</li>
                        <li>Dicas e mentorias</li>
                        <li>Aulas e correções ao vivo</li>
                        <li>Mais de 1000 questões</li>
                        <li>Simulados semanais</li>
                    </ul>
                </div>
                <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                    <img src="https://via.placeholder.com/300" alt="Livros" class="w-64 h-64">
                </div>
            </div>
        </div>

        <!-- Seção de Progresso -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso diário</h2>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                    <div class="bg-teal-500 h-4 rounded-full" style="width: 10%;"></div>
                </div>
                <p class="text-teal-500 text-lg font-semibold">10%</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso mensal</h2>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                    <div class="bg-teal-500 h-4 rounded-full" style="width: 25%;"></div>
                </div>
                <p class="text-teal-500 text-lg font-semibold">25%</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">Progresso anual</h2>
                <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-4 mb-4">
                    <div class="bg-teal-500 h-4 rounded-full" style="width: 45%;"></div>
                </div>
                <p class="text-teal-500 text-lg font-semibold">45%</p>
            </div>
        </div>
    </div>
</x-app-layout>