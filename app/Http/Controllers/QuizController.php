<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $units = [
            (object)[
                'unit' => 'python',
                'description' => 'Learn the fundamentals of programming, including syntax, 
                data types, control flow, and functions using Python.',
            ],
            (object)[
                'unit' => 'html',
                'description' => 'Master the core skills of web development by learning how to create and style webpages using HTML and CSS.',
            ],
            (object)[
                'unit' => 'javascript',
                'description' => 'Understand how to make webpages interactive and dynamic by learning JavaScript, including DOM manipulation,
                events, and basic algorithms.',
            ],
            (object)[
                'unit' => 'php',
                'description' => 'Learn how to build dynamic websites and web applications with PHP, 
                focusing on server-side scripting and working with databases.',
            ],
            (object)[
                'unit' => 'mysql',
                'description' => 'Learn how to manage and query databases using MySQL, 
                focusing on SQL queries, joins, and database design principles.',
            ],
        ];

        // Return the view with static units data
        return view('quizzes.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Fetch the quiz with the provided ID
        $quiz = Quiz::with('quizQuestions')->findOrFail($id);
    
        return view('quiz.show', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
