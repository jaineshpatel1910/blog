<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function form(){
        return view('form');
    }

    public function formstore(Request $request){
        $request->validate([
            'type_of_blog' => '',
            'experience' => '',
        ]);
        $form = new Form();
        $form->type_of_blog = $request->type_of_blog;
        $form->experience = $request->experience;
        $form->created_by = auth()->user()->id;
        $form->save();
    }

    public function show(Form $form){
        $user = User::all();
        $form = Form::all();
        $form = Form::select("blogger.type_of_blog","blogger.experience","user.name","user.id","blogger.created_by")
                ->join("user","user.id","=","blogger.created_by")->get();
        return view('request.show', compact('form','user'));
    }

    public function edit(Request $request, Form $form){
        $request->validate([
            'accepted' => '',
        ]);
        $form->accepted = $request->accepted;
        $form->save();
    }

    public function update(Request $request, User $user){
        $request->validate([
            'is_admin' => '',
        ]);
        $user->is_admin = $request->is_admin;
        $user->save();
    }
}