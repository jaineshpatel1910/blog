@extends('layouts.admin')
@section('content')           
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Blogs</h3>
                            </div>
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
                                                <span class="btn btn-sm btn-success">{{ $post->category_name }}</span>
                                            </p></h4>
                                            <br>
                                        <p><a href="posts/{{$post->id}}" class="btn btn-primary">Show</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> 
                    <!-- end container -->
                    @endsection