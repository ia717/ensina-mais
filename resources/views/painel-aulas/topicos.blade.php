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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($topics as $topic)
                    <a href="{{ route('aulas', [$discipline, $topic]) }}"
                        class="bg-white border-gray-900 border-2 rounded-lg shadow p-4">
                        <div class="bg-gray-200 h-16 mb-4 rounded"></div>
                        <h3 class="text-xl font-semibold text-gray-800">{{ $topic->name }}</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $topic->lessons->count() }} AULAS</p>
                        <div class="mt-2 text-sm text-gray-600">10 de {{ $topic->lessons->count() }} aulas</div>
                        <div class="bg-blue-400 h-1 mt-2 rounded"></div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
