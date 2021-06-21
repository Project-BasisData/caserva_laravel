@extends('layouts.header')
@section('title', 'Home')
@section('content')
@section('titleSection')
@stack('css')
@stack('head')

<section id="title">
    @endsection

    <header>
        <!-- Nav Bar -->

        <nav class="navbar fixed-top navbar-expand-lg">
            <a class="navbar-brand" href=""><img src="img/logo.png" alt="" /></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"><i class="fas fa-bars fa-1x"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav menu">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto login">
                    <li class="nav-item login-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item login-item">
                        <a href="register.html" class="get-started-btn scrollto">Get Started</a>
                    </li>
                </ul>
                </ul>
            </div>
        </nav>
    </header>

    <!-- CONTENT YANG NEMPEL SAMA NAVBAR DI AWAL -->

    <section>
        <a href="#about" class="back-btn scrollto">Back to menu</a>
        <h3 class="reservasi-title" style="left: 40.5%;">BERHASIL RESERVASI</h3>
    </section>


    <section class="search">
        <div class="col-lg-3 side">
            <img src="img/phone.png" alt="" class="girl-img" />
        </div>

        <div class="col-lg-6 searching-section" style="margin-top: 5% ;">
            <h3>SAMPAI BERTEMU</h3>
            <p>di</p>
            <h4>NAMA CAFE</h4>

            <img src="img/reservasi-cafe.png" class="cafe-img" alt="" />
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <p>4/5 reviews</p>
            </div>
        </div>

        <div class="col-lg-3 side">
            <img src="img/girl2.png" alt="" class="plant-img" />
        </div>
    </section>


</section>

<style>
    footer{
        display: none;
    }
</style>



@endsection