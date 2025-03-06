<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['unit', 'type', 'question', 'option1', 'option2', 'option3', 'option4', 'correct_answer'];

    // One-to-Many relationship with QuizQuestion
    public function quizQuestions()
    {
        return $this->hasMany(QuizQuestion::class);
    }

    // One-to-Many relationship with Result
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
