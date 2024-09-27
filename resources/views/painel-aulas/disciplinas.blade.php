<x-app-layout>
    <div class="pl-4 lg:pl-8">
        <div class="rounded-md bg-white dark:bg-neutral-800 p-6 space-y-8">
            <div id="header" class="">
                {{ Breadcrumbs::render('disciplinas') }}
                <h1 class="text-4xl font-bold">Disciplinas</h1>
            </div>
            @foreach ($categories as $category)
                <div class="">
                    <h2 class="text-2xl font-bold mb-2.5 gray-700">{{ $category->name }}</h2>
    
                    @if ($category->disciplines->isEmpty())
                        <p>Nenhuma disciplina cadastrada</p>
                    @endif
    
                    <div class="flex flex-wrap gap-5">
                        @foreach ($category->disciplines as $discipline)
                            <a href="{{ route('topicos', $discipline) }}" style="background-color: {{ $category->color }}" class="w-40 h-32 rounded-lg flex flex-col items-center justify-center shadow-md text-center cursor-pointer transition-all duration-300 hover:-translate-y-1.5 hover:brightness-75">
                                <i class="text-3xl mb-2.5 gray-700 fas fa-calculator"></i> {{-- adicionar icon do database --}}
                                <span class="text-sm gray-700">{{ $discipline->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    
</x-app-layout>
