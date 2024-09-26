<x-app-layout> 


    <!-- Main content -->
    <main class="flex-1 flex justify-around items-center">
        <div class="text-center w-full p-8 md:p-0 md:w-auto">
            <div class="text-gray-500 text-lg mb-5">Utilize os filtros para buscar simulados</div>
            <span class="material-icons text-gray-400 text-5xl"></span>
        </div>
    </main>

    <!-- Filter panel -->
    <div class="w-full md:w-60 bg-white h-auto md:h-screen shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-700 mb-6">Filtrar simulados</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Disciplina">Disciplina</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="palavras-chave" type="text" placeholder="Buscar por disciplinas">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Tipo">Tipo</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="vestibular">
                    <option>Todas</option>
                    <option>ENEM(2012-2021)</option>
                    <option>Unesp(2012-2021)</option>
                    <option>FUVEST(2012-2021)</option>
                    <option>Outros</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Universidade">Universidade</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="modelo">
                    <option>Todas</option>
                    <option>ENEM</option>
                    <option>USP</option>
                    <option>Unesp</option>
                    <option>UFSCAR</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Banca">Banca</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="area">
                    <option>Todas</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                </select>
            </div>

            <button class="bg-sky-800 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-all duration-100 w-full md:w-auto" type="button">
                Filtrar
            </button>
        </form>
    </div>
    </div>
</x-app-layout> 