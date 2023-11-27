<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'block_id');
    }
}
