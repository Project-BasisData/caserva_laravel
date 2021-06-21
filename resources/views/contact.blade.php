@extends('layouts.header')
@section('title', 'Home')
@section('content')
@section('titleSection')
@stack('css')
@stack('head')

<section id="title" style="background-image: url('img/contact.jpeg')">
    @endsection


    <div class="col-lg-12 heading">
        <h1 class="big-contact-heading" style="color:white;">HUBUNGI KAMI!</h1>
    </div>

    </header>
</section>

<!-- DISINI CONTENT -->
<section class="container-contact-fluid search">
    <div class="col-lg-3 side">
        <img src="img/girl.png" alt="" class="girl-img" />
    </div>
    <div class="col-lg-6 searching-section">
        <h3 class="contact-title">Anda memiliki pertanyaan, kritik, ataupun saran seputar layanan kami, silahkan tinggalkan pesan disini. Kami akan segera merespon pesan anda.</h3>
    </div>
    <div class="col-lg-3 side">
        <img src="img/plants.png" alt="" class="plant-img" />
    </div>
</section>

<section class="container-contact-fluid">
    <div class="col-lg-12 kategori-title">
        <h2>caserva@gmail.com | Caserva_info</h2>
    </div>
</section>

<section class="container-contact-fluid">
    <div>
        <input class="contact-input" type="search" placeholder="Nama" aria-label="Search" />
    </div>
    <p></p>
    <div>
        <input class="contact-input" type="search" placeholder="Email" aria-label="Search" />
    </div>
    <p></p>
    <div>
        <input class="pesan-input" type="search" placeholder="Pesan" aria-label="Search" />
    </div>
    <p></p>
    <button type="submit" class="btn get-started-btn">
        Submit
    </button>
</section>






@endsection