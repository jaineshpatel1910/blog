<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Validator;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(){
        $user = DB::select('select * from user');
        return view('message.index', ['user' => $user]);
    }

    public function show(Request $message, User $user){
        $user = DB::table('user')->where('id',Auth::id())->get();
        return view('message.show', compact('user'),['message' => $message, 'user' => $user]);
    }

    public function store(Request $request){
        $validator=Validator::make($request->all(), [
            'message' => 'required',
            'sender_id' => 'required',
            'reciever_id' => 'required',
            'sender_name' => '',
            'reciever_name' => '',
        ]);

        $message = new Message();
        $message->message = $request->message;
        $message->sender_id = $request->sender_id;
        $message->reciever_id = $request->reciever_id;
        $message->sender_name = $request->sender_name;
        $message->reciever_name = $request->reciever_name;
        $message->save();  
    }
}