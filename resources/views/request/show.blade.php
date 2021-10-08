@extends('layouts.admin')

@section('content')
                    <div class="container">
                        <div class="row">
                            <h3 class="header-title m-t-0 m-b-20">Requests</h3>
                            {{-- <div class="col-sm-4">
                                <form action="/search" method="GET" role="search">
                                    <div class="form-group">
                                        <div class="input-group m-t-10">
                                            <input type="search" name="search" method="GET" class="form-control" placeholder="Search">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>

                        <div class="row">
                            @foreach ($form as $form)
                            <div class="col-md-4">
                                <div class="text-center card-box">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                        
                                            <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" class="img-circle img-thumbnail" alt="profile-image">
                                            
                                            <i class="mdi mdi-information-outline member-star text-success" title="verified user"></i>
                                        </div>
                                        <div class="">
                                            <td> ID: {{ $form->id }}</td>
                                            <br>
                                            <td> Name: {{ $form->name }}</td>
                                            <br>
                                            <td> Type of Blog: {{ $form->type_of_blog }}</td>
                                            <br>
                                            <td>Experience: {{ $form->experience }}</td>
                                        </div>

                                        <br>
                                        <form action="/makeblogger/{{ $form->id }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="is_admin" value="1" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
                                            
                                            <button type="submit" class="btn btn-success btn-bordered">Accept</button>
                                            
                                        </form>
                                        <br>
                                        <form action="/makeblogger/{{ $user->id }}/update" method="POST">
                                            @csrf
                                            <input type="hidden" name="accepted" value="1" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
                                            
                                            <button type="submit" class="btn btn-danger btn-bordered">Reject</button>
                                        </form>

                                        {{-- <a href="/makeblogger/{{ $form->id }}/edit" class="btn btn-default btn-sm m-t-10">Edit</a>
                                        <a href="/makeblogger/{{ $form->id }}/edit" class="btn btn-default btn-sm m-t-10">Edit</a> --}}
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