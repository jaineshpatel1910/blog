<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use DB;
use Session;
use Validator;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $posts = DB::table('posts')->where('title', 'like', '%'.$search.'%')->paginate(5);
        return view('posts.index', ['posts' => $posts]);
        // return view('posts.admin-blog', ['posts' => $posts]);
        // return view('posts.posts_view', ['posts' => $posts]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category = $request->category;
        $post->save();
        return redirect('/home')->with('success','Post created successfully!');
    }
    public function blog(){
        $posts = DB::table('posts')->get();
        return view('posts.admin-blog', compact('posts'));
    }
    

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function view(){
        $posts = DB::table('posts')->get();
        return view('posts.posts_view', compact('posts'));
    }


    public function show(Request $comments, Post $post){
        $user = DB::table('user')->where('id',Auth::id())->get();
        $comments = DB::table('comments')->where('user_id', Auth::id())->get();  
        $comments = DB::table('comments')->where('post_id', $post->id)->get();
        return view('posts.show', compact('post','comments'), ['comments' => $comments, 'user' => $user, 'posts' => $post]);
    }

    public function comment(Request $comments, Post $post)
    {
        $user = DB::table('user')->where('id',Auth::id())->get();
        $post = DB::table('posts')->get('id');
        return view('comments.index', ['comments' => $comments, 'user' => $user, 'posts' => $post]);
    }

    public function comments(Request $request){
        $validator=Validator::make($request->all(), [
            'user_id' => '',
            'post_id' => '',
            'body' => 'required',
        ]);
    
        if($validator->fails()){
            return redirect('/comment')
            ->withInput()
            ->withErrors($validator);
        }
    
        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->post_id = $request->post_id;
        $comment->body = $request->body;
        $comment->save();
        return redirect('/posts-view');
    }

    public function update(Post $post, Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category = $request->category;
        $post->save();
        return redirect('/home')->with('success','Post updated successfully!');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/home')->with('success','Post deleted successfully!');
    }
}