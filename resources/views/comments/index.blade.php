@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">&nbsp;Write your comment</div>
        <div class="panel-body">
            <form action="{{ url('posts/{post->id}/comment') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}   

                <div class="form-group">
                    @foreach ($user as $user)
                        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}" class="form-control">
                    @endforeach
                </div>

                <div class="form-group">
                    @foreach ($posts as $post)
                        <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}" class="form-control">
                    @endforeach
                </div>

                <div class="form-group">
                    <textarea name="body" class="form-control" required></textarea>
                </div>
               

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Comment</button>
                </div>
            </form>
        </div> 
</div>
@endsection