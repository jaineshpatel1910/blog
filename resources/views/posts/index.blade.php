@extends('layouts.admin')

@section('content')
                    <div class="container">
                        <div class="row">
                            <h3 class="header-title m-t-0 m-b-20">Create Blogs</h3>
                            <div class="col-sm-4">
                                <form action="/admin/search1" method="GET" role="search">
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <input type="search" name="search1" method="GET" class="form-control" placeholder="Search by title and body">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            {{-- <div class="col-md-4">
                                <form role="dropdown" action="/admin/category-search" method="GET">
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <input type="dropdown" name="category_name" class="form-control" placeholder="Search by category">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><span class="caret"></span></button>  
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}

                            <div class="col-md-4">
                                <form role="dropdown" action="/admin/category-search" method="GET">
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <label for="category">Search category: &nbsp;</label>
                                            <select name="category_name" id="">
                                                @foreach ($category as $category)
                                                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                            &nbsp;
                                            <button class="btn btn-primary" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                        <br>

                        <a href="admin/posts/create" class="btn btn-primary mb-2">Create Post</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="admin/category/create" class="btn btn-primary mb-2">Create Category</a>
                        <br>
                        <br>
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-lg-4">
                                    <div class="panel panel-color panel-primary">
                                        <div class="panel-heading">
                                            <h4>{{ $post->title }}</h4>
                                        </div>
                                        <div class="panel-body">
                                            <h4><p>{{ $post->body }}</p></h4>
                                            <h4><p>
                                                    Category:
                                                    <span class="btn btn-sm btn-success">{{ $post->category_name }}</span>
                                                </p></h4>
                                                <br>
                                                <p><a href="/admin/posts/{{$post->id}}" class="btn btn-primary">Show</a></p><br>
                                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                                                <form action="posts/{{$post->id}}" method="post" class="d-inline">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')
                                                    <br>
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
					</div>
                    <!-- end container -->

                    @endsection