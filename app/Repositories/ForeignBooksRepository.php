<?php

namespace App\Repositories;

use App\Models\ForeignBook;

class ForeignBooksRepository
{
    public function getAllBooks(){
        return ForeignBook::all();
    }

    public function new_book($name, $photo, $file){
        $book = new ForeignBook;
        $book->name = $name;
        $book->photo = $photo;
        $book->file = $file;
        $book->save();
    }

    public function getBook($id){
        return ForeignBook::find($id);
    }

    public function delete_book($id){
        ForeignBook::where('id', $id)->delete();
    }
}
