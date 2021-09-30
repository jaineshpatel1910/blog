<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function posts()
    {
        $post = Post::all();
        $post = Post::select("posts.id","posts.title","posts.body","category.category_name")
                ->join("category","category.id","=","posts.category_id")->get();
        return view('posts',compact('post'));
    }

    public function show(Post $post)
    {
        
        $user = DB::table('user')->where('id',Auth::id())->get();
        return view('postsShow',compact('post'));
    }

    public function postPost(Request $request)
    {
        request()->validate(['rate' => 'required']);
        $post = Post::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $post->ratings()->save($rating);
    }
}
