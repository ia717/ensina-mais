<x-app-layout> 


    <!-- Main content -->
    <main class="flex-1 flex justify-around items-center">
        <div class="text-center w-full p-8 md:p-0 md:w-auto">
            <div class="text-gray-500 text-lg mb-5">Utilize os filtros para buscar simulados</div>
            <span class="material-icons text-gray-400 text-5xl"></span>
        </div>
    </main>

    <aside class="right-0 top-0 fixed">
    @include('filtrosimulados')
    </aside>
    
    
    </div>
</x-app-layout> 