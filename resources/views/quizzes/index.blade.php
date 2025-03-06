@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto mt-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($units as $unit)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all
                transform hover:scale-105 hover:shadow-2xl hover:bg-slate-50">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ $unit->unit }}</h2>
                        <p class="text-sm text-gray-600 mb-6">{{ $unit->description }}</p>
                        <a href="{{ route('quizzes.show', $unit->unit) }}" class="inline-block bg-gradient-to-r
                            from-indigo-600 to-purple-600 text-white font-semibold px-6 py-2 rounded-lg transition-colors
                            hover:from-indigo-700 hover:to-purple-700">
                            Start Quiz
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection