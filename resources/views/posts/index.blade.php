@extends('layouts.admin')

@section('content')
                    
                    <div class="container">
                        <div class="row">
                        <h3 class="header-title m-t-0 m-b-20"></h3>
                            <div class="col-sm-4">
                                <form action="/search1" method="GET" role="search">
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <input type="search" name="search1" method="GET" class="form-control" placeholder="Search by title and body">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div> <!-- form-group -->
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form role="dropdown" action="/category-search" method="GET">
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <input type="dropdown" name="category" class="form-control" placeholder="Search by category">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><span class="caret"></span></button>  
                                            </div>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                        <br>

                        <a href="posts/create" class="btn btn-primary mb-2">Create Post</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="category/create" class="btn btn-primary mb-2">Create Category</a>
                        <br>
                        <br>
                        <div class="row">
                            @foreach ($post as $post)
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
                                                <p><a href="posts/{{$post->id}}" class="btn btn-primary">Show</a></p><br>
                                                <a href="posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
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