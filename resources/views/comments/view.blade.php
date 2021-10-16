@extends('layouts.base')

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
                                                    <th>User Name</th>
                                                    <th>Post Title</th>
                                                    <th>Comment</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($comments as $comment)
                                                    <tr>
                                                        <td>{{ $comment->name }}</td>
                                                        <td>{{ $comment->title }}</td>
                                                        <td>{{ $comment->body }}</td> 
                                                        <td>
                                                            <form action="/comment/{{$comment->id}}" method="post" class="d-inline">
                                                                {{ csrf_field() }}
                                                                @method('DELETE')
                                                                <br>
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                            </form>
                                                        </td>
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