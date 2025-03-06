<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome');
});

// Define the routes for the QuizController
// Route::resource('quizzes', QuizController::class);
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes');
Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
