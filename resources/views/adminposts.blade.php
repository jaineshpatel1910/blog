@extends('layouts.admin')

@section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Ratings</h3>
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
                                                <p>
                                                    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $post->averageRating }}" data-size="xs" disabled="">
                                                </p>
                                                <br>
                                            <p><a href="/admin/rate/{{$post->id}}" class="btn btn-primary">View</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endsection