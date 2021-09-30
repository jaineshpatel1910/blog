<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use DB;
use Session;
use Validator;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Notifications\NewPostNotify;
use Illuminate\Support\Facades\Notification;
use App\Model\user\Subscriber;
use Illuminate\Notifications\Notifiable;


class PostController extends Controller
{
    public function index(Post $post, Category $category){
        $category = Category::all();
        $post = Post::select("posts.id","posts.title","posts.body","category.category_name")
                ->join("category","category.id","=","posts.category_id")->get();  
        return view('posts.index', compact('post','category'));
    }

    public function create(Category $category, Post $post){
        $category = Category::all();
        return view('posts.create',compact('post', 'category'));
    }

    public function myNotification($type)
    {
        switch ($type) {
            case 'message':
                alert()->message('Sweet Alert with message.');
                break;
            case 'basic':
                alert()->basic('Sweet Alert with basic.','Basic');
                break;
            case 'info':
                alert()->info('Sweet Alert with info.');
                break;
            case 'success':
                alert()->success('Sweet Alert with success.','Welcome to ItSolutionStuff.com')->autoclose(5000);
                break;
            case 'error':
                alert()->error('Sweet Alert with error.');
                break;
            case 'warning':
                alert()->warning('Sweet Alert with warning.');
                break;
            default:
                # code...
                break;
        }
        return view('my-notification');
    }

    public function search(Request $request){
        $search1 = $request->get('search1');
        $post = DB::table('posts')->where('title', 'like', '%'.$search1.'%')->orWhere('body', 'like', '%'.$search1.'%')->paginate(5);
        return view('posts.index', compact('post'), ['posts' => $post]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => '',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->created_by = auth()->user()->id;
        $post->save();
        return redirect('/home')->with('success','Post created successfully!');
    }
    
    public function blog(){
        $post = DB::table('posts')->get();
        $post = Post::select("posts.id","posts.title","posts.body","posts.created_at","category.category_name")
        ->join("category","category.id","=","posts.category_id")->get();
        return view('posts.admin-blog', compact('post'));
    }
    

    public function edit(Post $post){
        return view('posts.edit', compact('post'), ['posts' => $post]);
    }

    public function view(){
        $category = Category::all();
        $post = DB::table('posts')->get();
        $post = Post::select("posts.id","posts.title","posts.body","posts.created_at","category.category_name")
                ->join("category","category.id","=","posts.category_id")->get();
        return view('posts.posts_view', compact('post','category'), ['posts' => $post, 'category' => $category]);
    }

    public function searchblog(Request $request){
        $searchblog = $request->get('searchblog');
        $post = DB::table('posts')->where('title', 'like', '%'.$searchblog.'%')->orWhere('body', 'like', '%'.$searchblog.'%')->paginate(5);
        return view('posts.posts_view', compact('post'), ['posts' => $post]);
    }

    public function category(Request $request, Post $post){
        $categorysearch = $request->get('categorysearch');
        $category = DB::table('category')->where('category_name', 'like', '%'.$categorysearch.'%')->paginate(5);
        return view('posts.index', compact('category', 'post'), ['category' => $category, 'post' => $post]);
    }

    public function show(Request $comments, Post $post){
        $user = DB::table('user')->where('id',Auth::id())->get();
        $comments = DB::table('comments')->where('user_id', Auth::id())->get();
        $comments = DB::table('comments')->where('post_id', $post->id)->get();
        return view('posts.show', compact('post','comments', 'user'), ['comments' => $comments, 'user' => $user, 'posts' => $post]);
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
        ]);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/home')->with('success','Post updated successfully!');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/home')->with('success','Post deleted successfully!');
    }
}