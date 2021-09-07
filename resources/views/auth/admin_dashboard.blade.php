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

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="" class="logo">
                            <img src="assets/images/logo_sm.png" alt="logo" class="logo-lg" /> BlogNet
                            <img src="assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
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

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/app.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/view-admin"><i class="ti-user m-r-10"></i> Profile</a></li>
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
                                        <li><a href="/admin-blog">Blogs</a></li>
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
                                    <a href="/chat" aria-expanded="true"><i class="ti-share"></i> Chat </a>
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
								<div class="card-box widget-inline">
									<div class="row">
										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-primary mdi mdi-access-point-network"></i> <b data-plugin="counterup">4</b></h3>
												<p class="text-muted">Total blogs by admin</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-custom mdi mdi-airplay"></i> <b data-plugin="counterup">27</b></h3>
												<p class="text-muted">Total comments</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i> <b data-plugin="counterup">4</b></h3>
												<p class="text-muted">Total users</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center b-0">
												<h3 class="m-t-10"><i class="text-danger mdi mdi-cellphone-link"></i> <b data-plugin="counterup">4</b></h3>
												<p class="text-muted">Total blogs</p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
                        <!--end row -->


                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0">Total Revenue</h4>
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Series A</h5>
                                            </li>
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-muted"></i>Series B</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="dashboard-bar-stacked" style="height: 300px;"></div>
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0">Sales Analytics</h4>
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Mobiles</h5>
                                            </li>
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-info"></i>Tablets</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="dashboard-line-chart" style="height: 300px;"></div>
                                </div>
                            </div> 
                        </div>  -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Recent Blogs</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <th>Blog Title</th>
                                                    <th>Created at</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($posts as $post)
                                                    <tr>
                                                        <td>{{ $post->title }}</td>
                                                        <td>{{ $post->created_at }}</td>  
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Users</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <!-- <th style="min-width: 95px;">
                                                        <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                                            <input id="action-checkbox" type="checkbox">
                                                            <label for="action-checkbox"></label>
                                                        </div> -->
                                                        <!--<div class="btn-group dropdown">-->
                                                            <!--<button type="button" class="btn btn-default btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>-->
                                                            <!--<ul class="dropdown-menu" role="menu">-->
                                                                <!--<li><a href="#">Action</a></li>-->
                                                                <!--<li><a href="#">Another action</a></li>-->
                                                                <!--<li><a href="#">Something else here</a></li>-->
                                                                <!--<li class="divider"></li>-->
                                                                <!--<li><a href="#">Separated link</a></li>-->
                                                            <!--</ul>-->
                                                        <!--</div>-->
                                                    <!-- </th> -->
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Is admin</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($user as $user)
                                                    <tr>
                                                            <td>{{ $user->id }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ $user->phone_number }}</td>
                                                            <td>{{ ($user->is_admin)?'Yes':'No' }}</td>  
                                                    </tr>
                                                @endforeach

                                                <!-- <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox2" type="checkbox">
                                                            <label for="checkbox2"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Tomaslau
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">tomaslau@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="#" class="text-dark"><b>356</b></a> </b>
                                                    </td>

                                                    <td>
                                                        01/11/2003
                                                    </td>

                                                </tr> -->

                                                <!-- <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox1" type="checkbox">
                                                            <label for="checkbox1"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Chadengle
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">chadengle@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="#" class="text-dark"><b>568</b></a> </b>
                                                    </td>

                                                    <td>
                                                        01/11/2003
                                                    </td>

                                                </tr> -->

                                                <!-- <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox3" type="checkbox">
                                                            <label for="checkbox3"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Stillnotdavid
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">stillnotdavid@dummy.com</a>
                                                    </td>
                                                    <td>
                                                        <b><a href="#" class="text-dark"><b>201</b></a> </b>
                                                    </td>

                                                    <td>
                                                        12/11/2003
                                                    </td>

                                                </tr> -->

                                                <!-- <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox4" type="checkbox">
                                                            <label for="checkbox4"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Kurafire
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">kurafire@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="#" class="text-dark"><b>56</b></a> </b>
                                                    </td>

                                                    <td>
                                                        14/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox5" type="checkbox">
                                                            <label for="checkbox5"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Shahedk
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">shahedk@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="#" class="text-dark"><b>356</b></a> </b>
                                                    </td>

                                                    <td>
                                                        20/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox6" type="checkbox">
                                                            <label for="checkbox6"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-6.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Adhamdannaway
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">adhamdannaway@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="#" class="text-dark"><b>956</b></a> </b>
                                                    </td>

                                                    <td>
                                                        24/11/2003
                                                    </td>

                                                </tr> -->


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Recent Blogs</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Title</th>
                                                    <th>Body</th>
                                                    <th>Category</th>
                                                    <th>Created at</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($posts as $post)
                                                    <tr>
                                                        <td>{{ $post->id }}</td>
                                                        <td>{{ $post->title }}</td>
                                                        <td>{{ $post->body }}</td> 
                                                        <td>{{ $post->category }}</td> 
                                                        <td>{{ $post->created_at }}</td> 

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

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">38%</strong>.
                        </div>
                        <div>
                            <strong>Appstane</strong> - Copyright &copy; 2021
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/simple_1.1/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jun 2017 07:43:14 GMT -->
</html>