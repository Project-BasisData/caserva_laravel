<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>CASERVA</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700;800&display=swap" rel="stylesheet" />

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('styles.css') }}">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap Scripts -->
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    
    
    @stack('css')
</head>

<body>
    @yield('titleSection')
    <header class="container-fluid">
        <!-- Nav Bar -->

        <nav class="navbar fixed-top navbar-expand-lg">
            <a class="navbar-brand" href=""><img src="img/logo.png" alt="" /></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"><i class="fas fa-bars fa-1x"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav menu">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto login">
                    <li class="nav-item login-item">
                        <a class="nav-link" href="http://localhost:8000/login">Login</a>
                    </li>
                    <li class="nav-item login-item">
                        <a href="http://localhost:8000/register" class="get-started-btn scrollto">Get Started</a>
                    </li>
                </ul>
                </ul>
            </div>
        </nav>

        @yield('content')

        <!-- FOOTER -->

        <footer>
            <div id="footer">
                <div class="container footer-kiri">
                    <div class="row text-left">
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-layout">
                                <h1>CASERVA</h1>

                                <b> <a href="#">ABOUT US</a> | </b>
                                <b> <a href="#">CONTACT US</a> </b>


                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-layout">
                                <h3>CATEGORY</h3>
                                <a href="" class="menu1">OUTDOOR</a> |
                                <a href="" class="menu1">VINTAGE </a> |
                                <a href="" class="menu1">LIVE MUSIC</a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-layout">
                                <h3>FOR OWNERS</h3>
                                <a href="" class="menu2">ADD CAFE </a> |
                                <a href="" class="menu2">CAFE PROFILE</a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6">
                            <div class="footer-layout">
                                <h3>FOR USERS</h3>
                                <a href="" class="menu3">PRIVACY </a> |
                                <a href="" class="menu3">TERM </a> |
                                <a href="" class="menu3">SECURITY </a> |
                                <a href="" class="menu3">SITEMAP </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </footer>

</body>

</html>