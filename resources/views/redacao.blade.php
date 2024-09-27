<x-app-layout> 

    <div class="flex-1 flex justify-center items-center">
        <div class="text-center w-full p-8 md:p-0 md:w-auto">
            <div class="text-gray-500 text-lg mb-5">Utilize os filtros para buscar temas de redação</div>
            <spanw-full="material-icons text-gray-400 text-5xl"></span>
        </div>
    </div>
    
    <aside class="right-0 top-0 fixed">
    @include('filtroredacao')
    </aside>
    


</x-app-layout>