<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class ViewController extends Controller
{
    public function index(){
        $user = DB::table('user')->where('id',Auth::id())->get();
        return view('view',['user'=>$user]);
    }

    public function show(){
        $user = DB::select('select * from user');
        return view('show',['user'=>$user]);
    }

    public function view(Post $post){
        $comment = DB::select('select * from comments');
        return view('comments.view',['comments'=>$comment, 'posts'=>$post]);
    }
}