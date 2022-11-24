<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalityQuizScore extends Model
{
    use HasFactory;
    protected $table = 'personality_quiz_scores';
    protected $fillable =['id','extraversion','agreeableness', 'conscientiousness', 'neuroticism', 'openness'];
}
