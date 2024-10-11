<x-app-layout>

    <main class="flex-1 flex justify-around items-center">
        <div class="text-center w-full p-8 md:p-0 md:w-auto">
            <div class="text-gray-500 text-lg mb-5">Utilize os filtros para buscar cronogramas</div>
            <span class="material-icons text-gray-400 text-5xl"></span>
        </div>
    </main>

    </div>
    
    <aside class="right-0 top-0 fixed">
    @include('caixafiltros')
    </aside>
    
</x-app-layout>
