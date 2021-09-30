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

    public function admin(){
        $user = DB::table('user')->where('id',Auth::id())->get();
        return view('admin',['user'=>$user]);
    }

    public function view(Post $post){
        $comment = DB::select('select * from comments');
        return view('comments.view',['comments'=>$comment, 'posts'=>$post]);
    }

    public function search(Request $request){
        $searchchat = $request->get('searchchat');
        $user = DB::table('user')->where('name', 'like', '%'.$searchchat.'%')->paginate(5);
        return view('message.index', ['user' => $user]);
    }
}