<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Repositories\AcademicBookRepository;
use App\Repositories\BlockRepository;
use App\Repositories\ForeignBooksRepository;
use App\Repositories\InteraktivRepository;
use App\Repositories\LogicRepository;
use App\Repositories\PresentationRepository;
use App\Repositories\RebusRepository;
use App\Repositories\SchoolBooksRepository;
use App\Repositories\TopicRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(
        protected ForeignBooksRepository $foreignBooksRepository,
        protected SchoolBooksRepository $schoolBooksRepository,
        protected AcademicBookRepository $academicBookRepository,
        protected PresentationRepository $presentationRepository,
        protected TopicRepository $topicRepository,
        protected RebusRepository $rebusRepository,
        protected BlockRepository $blockRepository,
        protected LogicRepository $logicRepository,
        protected InteraktivRepository $interaktivRepository,
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
                session()->put('id',$admin->id);
                session()->put('fullname',$admin->fullname);
                return redirect()->route('admin.profile');
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

    public function update_password(Request $request){
        if ($request->password1 != $request->password2){
            return back()->with('logic_error',1);
        }
        else{
            $admin = Admin::find(session('id'));
            $admin->password = $request->password1;
            $admin->save();
            return back()->with('success',1);
        }
    }


    public function interaktiv(){
        $videos = $this->interaktivRepository->getAll();
        return view('admin.interaktiv', ['videos' => $videos]);
    }

    public function upload_interaktiv(Request $request){
        $request->validate([
            'name' => 'required|string',
            'video' => 'required|file',
        ]);
        $video = $request->file('video')->extension();
        $name = md5(microtime());
        $video_name = $name.".".$video;
        $path = $request->file('video')->move('videos/',$video_name);
        $this->interaktivRepository->new($request->name, $video_name);
        return back()->with('success',1);
    }

    public function video_delete(Request $request){
        $request->validate([
            'video_id' => 'required'
        ]);
        $row = $this->interaktivRepository->getById($request->video_id);
        unlink('videos/'.$row->video);
        $this->interaktivRepository->delete($request->video_id);
        return back()->with('delete',1);
    }




    public function block(){
        $blocks = $this->blockRepository->getAll();
        return view('admin.blocks', ['blocks' => $blocks]);
    }

    public function block_view($id){
        $quizzes = $this->blockRepository->block_quizzes($id);
        $block = $this->blockRepository->get_block($id);
        return view('admin.view_block', ['quizzes' => $quizzes, 'block' => $block]);
    }

    public function upload_block(Request $request){
        $request->validate([
            'name' => 'required|string',
            'time' => 'required|numeric',
        ]);
        $this->blockRepository->new($request->name, $request->time);
        return back();
    }

    public function upload_quiz(Request $request){
        $request->validate([
            'quiz' => 'required|string',
            'a_answer' => 'required|string',
            'b_answer' => 'required|string',
            'c_answer' => 'required|string',
            'd_answer' => 'required|string',
        ]);
        $photo_name = "no_photo";
        if ($request->hasFile('photo')){
            $photo = $request->file('photo')->extension();
            $name = md5(microtime());
            $photo_name = $name.".".$photo;
            $path = $request->file('photo')->move('img/quiz/',$photo_name);
        }
        $this->blockRepository->quiz_new(
            $request->quiz,
            $photo_name,
            $request->a_answer,
            $request->b_answer,
            $request->c_answer,
            $request->d_answer,
            $request->block_id,
        );
        return back();
    }

    public function delete_quiz(Request $request){
        $quiz = $this->blockRepository->getQuiz($request->quiz_id);
        if ($quiz->photo != "no_photo"){
            unlink('img/quiz/'.$quiz->photo);
        }
        $this->blockRepository->deleteQuiz($request->quiz_id, $request->block_id);
        return back();
    }

    public function delete_block(Request $request){
        $this->blockRepository->delete_block($request->block_id);
        return back();
    }



    public function logic(){
        $books = $this->logicRepository->getAll();
        return view('admin.logic', ['books' => $books]);
    }

    public function logic_upload(Request $request){
        $request->validate([
            'name' => 'required|string',
            'file' => 'required|file',
        ]);



        $orginal_name = $request->file('file')->getClientOriginalName();
        $file_name = $orginal_name;
        $path2 = $request->file('file')->move('books/',$file_name);

        $this->logicRepository->new_book($request->name, $file_name);
        return back()->with('success', 1);
    }

    public function logic_delete(Request $request){
        $request->validate([
            'book_id' => 'required'
        ]);
        $book = $this->logicRepository->getBook($request->book_id);
        unlink('books/'.$book->file);
        $this->logicRepository->delete_book($request->book_id);
        return back()->with('delete',1);
    }

    public function logic_download($id){
        $book = $this->logicRepository->getBook($id);
        $file= public_path(). "/books/".$book->file;

        $headers = array(
            'Content-Type: application/ppt',
        );

        return response()->download($file, $book->file, $headers);
    }


//  Foreign book control
    public function foreign(){
        $books = $this->foreignBooksRepository->getAllBooks();
        return view('admin.foreign', ['books' => $books]);
    }

    public function foreign_upload(Request $request){
        $request->validate([
            'name' => 'required|string',
            'file' => 'required|file',
        ]);

        $photo_name = "no_photo";

        $rand_number = rand(1,10);
        $orginal_name = $request->file('file')->getClientOriginalName();
        $file_name = $rand_number.' '.$orginal_name;
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


//  Foreign book control
    public function school(){
        $books = $this->schoolBooksRepository->getAllBooks();
        return view('admin.school', ['books' => $books]);
    }

    public function school_upload(Request $request){
        $request->validate([
            'name' => 'required|string',
        ]);
        $photo_name = "no_photo";

        $rand_number = rand(1,10);
        $orginal_name = $request->file('file')->getClientOriginalName();
        $file_name = $orginal_name;
        $path2 = $request->file('file')->move('books/',$file_name);

        $this->schoolBooksRepository->new_book($request->name, $photo_name, $file_name);
        return back()->with('success', 1);
    }

    public function school_delete(Request $request){
        $request->validate([
            'book_id' => 'required'
        ]);
        $book = $this->schoolBooksRepository->getBook($request->book_id);
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


//  Academic book control
    public function academic(){
        $books = $this->academicBookRepository->getAllBooks();
        return view('admin.academic', ['books' => $books]);
    }

    public function academic_upload(Request $request){
        $request->validate([
            'name' => 'required|string',
            'file' => 'required|file',
        ]);


        $rand_number = rand(1,10);
        $orginal_name = $request->file('file')->getClientOriginalName();
        $file_name = $orginal_name;
        $path2 = $request->file('file')->move('books/',$file_name);

        $this->academicBookRepository->new_book($request->name, "no_photo", $file_name);
        return back()->with('success', 1);
    }

    public function academic_delete(Request $request){
        $request->validate([
            'book_id' => 'required'
        ]);
        $book = $this->academicBookRepository->getBook($request->book_id);
        unlink('books/'.$book->file);
        $this->academicBookRepository->delete_book($request->book_id);
        return back()->with('delete',1);
    }

    public function academic_download($id){
        $book = $this->academicBookRepository->getBook($id);
        $file= public_path(). "/books/".$book->file;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $book->file, $headers);
    }


//  Presentation book control
    public function presentation(){
        $books = $this->presentationRepository->getAllPresentations();
        return view('admin.presentation', ['books' => $books]);
    }

    public function presentation_upload(Request $request){
        $request->validate([
            'name' => 'required|string',
            'file' => 'required|file',
        ]);

        $photo_name ="no_photo";

        $orginal_name = $request->file('file')->getClientOriginalName();
        $file_name = $orginal_name;
        $path2 = $request->file('file')->move('books/',$file_name);

        $orginal_name2 = $request->file('word')->getClientOriginalName();
        $file_name2 = $orginal_name2;
        $path3 = $request->file('word')->move('books/',$file_name2);

        $this->presentationRepository->new_presentation($request->name, $photo_name, $file_name,$file_name2);
        return back()->with('success', 1);
    }

    public function presentation_delete(Request $request){
        $request->validate([
            'book_id' => 'required'
        ]);
        $book = $this->presentationRepository->getPresentation($request->book_id);
        unlink('books/'.$book->file);
        $this->presentationRepository->delete_presentation($request->book_id);
        return back()->with('delete',1);
    }

    public function presentation_download($id){
        $book = $this->presentationRepository->getPresentation($id);
        $file= public_path(). "/books/".$book->file;

        $headers = array(
            'Content-Type: application/ppt',
        );

        return response()->download($file, $book->file, $headers);
    }

    public function presentation_word_download($id){
        $book = $this->presentationRepository->getPresentation($id);
        $file= public_path(). "/books/".$book->text;

        $headers = array(
            'Content-Type: application/ppt',
        );

        return response()->download($file, $book->file, $headers);
    }


//  Topic control
    public function topic(){
        $books = $this->topicRepository->getTopics();
        return view('admin.topic', ['books' => $books]);
    }

    public function imgUpload(Request $request)
    {
        $file = $request->upload;
        $fileName = $file->getClientOriginalName();
        $new_name = time().$fileName;
        $dir = "img/topic_images/";
        $file->move($dir, $new_name);
        $url = asset('img/topic_images/'. $new_name);
        $CkeditorFuncNum = $request->input('CKEditorFuncNum');
        $status = "<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum', '$url', 'Fayl yuklandi')</script>";
        echo $status;
    }

    public function topic_upload(Request $request){
        $request->validate([
            'title' => 'required|string',
            'editor' => 'required|string',
        ]);
        $this->topicRepository->newTopic($request->title, $request->editor);
        return back()->with('success', 1);
    }

    public function delete_topic(Request $request){
        $request->validate([
            'topic_id' => 'required'
        ]);
        $this->topicRepository->delete_topic($request->topic_id);
        return back()->with('delete',1);
    }

    public function edit_topic($id){
        $topic = $this->topicRepository->getTopic($id);
        return view('admin.edit_topic', ['topic' => $topic]);
    }

    public function topic_update(Request $request){
        $request->validate([
            'title' => 'required|string',
            'id' => 'required',
            'editor' => 'required|string',
        ]);
        $this->topicRepository->update_topic($request->title, $request->editor, $request->id);
        return redirect()->route('admin.topic')->with('updated', 1);
    }




//    Route Rebus----------------------------------------Isacoff---------------------------------------------------------------------
    public function rebus(){
        $books = $this->rebusRepository->getAll();
        return view('admin.rebus', ['books' => $books]);
    }

    public function rebus_upload(Request $request){
        $request->validate([
            'name' => 'required|string',
            'photo' => 'required|file',
        ]);
        $photo = $request->file('photo')->extension();
        $name = md5(microtime());
        $photo_name = $name.".".$photo;
        $path = $request->file('photo')->move('img/rebus/',$photo_name);

        $this->rebusRepository->newRebus($request->name, $photo_name);
        return back()->with('success', 1);
    }

    public function delete_rebus(Request $request){
        $request->validate([
            'rebus_id' => 'required'
        ]);
        $rebus = $this->rebusRepository->getRebusbyId($request->rebus_id);
        unlink('img/rebus/'.$rebus->photo);
        $this->rebusRepository->deleteRebus($request->rebus_id);
        return back()->with('delete',1);
    }


}
