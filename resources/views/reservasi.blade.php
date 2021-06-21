@extends('layouts.header')
@section('title', 'Home')
@section('content')
@section('titleSection')
@stack('css')

<section id="title" class="reservasi" style="padding: 0; margin-top: 0">
    @endsection


    </header>

    <!-- CONTENT YANG NEMPEL SAMA NAVBAR DI AWAL -->

    <section>
        <a href="#about" class="back-btn scrollto">Back to menu</a>
        <h3 class="reservasi-title">RESERVASI</h3>
    </section>

    <section class="reservasi-content">
        <h2>NAMA CAFE 1</h2>
        <img src="img/reservasi-cafe.png" class="cafe-img" alt="" />
        <div class="rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>4/5 reviews</p>
        </div>
        <hr />

        <div class="jumlah">
            <h4 style="margin-bottom: 15px">Jumlah Kursi</h4>
            <div class="kursi">
                <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                <h4 style="margin: 0 5px">0</h4>
                <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
            </div>
        </div>

        <div class="pilihmenu">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 lokasi-title">
                            <h2>Makanan</h2>
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators1" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/burger.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">Burger</h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Rice Bowl.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">Rice Bowl</h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Noodle.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">Noodle</h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/French Fries.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            French Fries
                                                        </h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Spaghetti.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Spaghetti
                                                        </h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Fried Chicken.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Fried Chicken
                                                        </h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="pilihmenu">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 lokasi-title">
                            <h2>Minuman</h2>
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators2" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Hot Chocolate.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">Hot Chocolate</h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Tea.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">Tea</h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Matcha.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">Matcha</h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Coffe.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Coffe
                                                        </h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Es Jeruk.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Es Jeruk
                                                        </h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Espresso.jpg" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Espresso
                                                        </h4>
                                                    </div>
                                                    <div class="jumlah">
                                                        <div class="kursi">
                                                            <a href=""><img src="img/minus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                            <h4 style="margin: 0 5px">0</h4>
                                                            <a href=""><img src="img/plus.svg" alt="" style="width: 30px; padding: 5px" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- end pilih menu -->

        <hr>

        <section class="container-fluid" style="text-align:center">
            <h2>Reservasi pada tanggal : </h2>
            <div>
                <input class="contact-input" type="search" placeholder="tanggal" aria-label="Search" />
            </div>
            <p></p>
            <h2>Pukul</h2>
            <div>
                <input class="contact-input" type="search" placeholder="pukul" aria-label="Search" />
            </div>
            <p></p>
            <p></p>
            <button type="submit" class="btn get-started-btn">
                <a href="http://localhost:8000/reservasi-berhasil" style="text-decoration: none; color: black;"> Submit</a>
            </button>
        </section>

    </section>
</section>


<style>
    footer{
        display: none;
    }
</style>

@endsection
