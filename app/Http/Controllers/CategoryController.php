<?php

namespace App\Http\Controllers;
use App\Models\Category;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('category.index', compact('category'));
    }

    public function create(){
        $user = DB::table('user')->where('id',Auth::id())->get();
        return view('category.create');
    }

    public function store(Request $request){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->created_by = auth()->user()->id;
        $category->save();
        return redirect('/admin');
    }
}