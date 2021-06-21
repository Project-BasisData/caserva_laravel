@extends('layouts.header')
@section('title', 'Home')
@section('content')
@section('titleSection')
@stack('css')
@stack('head')

<section id="title" class="reservasi" style="padding: 0; margin-top: 0">

    @endsection

    </header>
    <!-- CONTENT YANG NEMPEL SAMA NAVBAR DI AWAL -->

    <section class="reservasi-content">
        <h2 class="masuk">MASUK</h2>
        <section class="container-contact-fluid">
            <div>
                <input class="login-input" type="search" placeholder="Username" aria-label="Search" />
            </div>
            <p></p>
            <div>
                <input class="login-input" type="search" placeholder="Password" aria-label="Search" />
            </div>
            <p></p>
            <button type="submit" class="btn get-started-btn">
                Masuk
            </button>
            <p></p>
            <h6>Baru di CASERVA? Buat Akun</h6>
        </section>

    </section>
</section>






@endsection