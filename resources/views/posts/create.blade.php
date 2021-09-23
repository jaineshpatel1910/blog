<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/simple_1.1/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jun 2017 07:42:47 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>BlogNet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css')}}">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{ asset('assets/css/metisMenu.min.css') }}" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="" class="logo">
                        <img src="{{ asset('assets/images/logo_sm.png') }}" alt="logo" class="logo-lg" /> BlogNet
                            <img src="{{ asset('assets/images/logo_sm.png') }}" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="/">Home</a></li>
                                <!-- <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li> -->
                            </ul>

                            

                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-bell-o bg-custom"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">Updates</h5>
                                                        <p class="m-0">
                                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-user-plus bg-danger"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New user registered</h5>
                                                        <p class="m-0">
                                                            <small>You have 10 unread messages</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                                <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
                                           </div>
                                        </li>
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/view"><i class="ti-user m-r-10"></i> Profile</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/logout"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                            

                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="/admin-dashboard"><i class="ti-home"></i> Dashboard </a></li>

                                <!-- <li><a href="ui-elements.html"><span class="label label-custom pull-right">11</span> <i class="ti-paint-bucket"></i> UI Elements </a></li> -->

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-light-bulb"></i> Blogs <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="/home">Create Blogs</a></li>
                                        <li><a href="/posts-view">Blogs</a></li>
                                    </ul>
                                </li>

                                <!-- <li><a href="typography.html"><i class="ti-spray"></i> Typography </a></li> -->

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-pencil-alt"></i> Forms <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/register">Register</a></li>
                                    </ul>
                                </li>

                                <!-- <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-menu-alt"></i> Tables <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="tables-basic.html">Basic tables</a></li>
                                        <li><a href="tables-advanced.html">Advanced tables</a></li>
                                    </ul>
                                </li> -->

                                <!-- <li><a href="charts.html"><span class="label label-custom pull-right">5</span> <i class="ti-pie-chart"></i> Charts </a></li>

                                <li><a href="maps.html"><i class="ti-location-pin"></i> Maps </a></li> -->

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> View<span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="/show">Users</a></li>
                                        <li><a href="/view-comments">Comments</a></li>
                                        <!-- <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                                        <li><a href="pages-blank.html">Blank page</a></li>
                                        <li><a href="pages-404.html">Error 404</a></li>
                                        <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                        <li><a href="pages-session-expired.html">Session Expired</a></li> -->
                                    </ul>
                                </li>

                                <!-- <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-widget"></i> Extra Pages <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="extras-timeline.html">Timeline</a></li>
                                        <li><a href="extras-invoice.html">Invoice</a></li>
                                        <li><a href="extras-profile.html">Profile</a></li>
                                        <li><a href="extras-calendar.html">Calendar</a></li>
                                        <li><a href="extras-faqs.html">FAQs</a></li>
                                        <li><a href="extras-pricing.html">Pricing</a></li>
                                        <li><a href="extras-contacts.html">Contacts</a></li>
                                    </ul>
                                </li> -->

                                <li>
                                    <a href="/chat" aria-expanded="true"><i class="mdi mdi-wechat"></i> Chat </a>
                                    <!-- <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                                        <li><a href="javascript: void(0);" aria-expanded="true">Level 1.2 <span class="fa arrow"></span></a>
                                            <ul class="nav-third-level nav" aria-expanded="true">
                                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="post" aria-expanded="true"><i class="mdi mdi-assistant"></i> Ratings </a>
                                </li>
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Create Blogs</h3>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="jumbotron">
                                <h1>Create blog</h1>
                            </div>

                            <div class="col-md-12">
                                <form action="/post" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <lable for="title">Title</lable>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <lable for="body">Body</lable>
                                        <textarea name="body" class="form-control" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <lable for="category">Category</lable>
                                        <input type="text" name="category" class="form-control" required>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Create</button>
                                    
                                </form>
                            </div>
                        </div>
                       
					</div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">38%</strong>.
                        </div>
                        <div>
                            <strong>Appstane</strong> - Copyright &copy;
                            <script>document.write(new Date().getFullYear())</script>
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

        <!--Morris Chart-->
		<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>

        <!-- Dashboard init -->
		<script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

        <!-- App Js -->
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>


    </body>

<!-- Mirrored from coderthemes.com/simple_1.1/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jun 2017 07:43:14 GMT -->
</html>