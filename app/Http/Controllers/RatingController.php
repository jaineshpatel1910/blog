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
        $posts = Post::all();
        return view('posts',compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
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
        return redirect()->route("dashboard");
    }
}
