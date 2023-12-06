<?php

namespace App\Repositories;

use App\Models\Creative;

class CreativeRepository
{
    public function getAll(){
        return Creative::all();
    }

    public function new($body, $file,$answer){
        $book = new Creative;
        $book->body = $body;
        $book->photo = $file;
        $book->answer = $answer;
        $book->save();
    }

    public function getById($id){
        return Creative::find($id);
    }

    public function delete($id){
        Creative::where('id', $id)->delete();
    }
}
