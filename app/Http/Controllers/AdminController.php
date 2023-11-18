<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Repositories\ForeignBooksRepository;
use App\Repositories\SchoolBooksRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(
        protected ForeignBooksRepository $foreignBooksRepository,
        protected SchoolBooksRepository $schoolBooksRepository
    )
    {
    }

//    Auth admin
    public function auth(Request $request){
        $request->validate([
            'username' => "required|string",
            'password' => "required|string",
        ]);
        $admin = Admin::where('username', $request->username)->first();
        if (!empty($admin)){
            if ($admin->password == $request->password){
                session()->put('admin',1);
                session()->put('fullname',$admin->fullname);
                return redirect()->route('admin.home');
            }
            else{
                return back()->with("login_error",1);
            }
        }
        else{
            return back()->with("login_error",1);
        }
    }

    public function logout(){
        session()->flush();
        return redirect()->route('admin.login');
    }

    public function home(){
        if (session('admin') == 1){
            return view('admin.home');
        }
        else{
            return redirect()->route('admin.login');
        }
    }


//  Foreign book control
    public function foreign(){
        $books = $this->foreignBooksRepository->getAllBooks();
        return view('admin.foreign', ['books' => $books]);
    }

    public function foreign_upload(Request $request){
        $request->validate([
            'name' => 'required|string',
            'photo' => 'required|file',
            'file' => 'required|file',
        ]);
        $photo = $request->file('photo')->extension();
        $name = md5(microtime());
        $photo_name = $name.".".$photo;
        $path = $request->file('photo')->move('img/book/',$photo_name);

        $rand_number = rand(1,10);
        $extension = $request->file('file')->extension();
        $orginal_name = $request->file('file')->getClientOriginalName();
        $file_name = $rand_number.' '.$orginal_name.".".$extension;
        $path2 = $request->file('file')->move('books/',$file_name);

        $this->foreignBooksRepository->new_book($request->name, $photo_name, $file_name);
        return back()->with('success', 1);
    }

    public function foreign_delete(Request $request){
        $request->validate([
            'book_id' => 'required'
        ]);
        $book = $this->foreignBooksRepository->getBook($request->book_id);
        unlink('img/book/'.$book->photo);
        unlink('books/'.$book->file);
        $this->foreignBooksRepository->delete_book($request->book_id);
        return back()->with('delete',1);
    }

    public function foreign_download($id){
        $book = $this->foreignBooksRepository->getBook($id);
        $file= public_path(). "/books/".$book->file;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $book->file, $headers);
    }


//  School book control
    public function school(){
        $books = $this->schoolBooksRepository->getAllBooks();
        return view('admin.school', ['books' => $books]);
    }

    public function school_upload(Request $request){
        $request->validate([
            'name' => 'required|string',
            'photo' => 'required|file',
            'file' => 'required|file',
        ]);
        $photo = $request->file('photo')->extension();
        $name = md5(microtime());
        $photo_name = $name.".".$photo;
        $path = $request->file('photo')->move('img/book/',$photo_name);

        $rand_number = rand(1,10);
        $extension = $request->file('file')->extension();
        $orginal_name = $request->file('file')->getClientOriginalName();
        $file_name = $rand_number.' '.$orginal_name.".".$extension;
        $path2 = $request->file('file')->move('books/',$file_name);

        $this->schoolBooksRepository->new_book($request->name, $photo_name, $file_name);
        return back()->with('success', 1);
    }

    public function school_delete(Request $request){
        $request->validate([
            'book_id' => 'required'
        ]);
        $book = $this->schoolBooksRepository->getBook($request->book_id);
        unlink('img/book/'.$book->photo);
        unlink('books/'.$book->file);
        $this->schoolBooksRepository->delete_book($request->book_id);
        return back()->with('delete',1);
    }

    public function school_download($id){
        $book = $this->schoolBooksRepository->getBook($id);
        $file= public_path(). "/books/".$book->file;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $book->file, $headers);
    }
}
