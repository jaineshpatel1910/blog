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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

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
            @include('layouts.baseheader')
            <div class="page-contentbar">
                @include('layouts.basesidebar')
                <div id="page-right-content">
                    @yield('content')
                    
                    <div class="footer">
                        @include('layouts.footer')
                    </div>
                </div>               
            </div>
            <!-- end .page-contentbar -->
        </div>

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
        <script type="text/javascript">
            $("#input-id").rating();
        </script>

</body>
</html>