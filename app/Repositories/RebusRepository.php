<?php

namespace App\Repositories;

use App\Models\Presentation;
use App\Models\Rebus;

class RebusRepository
{
    public function getAll(){
        return Rebus::all();
    }

    public function getRebusbyId($id){
        return Rebus::find($id);
    }

    public function deleteRebus($id){
        Rebus::where('id', $id)->delete();
    }
    public function newRebus($name, $photo){
        $book = new Rebus;
        $book->name = $name;
        $book->photo = $photo;
        $book->save();
    }
}
