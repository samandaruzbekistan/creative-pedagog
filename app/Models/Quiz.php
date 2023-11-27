<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function block()
    {
        return $this->belongsTo(Block::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'quiz_id');
    }
}
