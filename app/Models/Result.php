<?php

// app/Models/Result.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = ['quiz_id', 'user_id', 'score', 'completed_at'];

    // Belongs-to relationship with Quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // Belongs-to relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
