@extends('layouts.base')

@section('content')
                    <div class="container">
                        <div class="row">
                            <h3 class="header-title m-t-0 m-b-20">Chat</h3>
                            <div class="col-sm-4">
                                <form action="/searchchat" method="GET" role="search">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <input type="search" name="searchchat" method="GET" class="form-control" placeholder="Search">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($user as $user)
                                <div class="col-lg-4">
                                    <div class="panel panel-color panel-primary">
                                        <div class="panel-heading">
                                            <h4>{{ $user->name }}</h4>
                                        </div>
                                        <div class="panel-body">
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
                                                                <div class="chat-box"><h5>Write your message here</h5>
                                                                    <input class="chat-input bg-white" name="message" contenteditable="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endsection