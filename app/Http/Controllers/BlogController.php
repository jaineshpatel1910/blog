<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create(){
        return view('blogs.create');   
    }

    public function store(Request $request){
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->category = $request->category;
        $blog->save();
        return redirect('/blogs');
    }
}