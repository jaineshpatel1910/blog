@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
        jQuery(document).ready(function($){
            $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        })
        </script>

        <style>
            body {
                overflow-x: hidden;
            }
            #sidebar-wrapper {
                min-height: 100vh;
                margin-left: -15rem;
                -webkit-transition: margin .25s ease-out;
                -moz-transition: margin .25s ease-out;
                -o-transition: margin .25s ease-out;
                transition: margin .25s ease-out;
            }
            #sidebar-wrapper .sidebar-heading {
                padding: 0.875rem 1.25rem;
                font-size: 1.2rem;
            }
            #sidebar-wrapper .list-group {
                width: 15rem;
            }
            #page-content-wrapper {
                min-width: 100vw;
            }
            #wrapper.toggled #sidebar-wrapper {
                margin-left: 0;
            }
            @media (min-width: 768px) {
                #sidebar-wrapper {
                margin-left: 0;
                }
                #page-content-wrapper {
                    min-width: 0;
                    width: 100%;
                }
                #wrapper.toggled #sidebar-wrapper {
                    margin-left: -15rem;
                }
            }
        </style>    
    </head>
    <body>
        <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Welcome to Laravel Blog</div>
                    <div class="list-group list-group-flush">
                        <a href="/dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                        <a href="/posts-view" class="list-group-item list-group-item-action bg-light">Blogs</a>
                        <a href="/view" class="list-group-item list-group-item-action bg-light">Profile</a>
                        <a href="/chat" class="list-group-item list-group-item-action bg-light">Chat</a>
                        <!-- <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a> -->
                    </div>
                </div>
                <!-- /#sidebar-wrapper -->
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                <!-- <li class="nav-item active">
                                <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
                                </li> -->
                                <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                                </li> -->
                                <li class="nav-item dropdown">

                                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div> -->

                                    <!-- <div class="container mt-5" style="max-width: 500px"> -->
                                    <!-- <div class="d-grid"> -->
                                    <a href="{{ route('logout') }}">Log-out</a>
                                    <!-- </div>   -->
                                    <!-- </div> -->
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <br>
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">{{ __('Dashboard') }}</div>
                                        <div class="card-body">
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif

                                            {{ __('You are logged in!') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    
                    
                    

                </div>
                <!-- /#page-content-wrapper -->
            </div>
        <!-- /#wrapper -->
    </body>
</html>

@yield('content')
@endsection