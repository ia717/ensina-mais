<x-app-layout>
    @foreach ($questions as $question)
        <div class="h-1/2 bg-white dark:bg-neutral-800 p-8 rounded-lg shadow-lg transition duration-300 lg:ml-80 lg:w-1/2">
            <div class="flex-1 flex flex-col">
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Questão</h1>
                <p class="text-lg text-gray-600 dark:text-white mb-6">
                    {{ $question->statement }}
                    {{-- adicionar suporte para rich text --}}
                </p>
                <ul class="space-y-3 mb-6">
                    @foreach ($question->answers as $index => $answer)
                        <li>
                            <label for="option_{{ $question->id }}_{{ $answer->id }}" class="flex items-center">
                                <input type="radio" id="option_{{ $question->id }}_{{ $answer->id }}" name="options_{{ $question->id }}" value="{{ $answer->id }}" class="mr-2">
                                <span class="text-gray-700 dark:text-white">({{ chr(65 + $index) }}) {{ $answer->answer_text }}</span>
                            </label>
                        </li>
                    @endforeach
                </ul>
                <div class="flex justify-center">
                    <button
                        class="w-28 bg-sky-800 text-white py-2 font-bold rounded-lg transition duration-300 hover:bg-blue-600">Responder</button>
                </div>
            </div>
        </div>
    @endforeach

    <aside class="right-0 top-0 fixed">
        @include('caixafiltros')
    </aside>

</x-app-layout>
