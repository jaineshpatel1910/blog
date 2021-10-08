<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/simple_1.1/dark/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jun 2017 07:45:41 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Blogger Form</title>
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
                        <h3 class="header-title m-t-0 m-b-20">Form</h3>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="jumbotron">
                        <h1>To become blogger</h1>
                    </div>

                    <div class="col-md-12">
                        <form action="{{ url('/formstore') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <lable for="type_of_blog">Type of blog</lable>
                                <input type="text" name="type_of_blog" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <lable for="experience">Experience</lable>
                                <input type="integer" name="experience" class="form-control" required>
                            </div>

                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
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