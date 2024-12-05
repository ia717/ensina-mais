<x-app-layout>
    <div class="flex flex-col md:flex-row justify-between">

        <!-- Coluna de Temas -->
        <div class="w-full md:w-3/4 space-y-6 md:mr-10"> <!-- Adicionei md:mr-10 aqui -->
            <!-- tema 1 -->
            @foreach ( $titulos as $titulo )
                
               
            <div class="bg-gray-100 p-4 rounded-lg dark:bg-gray-900">

            <p class="text-lg font-semibold my-6">{{$titulo->title}}</p>

                <div class="flex justify-between">
                    <div class="flex gap-10">
                        <button
                            class="bg-blue-400 hover:bg-teal-500 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                           {{$titulo->textTheme->name}}
                        </button>
                        <button
                            class="bg-blue-400 hover:bg-teal-500 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                           {{$titulo->vestibular->name}}
                        </button>
                    </div>
                    <a href="{{route('redacao2')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-md text-sm transition duration-300">
                        Escrever Redação
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Barra Lateral de Filtro -->
        <div class="w-full md:w-1/4 p-6 bg-slate-50 rounded-lg shadow mt-6 md:mt-0 dark:bg-gray-900">
            <h2 class="text-lg font-semibold mb-4">Filtrar dúvidas</h2>

            <div class="space-y-4">
                <!-- Seleção de Disciplina no Filtro -->
                <select id="filter-discipline"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500 dark:bg-gray-900"
                    onchange="updateFilterTopics(this.value)">
                    <option value="">Selecione um tema</option>
                    @foreach ( $titulos as $titulo )
                    
                    <option value="">{{$titulo->textTheme->name}}</option>

                    @endforeach
                </select>

                <!-- Seleção de Tópico no Filtro -->
                <select id="filter-topic" name="topic_id"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500 dark:bg-gray-900">
                    <option value="">Selecione um vestibular</option>
                    @foreach ( $titulos as $titulo )
                    
                    <option value="">{{$titulo->vestibular->name}}</option>

                    @endforeach

                </select>

                <button type="submit"
                    class="bg-sky-800 text-white p-2 w-full rounded hover:bg-blue-500 transition duration-200">
                    Filtrar
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
