<x-app-layout>
    <div class="lg:ml-80 md:ml-40 ml-20">
        <h1 class="text-3xl">Disciplinas</h1>
        @foreach ($categories as $category)
            <div class="mb-10">
                <h2 class="mb-2.5 gray-700 text-xl">{{ $category->name }}</h2>

                @if ($category->disciplines->isEmpty())
                    <p>Nenhuma disciplina cadastrada</p>
                @endif

                <div class="flex flex-wrap gap-5">
                    @foreach ($category->disciplines as $discipline)
                        <a href="{{ route('topicos', $discipline) }}" style="background-color: {{ $category->color }}" class="w-40 h-32 rounded-lg flex flex-col items-center justify-center shadow-md text-center cursor-pointer transition-all duration-300 hover:-translate-y-1.5 hover:brightness-75">
                            <i class="text-3xl mb-2.5 gray-700 fas fa-calculator"></i>
                            <span class="text-sm gray-700">{{ $discipline->name }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
