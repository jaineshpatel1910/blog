<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use DB;
use Session;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $comments){
        
        //$comments = Comment::orderBy('created_at','asc')->get();
        $user = DB::table('user')->where('id',Auth::id())->get();
        $posts = DB::table('posts')->where('id',Auth::id())->get();
        return view('posts.show',['comments' => $comments, 'user' => $user, 'posts' => $posts]);
    }

    public function store(Request $request){

        $validator=Validator::make($request->all(), [
            'user_id' => '',
            'posts_id' => '',
            'body' => 'required',
        ]);

        if($validator->fails()){
            return redirect('/comment')
            ->withInput()
            ->withErrors($validator);
        }

        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->posts_id = $request->posts_id;
        $comment->body = $request->body;
        $comment->save();
        return redirect('/posts/{$post->id}/comments');
    }
}