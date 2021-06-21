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
                                                    <img class="img-cafe-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Special title treatment
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
                                                    <img class="img-cafe-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Special title treatment
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
                                                    <img class="img-cafe-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Special title treatment
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
                                                    <img class="img-cafe-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Special title treatment
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
                                                    <img class="img-cafe-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Special title treatment
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
                                                    <img class="img-cafe-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6" />
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            Special title treatment
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
