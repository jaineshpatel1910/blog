@extends('layouts.app')

@section('content')
                    <div class="container">
                        <div class="row">
                            <h3 class="header-title m-t-0 m-b-20">Blogs</h3>
                            <div class="col-sm-4">
                                <form action="/searchblog" method="GET" role="search">
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <input type="search" name="searchblog" method="GET" class="form-control" placeholder="Search by title or content">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- <div class="col-md-4">
                                <form role="dropdown" action="/category" method="GET">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <input type="dropdown" name="category" class="form-control" placeholder="Search by category">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><span class="caret"></span></button>  
                                            </div>
                                        </div>
                                    </div> 
                                </form>
                            </div> -->

                        
                        </div>
                        
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
                                                    <span class="btn btn-sm btn-success"></span>
                                                </p></h4>
                                                <br>
                                            <p><a href="posts/{{$post->id}}" class="btn btn-primary">Comment</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--end row -->
                    </div>
                    @endsection