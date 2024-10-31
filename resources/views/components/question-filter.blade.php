<div class="w-[400px] h-full bg-red-700 space-4">
    <h1>Filtrar Questões</h1>
    <form action="" method="GET">
        {{-- <div class="flex flex-col">
            <label for="filter">Filtrar por:</label>
            <select name="filter" id="filter">
                <option value="all">Todas</option>
                <option value="answered">Respondidas</option>
                <option value="unanswered">Não respondidas</option>
            </select>
        </div> --}}

        {{-- <div class="flex flex-col">
            <label for="discipline">Disciplina:</label>
            <select name="discipline" id="discipline">
                <option value="all">Todas</option>
                @foreach ($disciplines as $discipline)
                    <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                @endforeach
            </select>
        </div> --}}

        {{-- <div class="flex flex-col">
            <label for="topic">Tópico:</label>
            <select name="topic" id="topic">
                <option value="all">Todas</option>
                @foreach ($topics as $topic)
                    <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="flex flex-col">
            <label for="difficulty">Dificuldade:</label>
            <select name="difficulty" id="difficulty">
                <option value="all">Todas</option>
                <option value="easy">Fácil</option>
                <option value="medium">Média</option>
                <option value="hard">Difícil</option>
            </select>
        </div>
        <div class="flex flex-col">
            <label for="order">Ordenar por:</label>
            <select name="order" id="order">
                <option value="created_at">Data de criação</option>
                <option value="updated_at">Data de atualização</option>
                <option value="difficulty">Dificuldade</option>
            </select>
        </div>
        <button type="submit">Filtrar</button>

</div>