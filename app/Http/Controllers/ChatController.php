<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Socket;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;

class ChatController extends Controller
{
    public function index(){
        // $user = DB::table('user')->where('id',Auth::id())->get();
        // $chat = DB::table('chat')->where('id',Auth::id())->get();
        return view('welcome');
    }


    public function store(Request $request){
        $chat = new Chat();
        $chat->message = $request->message;
        $chat->save();
    }
}