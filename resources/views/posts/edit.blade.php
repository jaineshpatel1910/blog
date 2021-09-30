@extends('layouts.admin')

@section('content')
                <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Edit Post</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form action="/posts/{{$post->id}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="">Post Title</label>
                                                <input type="text" name="title" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Post Body</label>
                                                <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
                                            </div>

                                            <!-- <div class="form-group">
                                                <label for="">Category</label>
                                                <input type="text" name="category" class="form-control">
                                            </div> -->
                                            
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container -->

                    @endsection