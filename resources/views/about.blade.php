@extends('layouts.header')
@section('title', 'Home')
@section('content')
@section('titleSection')
@stack('css')
@stack('head')

<section id="title" class="about-head pattern" style="background-color: #C6CCCC;">
  @endsection

  </header>


  <!-- CONTENT YANG NEMPEL SAMA NAVBAR DI AWAL -->

  <section>
    <div>
      <img src="img/line.png" alt="" class="line-img">
    </div>
    <div class="what-line">
      <h1>What is</h1>
      <img src="img/logo.png" alt="" class="caserva-about-img">
      <img src="img/ask.png" alt="" class="ask">
    </div>
    <!-- <div class="wave">
            <img src="img/wave.png" alt="" class="wave-img">
        </div> -->
  </section>

</section>

<section class="contents" style="height: fit-content; background-color: #C6CCCC;">
        <div>
                <h2>
          <img src="assets/img/logo.png" alt="" class="caserva-img"></h2>
          <h5>Merupakan sebuah platform berbasis web yang menyediakan informasi dan reservasi cafe yang ada di Malang. 
Memberikan kemudahan pada pelanggan cafe yang ingin memesan tempat tanpa perlu mendatangi cafe terlebih dahulu, dengan cara reservasi.</h5>
            <h5>Dan menyajikan berbagai informasi mengenai cafe-cafe sekitar Malang Raya dengan info yang terupdate, dari detail lokasi hingga menu.</h5>
        </div>

        <div style="margin-top: 10%;">
          <h2>WHY WE MADE THIS?</h2>
          <h5>Caserva didirikan pada tahun 2021. Misi Caserva yaitu menjadi perantara antara pecinta kopi dan meja cafe, setiap hari di seluruh cafe yang berpartisipasi melalui situs web daring. </h5>
          <h5>Caserva didukung oleh Universitas Muhammadiyah Malang dan hanya tersedia di Malang Raya saja. Pengguna dapat memilih untuk bersantap di mana saja, mulai dari cafe kelas atas hingga jejaring makanan yang populer, sementara pihak cafe mendapatkan pengunjung untuk kursi-kursi kosong selama jam-jam lengang.</h5>
        </div>

        <div style="margin-top: 10%;">
          <h2>WHAT MAKES US DIFFERENT FROM OTHERS</h2>
          <h5>Perbedaan dengan platform reservasi lain, yakni kami memberikan informasi-informasi tambahan pada setiap cafe di Malang. Dengan memberikan info yang diperlukan dapat membuat pelanggan lebih mantap untuk melakukan reservasi pada cafe tersebut.</h5>
          <h5>Kemudian kami juga berfokus pada cafe-cafe yang berada di Malang saja, dengan begitu para pecinta kopi yang mungkin dari luar kota dapat mengetahui cafe mana saja yang direkomendasikan di kota Malang.</h5>
          <img src="assets/img/balloon.svg" alt="" class="balloon">
        </div>

      </section>

<section style="height: fit-content; background-color: #C6CCCC; padding-bottom: 5%;">
  <div class="container bootdey">
    <div class="row">
      <div class="col-12 text-center">
        <div class="section-title mb-4 pb-2">
          <p class="text-muted para-desc mx-auto mb-0">OUR TEAM</p>
        </div>
      </div>
      <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
      <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
        <div class="team text-center rounded p-3 py-4">
          <img src="img/ajeng.jpg" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
          <div class="content mt-3">
            <h4 class="title mb-0">Ajeng Cahyaning Prameswari</h4>
            <small class="text-muted">Front-End Developer</small>
          </div>
        </div>
      </div>
      <!--end col-->

      <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
        <div class="team text-center rounded p-3 py-4">
          <img src="img/aul.jpg" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
          <div class="content mt-3">
            <h4 class="title mb-0">Aulia Lintang Ayu</h4>
            <small class="text-muted">UI/UX Design</small>
          </div>
        </div>
      </div>
      <!--end col-->

      <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
        <div class="team text-center rounded p-3 py-4">
          <img src="img/iqbal.jpg" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
          <div class="content mt-3">
            <h4 class="title mb-0">M Iqbaludin Z</h4>
            <small class="text-muted">Back-End Developer</small>
          </div>
        </div>
      </div>
      <!--end col-->

      <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
        <div class="team text-center rounded p-3 py-4">
          <img src="img/wira.jpg" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
          <div class="content mt-3">
            <h4 class="title mb-0">Yudistira Dwi Nugraha</h4>
            <small class="text-muted">Back-End Developer</small>
          </div>
        </div>
      </div>
      <!--end col-->

      <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
        <div class="team text-center rounded p-3 py-4">
          <img src="img/habib.jpg" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
          <div class="content mt-3">
            <h4 class="title mb-0">Muh Habib Ahnaf</h4>
            <small class="text-muted">Front-End Developer</small>
          </div>
        </div>
      </div>
      <!--end col-->
    </div>
    <!--end row-->
  </div>
</section>

</section>






@endsection