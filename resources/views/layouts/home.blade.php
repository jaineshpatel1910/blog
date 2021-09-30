<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Laravel Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

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
            @include('layouts.header')
           
            <div class="page-contentbar">
                
                    @yield('content')

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">38%</strong>.
                        </div>
                        <div>
                            <strong>Appstane</strong> - Copyright &copy;
                            <script>document.write(new Date().getFullYear())</script>
                        </div>
                    </div> <!-- end footer -->                
                <!-- End #page-right-content -->
            </div>
            <!-- end .page-contentbar -->
        </div>

       

        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

        <!-- App Js -->
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

</body>
</html>