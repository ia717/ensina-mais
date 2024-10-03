<x-app-layout>
    <h1 class="text-3xl pr-4 pb-4 pt-4 text-black dark:text-white">Tópicos de {{ $discipline->name }}</h1>
    <div class="justify-center items-center flex">

        <div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @if ($topics->isEmpty())
                <p>Não há tópicos cadastrados para esta disciplina.</p>
                @else
                @foreach ($topics as $topic)
                <a href="{{ route('aulas', [$discipline, $topic] ) }}" class="bg-white dark:bg-neutral-600 rounded-lg shadow p-4">
                    <div class="bg-gray-200 dark:bg-gray-500 h-16 mb-4 rounded"></div>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $topic->name }}</h3>
                    <p class="text-sm text-gray-600 dark:text-white mt-2">{{ $topic->lessons->count() }} AULAS</p>
                    <div class="mt-2 text-sm text-gray-600 dark:text-white">10 de {{ $topic->lessons->count() }} aulas</div>
                    <div class="bg-blue-400 dark:text-white h-1 mt-2 rounded"></div>
                </a>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</x-app-layout>