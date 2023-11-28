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
        $answer_1->save();

        $answer_2 = new Answer;
        $answer_2->answer = $b_answer;
        $answer_2->quiz_id = $quiz->id;
        $answer_2->is_correct = 0;
        $answer_2->save();

        $answer_3 = new Answer;
        $answer_3->answer = $c_answer;
        $answer_3->quiz_id = $quiz->id;
        $answer_3->is_correct = 0;
        $answer_3->save();

        $answer_4 = new Answer;
        $answer_4->answer = $d_answer;
        $answer_4->quiz_id = $quiz->id;
        $answer_4->is_correct = 0;
        $answer_4->save();
        $this->incrementQuizCount($block_id);
    }

    public function getQuiz($id){
        return Quiz::find($id);
    }

    public function deleteQuiz($id, $block_id){
        Answer::where('quiz_id', $id)
            ->delete();
        Quiz::where('id', $id)
            ->delete();
        $this->decrementQuizCount($block_id);
    }

    protected function incrementQuizCount($block_id){
        $exam_day = Block::find($block_id);
        $q_count = $exam_day->quiz_count+1;
        $exam_day->update([
            'quiz_count' => $q_count
        ]);
    }

    protected function decrementQuizCount($block_id){
        $exam_day = Block::find($block_id);
        $q_count = $exam_day->quiz_count-1;
        $exam_day->update([
            'quiz_count' => $q_count
        ]);
    }

    public function delete_block($block_id){
        $quizzes = $this->block_quizzes($block_id);
        foreach ($quizzes as $quiz){
            $this->deleteQuiz($quiz->id, $block_id);
            if ($quiz->photo != "no_photo"){
                unlink('img/quiz'.$quiz->photo);
            }
        }
        Block::where('id', $block_id)
            ->delete();
    }
}
