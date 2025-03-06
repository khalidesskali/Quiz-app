<?php

// app/Models/QuizQuestion.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['quiz_id', 'question_id', 'user_answer', 'is_correct'];

    // Belongs-to relationship with Quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // Belongs-to relationship with Result
    public function result()
    {
        return $this->belongsTo(Result::class);
    }
}
