@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2">Chat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                <form action="{{ url('chat/{user->id}/store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    
                                    <input type="hidden" name="sender_id" value="{{ Auth::id() }}">
                                    <input type="hidden" name="reciever_id" value="{{ $user->id }}">
                                    <input type="hidden" name="reciever_name" value="{{ $user->name }}">
                                    
                                    <div class="container">
                                        <div class="row chat-row">
                                            <div class="chat-content">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="chat-section">
                                                <div class="chat-box">Write your message here
                                                    <input class="chat-input bg-white" name="message" contenteditable="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
</div>
@endsection