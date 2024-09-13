<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Dúvidas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-100 flex ml-0">
    <div class="flex ">

        <!-- Conteúdo do Fórum -->
        <div id="barra" class="ml-[245px] flex-1 p-8 overflow-y-auto transition-all duration-300 ease-in-out">
            <h1 class="text-3xl font-semibold">Fórum de Dúvidas</h1>

            <!-- Perguntas e Respostas -->
            @foreach ($questions as $question)
    <div class="bg-white p-4 rounded-lg shadow mb-4 relative">
        <div class="flex justify-between items-start mb-4">
            <div>
                <h2 class="text-lg font-semibold">{{ $question->user->name }}</h2>
                <span class="text-sm text-gray-600">{{ $question->user->role }}</span>
            </div>
            <div class="flex font-bold space-x-2">
                <!-- Aqui, a cor da categoria será aplicada dinamicamente -->
                <span class="px-2 py-1 rounded text-xs" style="background-color: {{ $question->subject->category->color ?? '#ccc' }};">
                    {{ $question->subject->category->name ?? 'Categoria Desconhecida' }}
                </span>
            </div>
        </div>

        <p class="mb-4">{{ $question->content }}</p>

        <!-- Respostas -->
        <div class="relative">
            <button class="toggle-button bottom-4 right-4 text-black px-4 py-2 bg-gray-200 rounded">Respostas</button>
            <div class="resposta border-t text-gray-600 hidden mt-12 text-xs">
                @foreach ($question->answers as $answer)
                    <div class="mt-4">
                        <h3 class="text-sm font-semibold">{{ optional($answer->user)->name ?? 'Usuário Desconhecido' }}</h3>
                        <span class="text-xs text-gray-600">{{ optional($answer->user)->role ?? 'Função Desconhecida' }}</span>
                        <p class="mt-2">{{ $answer->answer }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Formulário para Responder -->
        <form action="{{ route('answers.store', $question->id) }}" method="POST" class="mt-4">
            @csrf
            <textarea name="answer" placeholder="Escreva sua resposta..." class="w-full p-2 border border-gray-300 rounded mb-2"></textarea>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Responder</button>
        </form>
    </div>
@endforeach
            <!-- Caixa de Texto para Nova Pergunta -->
            <form action="/forum" method="POST">
                @csrf
                <div class="bg-white p-4 rounded-lg shadow flex flex-col">
                    <textarea name="question" placeholder="Escreva aqui sua dúvida..." class="w-full p-2 border border-gray-300 rounded mb-4"></textarea>
                    <div class="flex space-x-2 mb-4">
                        <select name="subject_id" class="w-full p-2 border border-gray-300 rounded">
                            <option value="">Selecione uma disciplina</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                        <select name="topic_id" class="w-full p-2 border border-gray-300 rounded">
                            <option value="">Assunto primário</option>
                            @foreach ($topics as $topic)
                                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="bg-sky-800 text-white p-2 rounded hover:bg-blue-500">Enviar dúvida</button>
                </div>
            </form>
        </div>

        <!-- Barra Lateral de Filtro -->
        <div class="w-1/5 p-6 bg-gray-200">
            <h2 class="text-lg font-semibold mb-4">Filtrar dúvidas</h2>
            <div class="space-y-4">
                <select class="w-full p-2 border border-gray-300 rounded">
                    <option>Selecione uma disciplina</option>
                    @foreach ($subjects as $subject)
                        <option>{{ $subject->name }}</option>
                    @endforeach
                </select>
                <select class="w-full p-2 border border-gray-300 rounded">
                    <option>Professor</option>
                    <!-- Adicione aqui a lista de professores se necessário -->
                </select>
                <select class="w-full p-2 border border-gray-300 rounded">
                    <option>Tópico</option>
                    @foreach ($topics as $topic)
                        <option>{{ $topic->name }}</option>
                    @endforeach
                </select>
                <button class="bg-sky-800 text-white p-2 w-full rounded hover:bg-blue-500">Filtrar</button>
            </div>
        </div>
    </div>
</body>
<script>
    document.querySelectorAll('.toggle-button').forEach((button) => {
        button.addEventListener('click', function() {
            const resposta = this.nextElementSibling;
            resposta.classList.toggle('hidden');
            this.textContent = resposta.classList.contains('hidden') ? 'Respostas' : 'Ocultar Resposta';
        });
    });
</script>

</html>
