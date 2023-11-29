<?php

namespace App\Repositories;

use App\Models\Presentation;

class PresentationRepository
{
    public function getAllPresentations(){
        return Presentation::all();
    }

    public function new_presentation($name, $photo, $file, $text){
        $book = new Presentation;
        $book->name = $name;
        $book->photo = $photo;
        $book->file = $file;
        $book->text = $text;
        $book->save();
    }

    public function getPresentation($id){
        return Presentation::find($id);
    }

    public function delete_presentation($id){
        Presentation::where('id', $id)->delete();
    }
}
