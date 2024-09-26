<x-app-layout> 

    <div class="flex-1 flex justify-around items-center">
        <div class="text-center w-full p-8 md:p-0 md:w-auto">
            <div class="text-gray-500 text-lg mb-5 flex items-center">Utilize os filtros para buscar temas de redação</div>
            <span class="material-icons text-gray-400 text-5xl"></span>
        </div>
    </div>
    
    {{-- O código no arquivo abaixo está impedindo que o sidebar funcione! --}}
    @include('filtroredacao')

</x-app-layout>