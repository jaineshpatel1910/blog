@extends('layouts.base')

@section('content')          
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Create Blogs</h3>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="jumbotron">
                                <h1>Create blog</h1>
                            </div>

                            <div class="col-md-12">
                                <form action="{{ url('post/store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <lable for="title">Title</lable>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <lable for="body">Body</lable>
                                        <textarea name="body" class="form-control" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <label for="category">Choose category:</label>
                                            <select name="category_id" id="">
                                                @foreach ($category as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    

                                    <button class="btn btn-primary" type="submit">Create</button>
                                </form>
                            </div>
                        </div>
                       
					</div>
                    <!-- end container -->

                    @endsection