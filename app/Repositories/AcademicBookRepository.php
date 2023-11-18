<?php

namespace App\Repositories;

use App\Models\AcademicBook;

class AcademicBookRepository
{
    public function getAllBooks(){
        return AcademicBook::all();
    }

    public function new_book($name, $photo, $file){
        $book = new AcademicBook;
        $book->name = $name;
        $book->photo = $photo;
        $book->file = $file;
        $book->save();
    }

    public function getBook($id){
        return AcademicBook::find($id);
    }

    public function delete_book($id){
        AcademicBook::where('id', $id)->delete();
    }
}
