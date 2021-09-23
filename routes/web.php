<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});


//home page blog
Route::get('/', [AuthController::class, 'blog']);

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
//view comments to admin
Route::get('/view-comments', [ViewController::class, 'view']);



//posts CRUD
Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('posts/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store']);
Route::get('posts/{post}/edit', [PostController::class, 'edit']);
Route::put('posts/{post}', [PostController::class, 'update']);
Route::get('/posts-view', [PostController::class, 'view']);

//for admin dashboard-viewblog
Route::get('/admin-blog', [PostController::class, 'blog']);

Route::get('posts/{post}', [PostController::class, 'show']);
Route::get('posts/{post}/comment', [PostController::class, 'comment']);
Route::post('posts/{post}/comments', [PostController::class, 'comments']);
 
Route::delete('posts/{post}', [PostController::class, 'destroy']);
Route::get('admin-edit', [PostController::class,'']);
Route::get('/search1', [PostController::class, 'search']);

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


//
Route::get('test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});
Route::get('/note', function () {
    return view('home');
});

//ratings
Route::get('post', [RatingController::class, 'posts'])->name('post');
Route::post('post', [RatingController::class, 'postPost'])->name('posts.post');
Route::get('post/{id}', [RatingController::class, 'show'])->name('posts.show');


//comment
//Route::get('/comment', [CommentController::class, 'index']);
//Route::post('posts/{post}/comments', [CommentController::class, 'store']);

//Blogs
// Route::get('/blogs', [BlogController::class, 'index']);
// Route::get('/blogs/create', [BlogController::class, 'create']);
// Route::post('/blogs/store', [BlogController::class, 'store'])->name('blogs.store');