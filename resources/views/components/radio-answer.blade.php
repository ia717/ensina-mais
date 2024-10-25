<label for="answer_{{ $questionId }}_{{ $answer->id }}" class="flex items-center">
    <input type="radio" id="answer_{{ $questionId }}_{{ $answer->id }}" name="answers_{{ $questionId }}" value="{{ $answer->id }}" class="mr-2">
    <span class="text-gray-700 dark:text-white">({{ \App\Helpers\OptionHelper::getOptionLetter($index) }}) {{ $answer->answer_text }}</span>
</label>
