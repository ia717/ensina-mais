<x-app-layout>
    {{ Breadcrumbs::render('aulas', $topic->discipline, $topic) }}

    <div class="flex items-center text-4xl font-bold">
        <span class="inline-block w-2 h-8 mr-2"
            style="background-color: {{ $topic->discipline->category->color }}"></span>
        <h1 class="text-4xl font-bold">{{ $topic->name }}</h1>
    </div>

    @foreach ($lessons as $lesson)
        <a href="{{ route('conteudo', [$topic->discipline->slug, $topic->slug, $lesson->slug]) }}" class="flex flex-col">
            <div style="border-color: {{ $topic->discipline->category->color }}"
                class="border-[3px] rounded-2xl flex w-auto flex-col bg-gray-100 dark:bg-neutral-800 px-4 py-6 transition-all duration-300 hover:-translate-y-1.5 hover:brightness-75">

                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-bold">{{ $lesson->name }}</h2>

                        <p class="">
                            <span class="font-semibold">Duração:</span>
                            {{ $lesson->duration }}
                        </p>
                    </div>


                    <div class="block">
                        <p class="">Relevância:</p>
                        @if ($lesson->is_high_relevance)
                            <div class="w-10 h-5 rounded-md bg-red-500 flex justify-center items-center">
                                <span>Alta</span>
                            </div>
                        @else
                        <div class="w-10 h-5 rounded-md bg-green-500 flex justify-center items-center">
                            <span>Baixa</span>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </a>
    @endforeach
</x-app-layout>
