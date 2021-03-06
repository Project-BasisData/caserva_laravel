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
        <h3 class="reservasi-title">REVIEWS</h3>
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
    </section>
    <div class="col-md-6 col-md-offset-3" style="max-width: 100%;">
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
    </div>

    <div class="card">
        <div class="row no-gutters">
            <div class="card-body">
                <div class="rating">

                    <div style="display: flex;">
                        <h6 class="col-lg-6">Nama Reviewer</h6>
                        <div class="col-lg-6" style="text-align: end;">
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
                        <div class="col-lg-6" style="text-align: end;">
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
                        <div class="col-lg-6" style="text-align: end;">
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


                <div class="rating">

                    <div style="display: flex;">
                        <h6 class="col-lg-12">Nama Reviewer</h6>
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
                        <h6 class="col-lg-12">Nama Reviewer</h6>
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
                        <h6 class="col-lg-12">Nama Reviewer</h6>
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
                        <h6 class="col-lg-12">Nama Reviewer</h6>
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
                        <h6 class="col-lg-12">Nama Reviewer</h6>
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

            </div>
        </div>
    </div>
</section>


<style>
    footer {
        display: none;
    }
</style>

@endsection