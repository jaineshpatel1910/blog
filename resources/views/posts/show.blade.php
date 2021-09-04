@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br>
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$post->title}}</h2>
                    <br>
                    <div>
                        {{$post->body}}
                        <br>
                        Category: {{$post->category}}
                        <br>
                        <br>
                    </div>            
                </div>

            </div>
            <br>
            <br>

            <div class="card">
                <div class="card-header">&nbsp;Write your comment</div>
                <div class="card-body">
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
            <br>
            <br>

            @foreach ($comments as $comment)
            
                <div class="card">
                    <div class="card-header">
                        <p>User id: {{ $comment->user_id }}</p>
                    </div>

                    <div class="card-header">
                        <p>Post id: {{ $comment->post_id }}</p>
                    </div>

                    <div class="card-body">
                        <p>{{ $comment->body }}</p>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>

@endsection