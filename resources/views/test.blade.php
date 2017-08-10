<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bliss Jaspis</title>

    <!-- Bootstrap core CSS -->
    <link href="{{  asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html">Bliss Jaspis</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Advent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('home.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="site-heading">
                        <h1>Welcome!</h1>
                        <hr class="small">
                        <span class="subheading">Blog pribadi yang ingin memberikan sesuatu!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer class="footer">
        <div class="gambar">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-4">
                        <h6>ABOUT</h6>
                        <ul class="list-unstyled link-footer">
                            <li>
                               We’ve been working on Go Analytics for the better part of a decade and are super proud of what we’ve created. If you’d like to learn more, or are interested in a job, contact us anytime at
                            </li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <h6>RESOURCES</h6>
                        <ul class="list-unstyled link-footer">
                            <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                            <li><a href="#">Disclaimer</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h6>CONTACT</h6>
                        <ul class="list-unstyled link-footer">
                            <li><a href="mailto:bliss@jaspis.me">Mail Me!</a></li>
                            <li><a href="https://bliss.jaspis.me">About Me!</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright text-muted">Copyright &copy; Bliss Jaspis 2017</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
