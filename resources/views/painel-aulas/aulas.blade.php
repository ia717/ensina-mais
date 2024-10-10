<x-app-layout>
    <div>
        <div class="rounded-md bg-white dark:bg-neutral-800 p-6 space-y-8">
            {{ Breadcrumbs::render('aulas', $topic->discipline, $topic) }}
            <h1 class="text-4xl font-bold">| {{ $topic->name }}</h1>

            @foreach ($lessons as $aula)
                <a href="{{ route('conteudo', [$topic->discipline->slug, $topic->slug, $aula->slug]) }}"
                    class="flex flex-col">
                    <div class="border-4 my-5 flex w-auto flex-col bg-gray-50">

                        <p class="text-gray-700">
                            <span class="font-bold">{{ $aula->time }}</span>
                            {{ $aula->name }}
                        </p>
                        <div>
                            <span class="font-bold">Relevância:</span>
                            @if ($aula->is_high_relevance)
                                Alta
                            @else
                                Baixa
                            @endif
                        </div>

                        <p class="font-bold">Duração:{{ $aula->duration }}</p>
                    </div>

                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
