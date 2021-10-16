@extends('layouts.base')

@section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Ratings</h3>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-4">
                                    <div class="panel panel-color panel-primary">
                                        <div class="panel-heading">
                                            <h4>{{$post->title}}</h4>
                                        </div>
                                        <div class="panel-body">
                                            <form action="/post" method="POST">
                                                {{ csrf_field() }}
                                                <div class="card">
                                                    <div class="container-fliud">
                                                        <div class="wrapper row">
                                                            <div class="details col-md-6">
                                                                <h3 class="product-title">{{$post->body}}</h3>
                                                                <br>
                                                                <div class="rating">Review
                                                                    <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" data-size="xs">
                                                                    <input type="hidden" name="id" value="{{ $post->id }}">
                                                                    <br/>
                                                                    <button class="btn btn-success">Submit Review</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endsection