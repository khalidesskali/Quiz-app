@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center mb-6">{{ $quiz->type }} Quiz</h1>

        <!-- Display the questions for the quiz -->
        <div>
            @foreach ($quiz->quizQuestions as $question)
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $question->question }}</h2>
                    <div class="mt-2">
                        <label class="block mb-2">
                            <input type="radio" name="answer_{{ $question->id }}" value="1" class="mr-2">
                            {{ $question->option1 }}
                        </label>
                        <label class="block mb-2">
                            <input type="radio" name="answer_{{ $question->id }}" value="2" class="mr-2">
                            {{ $question->option2 }}
                        </label>
                        <label class="block mb-2">
                            <input type="radio" name="answer_{{ $question->id }}" value="3" class="mr-2">
                            {{ $question->option3 }}
                        </label>
                        <label class="block mb-2">
                            <input type="radio" name="answer_{{ $question->id }}" value="4" class="mr-2">
                            {{ $question->option4 }}
                        </label>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Submit button to submit answers -->
        <button class="px-6 py-2 bg-blue-600 text-white rounded-lg">Submit Quiz</button>
    </div>
@endsection