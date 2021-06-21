@extends('layouts.header')
@section('title', 'Home')
@section('content')
@section('titleSection')
@stack('css')
@stack('head')
@endsection


</header>

<!-- CONTENT YANG NEMPEL SAMA NAVBAR DI AWAL -->

<!-- DISINI CONTENT -->
<section>
    <a href="#about" class="back-btn scrollto">Back to menu</a>
</section>

<section class="container-fluid">
    <div class="col-lg-12 kategori-title">
    </div>

    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-5 card-img">
                <h2 class="section-title">Nama Cafe</h2>
                <img src="img/kategori.png" class="card-img-top h-100" alt="..." />
                <h6>kategori : kategori1, kategori2</h6>
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>4/5 reviews</p>
                    </div>
                    <p class="card-text">
                        Diperuntukkan para pengunjung yang ingin merasa lebih bebas karena bisa melihat pemandangan luar dengan atap berupa langit dan bintang-bintang. Memiliki konsep yang cukup minimalis asalkan mempunyai ruangan outdoor yang cukup luas untuk penataan kursi dan meja. </p>
                    <a href="http://localhost:8000/reservasi" class="get-started-btn scrollto">Reservasi sekarang</a>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="container-fluid">
    <div class="col-lg-12 lokasi-title">
        <h2 class="section-title">LOKASI</h2>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.520830401878!2d112.58410744999999!3d-7.9336343000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57caac891b8c6711!2sBukit%20Delight!5e0!3m2!1sid!2sid!4v1622957930181!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <h6>Jl. Joyo Agung No.1, Tlogomas, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144</h6>

</section>


<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 lokasi-title">
            <h2 class="section-title">MENU</h2>
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" >

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Hot Chocolate.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Hot Chocolate</h4>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Rice Bowl.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Rice Bowl</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Noodle.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Noodle</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Coffe.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Coffe</h4>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Tea.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Tea</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/burger.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Burger</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/French Fries.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">French Fries</h4>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Matcha.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Matcha</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Spaghetti.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Spaghetti</h4>
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

<section class="container-fluid">
    <div class="col-lg-12 kategori-title">
        <div class="col-lg-12">
        <h2 class="section-title">REVIEWS</h2>
        </div>
    </div>

    <div class="card">
        <div class="row no-gutters">
            <div class="card-body">
                <div class="rating">
                    
                    <div style="display: flex;">
                    <h6 class="col-lg-6">Nama Reviewer</h6>
                    <div class="col-lg-6" style= "text-align: end;">
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </div>

                    </div>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    4/5 reviews
                </div>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                <p></p>
                <div class="rating">
                    <div style="display: flex;">
                    <h6 class="col-lg-6">Nama Reviewer</h6>
                    <div class="col-lg-6" style= "text-align: end;">
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </div>

                    </div>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    4/5 reviews
                </div>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                <p></p>
                <div class="rating">
                    <div style="display: flex;">
                    <h6 class="col-lg-6">Nama Reviewer</h6>
                    <div class="col-lg-6" style= "text-align: end;">
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </div>

                    </div>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    4/5 reviews
                </div>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
            </div>

        </div>
    </div>
    <a href="http://localhost:8000/review" class="get-started-btn scrollto">Tambah Reviews</a>

<!-- <div class="col-md-6 col-md-offset-3" style="max-width: 100%;">
  <div id="accordion">
    <div class="panel list-group">
      <a href="#web_dev" data-parent="#accordion" data-toggle="collapse" class="list-group-item" style="border: none;">
        <h4 class="get-started-btn scrollto">Tambah Review</h4>
      </a>
      <div class="collapse" id="web_dev">
        <form style="margin: 2% 20%;">
  <div class="form-group">
    <label for="exampleFormControlSelect1">RATING</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Review</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <a href="#" class="get-started-btn scrollto">submit</a>

</form>
      </div>
    </div>
  </div>
</div> -->
</section>

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 lokasi-title">
            <h2 class="section-title">GALLERY</h2>
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators1" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators1" class="carousel slide" >

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Cafe1.jpg">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Cafe2.jpg">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Cafe3.jpg">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Cafe4.jpg">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Cafe5.jpg">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-cafe-fluid" alt="100%x280" src="img/Cafe6.jpg">
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

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



@endsection