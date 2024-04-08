<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;
class PostController extends Controller
{
    public function index(){
        $posts = post::all();

        return view('PostIndex',
            ['posts'=>$posts]
        );
    }
    public function create(Request $request){
        $content = $request->content;

        post::create([
            'content'=>$content,
            'inputer'=>'劉威佑',
        ]);

        return redirect()->route('index');
    }
    /* public function index_fin(){
        $posts = post::all();

        return view('post_finish',
            ['posts'=>$posts]
        );
    }*/ 
    public function delete($id){
        $post =  post::find($id);
        $post->delete();
        return redirect()->route('index');
    }
}
