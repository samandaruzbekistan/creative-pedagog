<?php

namespace App\Repositories;

use App\Models\Answer;
use App\Models\Block;
use App\Models\Quiz;

class BlockRepository
{
    public function getAll(){
        return Block::all();
    }

    public function new($name, $time){
        $block = new Block;
        $block->name = $name;
        $block->time = $time;
        $block->save();
    }

    public function get_block($id){
        return Block::find($id);
    }

    public function block_quizzes($block_id){
        return Quiz::with(['answers'])->get();
    }

    public function quiz_new($quiz_text, $photo, $a_answer, $b_answer, $c_answer, $d_answer, $block_id){
        $quiz = new Quiz;
        $quiz->block_id = $block_id;
        $quiz->quiz = $quiz_text;
        $quiz->photo = $photo;
        $quiz->save();

        $answer_1 = new Answer;
        $answer_1->answer = $a_answer;
        $answer_1->quiz_id = $quiz->id;
        $answer_1->is_correct = 1;

        $answer_2 = new Answer;
        $answer_2->answer = $b_answer;
        $answer_2->quiz_id = $quiz->id;
        $answer_2->is_correct = 0;

        $answer_3 = new Answer;
        $answer_3->answer = $c_answer;
        $answer_3->quiz_id = $quiz->id;
        $answer_3->is_correct = 0;

        $answer_4 = new Answer;
        $answer_4->answer = $d_answer;
        $answer_4->quiz_id = $quiz->id;
        $answer_4->is_correct = 0;
    }
}
