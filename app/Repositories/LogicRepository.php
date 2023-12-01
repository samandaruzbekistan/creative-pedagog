<?php

namespace App\Repositories;

use App\Models\Logic;

class LogicRepository
{
    public function getAll(){
        return Logic::all();
    }

    public function new_book($name, $file, $body){
        $book = new Logic;
        $book->name = $name;
        $book->body = $body;
        $book->qr = $file;
        $book->save();
    }

    public function getBook($id){
        return Logic::find($id);
    }

    public function delete_book($id){
        Logic::where('id', $id)->delete();
    }
}
