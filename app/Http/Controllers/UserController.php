<?php

namespace App\Http\Controllers;

use App\Repositories\AcademicBookRepository;
use App\Repositories\BlockRepository;
use App\Repositories\InteraktivRepository;
use App\Repositories\LogicRepository;
use App\Repositories\PresentationRepository;
use App\Repositories\RebusRepository;
use App\Repositories\SchoolBooksRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        protected BlockRepository $blockRepository,
        protected PresentationRepository $presentationRepository,
        protected SchoolBooksRepository $schoolBooksRepository,
        protected AcademicBookRepository $academicBookRepository,
        protected RebusRepository $rebusRepository,
        protected LogicRepository $logicRepository,
        protected InteraktivRepository $interaktivRepository,
    )
    {
    }

    public function home(){
        $blocks = $this->blockRepository->getAll();
//        return $blocks;
        return view('user.temp', ['blocks' => $blocks]);
    }

    public function test($id){
        $quizzes = $this->blockRepository->block_quizzes($id);
        $block = $this->blockRepository->get_block($id);
        return view('user.test', ['quizzes' => $quizzes, 'block' => $block]);
    }

    public function tests(){
        $tests = $this->blockRepository->getAll();
        return view('user.tests', ['tests' => $tests]);
    }

    public function check(Request $request){
        $correct = 0;
        $incorrect = 0;
        $r = [];
        for ($x = 1; $x <= $request->quiz_count; $x++) {
            $index = 'answer'.$x;
            if (isset($request->$index)){
                if ($request[$index] == '1'){
                    $correct = $correct+1;
                }
                else{
                    $incorrect = $incorrect+1;
                }
            }
        }
        session()->flash('result',1);
        session()->flash('correct',$correct);
        session()->flash('incorrect',$incorrect);
        return redirect()->route('user.home');
    }


    public function presentation(){
        $p = $this->presentationRepository->getAllPresentations();
        return view('user.presentations', ['presentations' => $p]);
    }

    public function school(){
        $p = $this->schoolBooksRepository->getAllBooks();
        return view('user.school', ['presentations' => $p]);
    }


    public function academic(){
        $p = $this->academicBookRepository->getAllBooks();
        return view('user.academic', ['presentations' => $p]);
    }

    public function rebus(){
        $p = $this->rebusRepository->getAll();
        return view('user.rebus', ['presentations' => $p]);
    }

    public function logic(){
        $p = $this->logicRepository->getAll();
        return view('user.logic', ['presentations' => $p]);
    }

    public function interaktiv(){
        $p = $this->interaktivRepository->getAll();
        return view('user.interaktiv', ['videos' => $p]);
    }
}
