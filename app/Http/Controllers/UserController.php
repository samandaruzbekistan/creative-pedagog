<?php

namespace App\Http\Controllers;

use App\Repositories\BlockRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(protected BlockRepository $blockRepository)
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
        return [$correct,$incorrect];
    }
}
