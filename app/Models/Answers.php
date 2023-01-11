<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected static function boot()
    {
        parent::boot();

        static::created(function ($answer) {
            $answer->question->increment('answers_count');
        });
    }

    public function question()
    {
        return $this->belongsTo(Pertanyaan::class, 'questions_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
