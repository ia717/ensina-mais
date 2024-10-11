<x-app-layout>
    <div>
        <div class="rounded-md bg-white dark:bg-neutral-800 p-6 space-y-8">
            {{ Breadcrumbs::render('disciplinas') }}
            <h1 class="text-4xl font-bold">Disciplinas</h1>

            @foreach ($categories as $category)
                <div>
                    <div class="flex items-center text-2xl font-bold mb-2.5">
                        <span class="inline-block w-1 h-6 mr-2" style="background-color: {{ $category->color }}"></span><h2>{{ $category->name }}</h2>
                    </div>            

                    @if ($category->disciplines->isEmpty())
                        <p>Nenhuma disciplina cadastrada</p>
                    @endif

                    <div class="flex flex-wrap gap-5">
                        @foreach ($category->disciplines as $discipline)
                            <a href="{{ route('topicos', $discipline) }}" style="background-color: {{ $category->color }}"
                                class="w-32 h-28 sm:w-40 sm:h-32  rounded-lg flex flex-col items-center justify-center shadow-md text-center cursor-pointer transition-all duration-300 hover:-translate-y-1.5 hover:brightness-75">
                                <i class="text-3xl mb-2.5 fas fa-calculator"></i> {{-- adicionar icon do database --}}
                                <span class="text-md font-semibold">{{ $discipline->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</x-app-layout>
