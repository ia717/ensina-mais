<x-app-layout>
    <div class="flex flex-col md:flex-row justify-between">

        <!-- Coluna de Temas -->
        <div class="w-full md:w-3/4 space-y-6 md:mr-10"> <!-- Adicionei md:mr-10 aqui -->
            <!-- tema 1 -->
            <div class="bg-gray-100 p-4 rounded-lg dark:bg-gray-900">
                <p class="text-lg font-semibold text-center mb-4">
                    Desafios para o enfrentamento da invisibilidade do trabalho de cuidado realizado pela mulher no
                    Brasil - ENEM 2023
                </p>
                <div class="flex justify-between">
                    <button
                        class="bg-blue-400 hover:bg-teal-500 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Trabalho
                    </button>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Ver Tema
                    </button>
                </div>
            </div>

            <!-- tema 2 -->
            <div class="bg-gray-100 p-4 rounded-lg dark:bg-gray-900">
                <p class="text-lg font-semibold text-center mb-4">
                    O estigma associado às doenças mentais na sociedade brasileira - ENEM 2020
                </p>
                <div class="flex justify-between">
                    <button
                        class="bg-blue-400 hover:bg-teal-500 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Trabalho
                    </button>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Ver Tema
                    </button>
                </div>
            </div>

            <!-- tema 3 -->
            <div class="bg-gray-100 p-4 rounded-lg dark:bg-gray-900">
                <p class="text-lg font-semibold text-center mb-4">
                    Desafios para a valorização de comunidades e povos tradicionais no Brasil - ENEM 2022
                </p>
                <div class="flex justify-between">
                    <button
                        class="bg-blue-400 hover:bg-teal-500 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Trabalho
                    </button>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Ver Tema
                    </button>
                </div>
            </div>

            <!-- tema 4 -->
            <div class="bg-gray-100 p-4 rounded-lg dark:bg-gray-900">
                <p class="text-lg font-semibold text-center mb-4">
                    Democratização do acesso ao cinema no Brasil - ENEM 2019
                </p>
                <div class="flex justify-between">
                    <button
                        class="bg-blue-400 hover:bg-teal-500 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Trabalho
                    </button>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Ver Tema
                    </button>
                </div>
            </div>

            <!-- tema 5 -->
            <div class="bg-gray-100 p-4 rounded-lg dark:bg-gray-900">
                <p class="text-lg font-semibold text-center mb-4">
                    Saúde mental e o impacto das redes sociais em jovens brasileiros - ENEM 2015
                </p>
                <div class="flex justify-between">
                    <button
                        class="bg-blue-400 hover:bg-teal-500 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Trabalho
                    </button>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Ver Tema
                    </button>
                </div>
            </div>

            <!-- tema 6 -->
            <div class="bg-gray-100 p-4 rounded-lg dark:bg-gray-900">
                <p class="text-lg font-semibold text-center mb-4">
                    O aumento da busca de procedimentos estéticos dentro da sociedade brasileira - ENEM 2014
                </p>
                <div class="flex justify-between">
                    <button
                        class="bg-blue-400 hover:bg-teal-500 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Trabalho
                    </button>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Ver Tema
                    </button>
                </div>
            </div>
        </div>

        <!-- Barra Lateral de Filtro -->
        <div class="w-full md:w-1/4 p-6 bg-slate-50 rounded-lg shadow mt-6 md:mt-0 dark:bg-gray-900">
            <h2 class="text-lg font-semibold mb-4">Filtrar dúvidas</h2>

            <div class="space-y-4">
                <!-- Seleção de Disciplina no Filtro -->
                <select id="filter-discipline"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500 dark:bg-gray-900"
                    onchange="updateFilterTopics(this.value)">
                    <option value="">Selecione uma disciplina</option>
                </select>

                <!-- Seleção de Tópico no Filtro -->
                <select id="filter-topic" name="topic_id"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500 dark:bg-gray-900">
                    <option value="">Selecione um tópico</option>
                </select>

                <button type="submit"
                    class="bg-sky-800 text-white p-2 w-full rounded hover:bg-blue-500 transition duration-200">
                    Filtrar
                </button>
            </div>
        </div>
    </main>

    <!-- Filter panel -->
    <div class="w-full md:w-60 bg-white h-auto md:h-screen shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-700 mb-6">Filtrar temas</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="palavras-chave">Palavras chave</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="palavras-chave" type="text" placeholder="Buscar por palavras chave">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="vestibular">Vestibular</label>
                
            </div>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="vestibular">
                    @foreach ($vestibulares as $vestibular)
                    $vestibular->name
                    @endforeach
                </select>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="modelo">Modelo</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="modelo">
                    <option>ENEM</option>
                    <option>Estadual</option>
                    <option>Geral</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="area">Área</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="area">
                    <option>Todas</option>
                    <option>Racismo</option>
                    <option>Economia</option>
                    <option>Machismo</option>
                </select>
            </div>

            <button class="bg-sky-800 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-all duration-100 w-full md:w-auto" type="button">
                Filtrar
            </button>
        </form>
    </div>
</x-app-layout>
