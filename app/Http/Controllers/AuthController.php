<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Session;
use Hash;
use DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function blog(){
        $post = Post::all();
        $post = Post::select("posts.id","posts.title","posts.body","posts.created_at","category.category_name")
        ->join("category","category.id","=","posts.category_id")->get();
        return view('home', compact('post'));
    }

    public function read(Post $post, User $user){
        return view('read', compact('post'));
    }

    public function admin(){
        $posts = Post::all();
        $posts = Post::select("posts.id","posts.title","posts.body","posts.created_at","category.category_name")
        ->join("category","category.id","=","posts.category_id")->get(); 
        return view('adminhome', compact('posts'));
    }

    public function index(){
        return view('auth.signin');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $user = DB::table('user')->where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('show', ['user' => $user]);
    }

    public function createSignin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            
            return redirect()->intended('dashboard')->withSuccess('Logged-in');
            
        }
        return redirect("login")->withErrors('Invalid Credentials!!');
    }

    public function signup(){
        return view('auth.signup');
    }

    public function customSignup(Request $request){
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]*/|alpha',
            'email' => 'required|email|regex:/(.*)@gmail.com/i|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'phone_number' => 'required|numeric|digits:10',
        ]);
        $data = $request->all();
        $chech = $this->createUser($data);
        return redirect("login")->withSuccess('Successfully registered!');
    }

    public function createUser(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone_number'],
        ]);
    }

    public function edit(User $user){
        return view('user.edit', compact('user'), ['user' => $user]);
    }

    public function update(User $user, Request $request){
        $request->validate([
            'is_admin' => '',
        ]);
        $user->is_admin = $request->is_admin;
        $user->save();
    }

    

    public function dashboardView(Request $request){
        // $user = DB::table('user')->where('id', Auth::id())->get();
        $user = DB::select('select * from user');
        $user = User::all();

        $posts = Post::latest()->take(5)->get();
        $posts = Post::all();
        $comment = Comment::all();

        $posts = Post::select("posts.id","posts.title","posts.body","posts.created_at","category.category_name")
        ->join("category","category.id","=","posts.category_id")->get(); 
        
        if (Auth::user()->is_admin){
            return view('auth.admin_dashboard',  compact('posts'), ['user' => $user, 'comment' => $comment, 'posts' => $posts]);
        }
        else{
            
            return view('auth.dashboard', compact('posts'), ['user' => $user, 'posts' => $posts]);
        }
        return redirect("login")->withSuccess('You dont have Access');
    }


    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}