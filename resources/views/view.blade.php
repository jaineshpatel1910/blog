@extends('layouts.base')

@section('content')
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">My Profile</h3>
                            </div>
                        </div>
                        <div class="row">
                            
                                <div class="col-md-12">
                                    <div class="p-0 text-center">
                                        <div class="member-card">
                                            <div class="thumb-xl member-thumb m-b-10 center-block">
                                                <img src="assets/images/users/avatar-3.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                                <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                            </div>
                                            {{-- <div class="">
                                                <h4 class="m-b-5"></h4>
                                                <p class="text-muted">@webdesigner</p>
                                            </div>
                                            <p class="text-muted m-t-10">
                                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                            </p> --}}
                                            <button type="button" class="btn btn-primary m-t-10">Follow</button>
                                            <button type="button" class="btn btn-custom m-t-10">Message</button>

                                        </div>

                                    </div> <!-- end card-box -->

                                </div>
                            
                        </div>
                        <div class="row">
                            @foreach ($user as $user)
                                <div class="col-md-4">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h4>Personal Information</h4>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="m-b-20">
                                                        <strong>Full Name</strong>
                                                        <br>
                                                        <p class="text-muted">{{ $user->name }}</p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted">{{ $user->email }}</p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Mobile</strong>
                                                        <br>
                                                        <p class="text-muted">{{ $user->phone_number }}</p>
                                                    </div>
                                                    <div class="about-info-p m-b-0">
                                                        <strong>Location</strong>
                                                        <br>
                                                        <p class="text-muted">USA</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                            <!-- Social -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Social</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="social-links list-inline m-b-0">
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
                                            <!-- Social -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endsection