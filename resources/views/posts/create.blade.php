@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="jumbotron">
            <h1>Create a new blog</h1>
        </div>

        <div class="col-md-12">
            <form action="/post" method="post">

                <div class="form-group">
                    <lable for="title">Title</lable>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <lable for="body">Body</lable>
                    <textarea name="body" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <lable for="category">Category</lable>
                    <input type="text" name="category" class="form-control" required>
                </div>

                <button class="btn btn-primary" type="submit">Create a new blog</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection