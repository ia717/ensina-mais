<x-app-layout>
    {{ Breadcrumbs::render('conteudo', $lesson->topic->discipline, $lesson->topic, $lesson) }}
    
    <div class="flex items-center mb-12">
        <span style="color:{{ $color }}" class="text-3xl font-bold mb-2 mr-4 translate-y-[2px]">|</span>
        <h1 class="text-4xl font-bold">{{ $lesson->name }}</h1>
    </div>

    <div class="h-4/5 w-full lg:w-5/5 rounded-xl bg-black aspect-w-16 aspect-h-9 mb-6 ">
        <iframe width="100%" height="592" src="{{ $correctLink }}" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
    <p class="text-start text-gray-600 mb-6 dark:text-white">{{ $discipline }} - {{ $topic }}</p>
    <a href="{{ url()->to(dirname(request()->path())) }}" class="btn btn-primary">Voltar</a>

    <!-- Se houver conteúdo será exibído  -->
    @isset($lesson->content)
        <div class="flex items-center mb-5">
            <span class="text-3xl font-bold mb-2 mr-4 translate-y-[2px]">|</span>
            <h2 class="text-3xl font-bold">Resumo</h2>
        </div>
        <div class="h-3/5 mt-6 p-8 rounded-xl bg-white shadow-lg mb-10">
            <p>{{ $lesson->content }}</p>
        </div>
    @endisset
</x-app-layout>
