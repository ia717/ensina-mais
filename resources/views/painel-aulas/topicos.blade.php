<x-app-layout>
    {{ Breadcrumbs::render('topicos', $discipline) }}

    <div class="flex items-center text-4xl font-bold">
        <span class="inline-block w-2 h-8 mr-2" style="background-color: {{ $discipline->category->color }}"></span>
        <h1 class="text-4xl font-bold">Tópicos de {{ $discipline->name }}</h1>
    </div>

    <div>
        @if ($topics->isEmpty())
            <p>Não há tópicos cadastrados para esta disciplina.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 transition-all duration-300 hover:-translate-y-1.5 hover:brightness-75">
                @foreach ($topics as $topic)
                    <a href="{{ route('aulas', [$discipline, $topic]) }}"
                        class="border-gray-900 border-2 rounded-lg shadow p-4">
                        <div class="grid grid-cols-2">
                            <div style="background-color: {{ $discipline->category->color }}; background-color: rgba({{ hexdec(substr($discipline->category->color, 1, 2)) }}, {{ hexdec(substr($discipline->category->color, 3, 2)) }}, {{ hexdec(substr($discipline->category->color, 5, 2)) }}, 0.3);"
                                class="h-20 w-20 mb-4 rounded"></div>
                            <div>
                                <h2 class="text-xl font-semibold">{{ $topic->name }}</h2>
                                <p class="text-sm mt-2">{{ $topic->lessons->count() }} aulas</p>
                            </div>
                        </div>
                        <div class="bg-blue-400 h-2 mt-2 rounded"></div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
