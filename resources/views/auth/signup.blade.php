<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/simple_1.1/dark/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jun 2017 07:45:41 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Signup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

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

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h3 class="text-uppercase font-bold m-b-0">Sign Up</h3>
                                </div>
                                <br>
                                <div class="account-content">
                                    @if (session('errors'))
                                        <div class="alert alert-errors" role="alert">
                                            {{ session('errors') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal" action="{{ route('user.registration') }}" method="POST">
                                        @csrf
                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="name">Name</label>
                                                <input class="form-control" type="text" id="name" placeholder="Enter name">
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" id="email" placeholder="Enter email">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" id="password" placeholder="Enter password">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="confirm_password">Confirm Password</label>
                                                <input class="form-control" type="password" id="confirm_password" placeholder="Confirm Password">
                                                @if ($errors->has('confirm_password'))
                                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="phone_number">Phone Number</label>
                                                <input class="form-control" type="integer" id="phone_number" placeholder="+91">
                                                @if ($errors->has('phone_number'))
                                                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="login" class="text-dark m-l-5">Sign In</a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/simple_1.1/dark/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jun 2017 07:45:41 GMT -->
</html>