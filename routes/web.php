<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PusherNotificationController;
use App\Http\Controllers\RatingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Post $post) {
    $post = Post::all();
    $post = Post::select("posts.id","posts.title","posts.body","posts.created_by","user.name","category.category_name")
                ->join("category","category.id","=","posts.category_id")
                ->join("user","user.id","=","posts.created_by")->get();
    return view('welcome', compact('post'));
});
//read more
Route::get('read/{post}', [AuthController::class, 'read']);

//home page blog
Route::get('homepage', [AuthController::class, 'blog']);
Route::get('read/{post}', [AuthController::class, 'read']);

//admin-home page blog
Route::get('/adminhome', [AuthController::class, 'admin']);

//chat 
// Route::get('/', [ChatController::class, 'index']);
// Route::post('/store', [ChatController::class, 'store'])->name('store');


//message to particular user
Route::get('/chat', [MessageController::class, 'index']);
Route::get('chat/{user}', [MessageController::class, 'show']);
Route::post('chat/{user}/store', [MessageController::class, 'store']);

//Register and Login  
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');

Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');

Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//route for admin
Route::get('/admin-dashboard', [AuthController::class, 'dashboardView']);
//make user as admin
Route::get('user/{user}/edit', [AuthController::class, 'edit']);
Route::post('user/{user}', [AuthController::class, 'update']);
Route::get('/search', [AuthController::class, 'search']);



//view partiular logged-in user to admin-dashboard
Route::get('/view-admin', [ViewController::class, 'admin']);

//view partiular logged-in user
Route::get('/view', [ViewController::class, 'index']);
//view all users to admin
Route::get('/show', [ViewController::class, 'show']);
//search user in chat
Route::get('/searchchat', [ViewController::class, 'search']);
//view comments to admin
Route::get('/view-comments', [ViewController::class, 'view']);



//posts CRUD
Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('posts/create', [PostController::class, 'create']);
Route::post('post/store', [PostController::class, 'store']);
Route::get('posts/{post}/edit', [PostController::class, 'edit']);
Route::post('posts/{post}', [PostController::class, 'update']);
Route::get('/posts-view', [PostController::class, 'view']);

//for admin dashboard-viewblog
Route::get('/admin-blog', [PostController::class, 'blog']);

Route::get('posts/{post}', [PostController::class, 'show']);
Route::get('posts/{post}/comment', [PostController::class, 'comment']);
Route::post('posts/{post}/comments', [PostController::class, 'comments']);
 
Route::delete('posts/{post}', [PostController::class, 'destroy']);
Route::get('admin-edit', [PostController::class,'']);
Route::get('/search1', [PostController::class, 'search']);

//search blog in user panel
Route::get('/searchblog', [PostController::class, 'searchblog']);

//search by category
Route::get('/category-search', [PostController::class, 'category']);

//notification
//Route::get('/notify', [PostController::class, 'notification']);

//
Route::get('my-notification/{type}', [PostController::class, 'myNotification']);

//notification controller
Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);

//notification
Route::get('/notification', function(){
    return view('notification');
});
Route::get('send', [PusherNotificationController::class, 'notification']);


//ratings
Route::get('post', [RatingController::class, 'posts'])->name('post');
Route::post('post', [RatingController::class, 'postPost'])->name('posts.post');
Route::get('post/{post}/rate', [RatingController::class, 'show'])->name('posts.show');


//comment
//Route::get('/comment', [CommentController::class, 'index']);
//Route::post('posts/{post}/comments', [CommentController::class, 'store']);

//create category
Route::get('category', [CategoryController::class, 'index']);
Route::get('category/create', [CategoryController::class, 'create']);
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');