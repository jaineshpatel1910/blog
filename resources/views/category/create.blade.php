@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Create Category</h1>
        </div>

        <div class="col-md-12">
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <lable for="category_name">Category</lable>
                    <input type="text" name="category_name" class="form-control" required>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Create</button>
                
            </form>
        </div>
    </div>
    @endsection