@extends('layouts.app')

@section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Write Comments</h3>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-4">
                                <div class="panel panel-color panel-primary">
                                    <div class="panel-heading">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <h4>{{ $post->title }}</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h4><p>{{ $post->body }}</p></h4>
                                        <h4><p>
                                            Category:
                                            <span class="btn btn-sm btn-success">{{ $post->category_name }}</span>
                                        </p></h4>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <br>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="panel panel-color panel-primary">
                                    <div class="panel-heading">
                                        <h4>Write your comment</h4>
                                    </div>
                                    <div class="panel-body">
                                        <form action="{{ url('posts/{post->id}/comments') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}   

                                            <div class="form-group">
                                                @foreach ($user as $user)
                                                    <input type="hidden" name="user_id" value="{{ $user->id }}" class="form-control">
                                                @endforeach
                                            </div>
                        
                                            <input type="hidden" name="post_id" value="{{$post->id}}">

                                            <div class="form-group">
                                                <textarea name="body" class="form-control" required></textarea>
                                            </div>
                
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary"> Comment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            @foreach ($comments as $comment)
                                <div class="col-lg-4">
                                    <div class="panel panel-color panel-primary">
                                        <div class="panel-heading">
                                        @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <h4>Comments</h4>
                                        </div>
                                        <div class="panel-body">
                                            <h5><p>User id: {{ $comment->user_id }}</p></h5>
                                            <h5><p>Post id: {{ $comment->post_id }}</p></h5>
                                            <h5><p>Comment: {{ $comment->body }}</p></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endsection