@extends('layouts.admin')

@section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Users</h3>
                                <form action="/search" method="GET" role="search">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <input type="search" name="search" method="GET" class="form-control" placeholder="Search">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div> <!-- form-group -->
                                </form>
                            </div>
                        </div>


                        
                        
                        <div class="row">
                            @foreach ($user as $user)
                            <div class="col-md-4">
                                <div class="text-center card-box">
                                    <!-- <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <h3 class="m-0 text-muted"><i class="mdi mdi-dots-horizontal"></i></h3>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Delete</a></li>
                                        </ul>
                                    </div> -->
                                    <div class="clearfix"></div>
                                    <div class="member-card">
                                        
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                        
                                            <img src="assets/images/users/avatar-3.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                            
                                            <i class="mdi mdi-information-outline member-star text-success" title="verified user"></i>
                                        </div>
                                        <div class="">
                                            <td>{{ $user->name }}</td>
                                            <br>
                                            <td>{{ $user->email }}</td>
                                        </div>
                                        
                                        <a href="/chat" class="btn btn-default btn-sm m-t-10">Message</a>
                                        <a href="user/{{$user->id}}/edit" class="btn btn-default btn-sm m-t-10">Edit</a>
                                        <br>
                                        <br>

                                        

                                        <ul class="social-links list-inline m-t-30">
                                            <li>
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            @endforeach
                        </div>
                        
                    </div>
                 
                    @endsection