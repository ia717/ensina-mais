<x-app-layout> 

    <div class="flex-1 flex justify-center items-center">
        <div class="text-center w-full p-8 md:p-0 md:w-auto">
            <div class="text-gray-500 text-lg mb-5">Utilize os filtros para buscar temas de redação</div>
            <spanw-full="material-icons text-gray-400 text-5xl"></span>
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
    
    <aside class="right-0 top-0 fixed">
    @include('filtroredacao')
    </aside>
    


</x-app-layout>