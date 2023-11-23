<?php

namespace App\Http\Controllers;

use App\Repositories\SchoolBooksRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        protected SchoolBooksRepository $schoolBooksRepository
    )
    {
    }

    public function school_books(){
        $books = $this->schoolBooksRepository->getAllBooks();
        return view('user.school', ['']);
    }
}
