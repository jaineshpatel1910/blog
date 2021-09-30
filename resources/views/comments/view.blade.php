@extends('layouts.admin')

@section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Comments</h3>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <th>User Id</th>
                                                    <th>Post Id</th>
                                                    <th>Comment</th>
                                                    <th>Created at</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($comments as $comment)
                                                    <tr>
                                                        <td>{{ $comment->user_id }}</td>
                                                        <td>{{ $comment->post_id }}</td>
                                                        <td>{{ $comment->body }}</td> 
                                                        <td>{{ $comment->created_at }}</td> 

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end container -->

                    @endsection