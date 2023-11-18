<?php

namespace App\Repositories;

use App\Models\SchoolBook;

class SchoolBooksRepository
{
    public function getAllBooks(){
        return SchoolBook::all();
    }

    public function new_book($name, $photo, $file){
        $book = new SchoolBook;
        $book->name = $name;
        $book->photo = $photo;
        $book->file = $file;
        $book->save();
    }

    public function getBook($id){
        return SchoolBook::find($id);
    }

    public function delete_book($id){
        SchoolBook::where('id', $id)->delete();
    }
}
