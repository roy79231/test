<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    //
    public function index(){
        $all_comment = comment::all();

        return view('index',
            ['all_comment'=>$all_comment]
        );
    }
    public function create(Request $request){
        $content = $request->content;
        comment::create(
            [
                'content'=> $content,
                'inputer'=> Auth::user()->name,
            ]
        );
        return redirect()->route('index');
    }
    public function boot(){
        return view('boot');
    }
}
