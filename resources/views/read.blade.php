@extends('layouts.welcome')

@section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <br>
                                <h3 class="header-title m-t-0 m-b-20">Read more</h3>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-4">
                                    <div class="panel panel-color panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{ $post->title }}</h3>
                                        </div>
                                        <div class="panel-body">
                                            <p>{{ $post->body }}</p>
                                            <p>
                                                By:
                                                <span class="btn btn-sm btn-success">{{ $post->name }}</span>
                                            </p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- end container -->
@endsection