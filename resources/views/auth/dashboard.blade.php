@extends('layouts.app')

@section('content')

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Blogs</h3>
                            </div>
                        </div>

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
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- <div class="row">
                                        @foreach ($posts as $post)
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    {{ $post->title }}
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span class="pull-right">
                                                        {{ $post->created_at->toDayDateTimeString() }}
                                                    </span>
                                                </div>
                                                <div class="panel-body">
                                                    <p>{{ $post->body }}</p>
                                                    <p>
                                                        Category:
                                                        <span class="btn btn-sm btn-success">{{ $post->category }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                        </div>  -->

                        

                    </div>
                    @endsection