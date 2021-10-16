@extends('layouts.base')

@section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Edit User</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="panel panel-color panel-primary">
                                    <div class="panel-heading">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <h4>Edit</h4>
                                    </div>
                                    <div class="panel-body">
                                        <form action="/user/{{$user->id}}" method="POST">
                                            @csrf
                                            <div class="switchery-demo">
                                                <input type="checkbox" name="is_admin" value="1" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" /> Make Admin
                                            </div><br>
                                            <input class="btn btn-success" type="submit" value="Submit">     
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>

                    <!-- end container -->
                    @endsection