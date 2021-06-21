@extends('layouts.header')
@section('title', 'Home')
@section('content')
@section('titleSection')
@stack('css')
@stack('head')

<section id="title" style="background-image: url('img/background.png')">
  @endsection

  <div class="col-lg-12 heading">
    <h1 class="big-heading">Coffee-ing yourself in cafe</h1>
    <h4 class="big-heading-desc">
      Pahit atau tidaknya secangkir kopi, tergantung bagaimana dan dengan
      siapa kamu menikmatinya.
    </h4>
  </div>
  </header>

</section>

<!-- DISINI CONTENT -->
<section class="container-fluid search">
  <div class="col-lg-3 side">
    <img src="img/girl.png" alt="" class="girl-img" />
  </div>

  <div class="col-lg-6 searching-section">
    <h3 class="search-title">Temukan cafe favoritmu di Malang!</h3>
    <p>Pastikan Anda menemukan cafe yang diinginkan</p>
    <div>
      <input class="search-input" type="search" placeholder="Cari cafe" aria-label="Search" />
    </div>
  </div>

  <div class="col-lg-3 side">
    <img src="img/plants.png" alt="" class="plant-img" />
  </div>
</section>

<section class="container-fluid">
  <div class="col-lg-12 kategori-title">
    <h2 class="section-title">KATEGORI</h2>
  </div>

  <div class="card">
    <div class="row no-gutters">
      <div class="col-md-5 card-img">
        <img src="img/kategori.png" class="card-img-top h-100" alt="..." />
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">OUTDOOR</h5>
          <p class="card-text">
            Diperuntukkan para pengunjung yang ingin merasa lebih bebas karena bisa melihat pemandangan luar dengan atap berupa langit dan bintang-bintang. Memiliki konsep yang cukup minimalis asalkan mempunyai ruangan outdoor yang cukup luas untuk penataan kursi dan meja. </p>
          <a href="http://localhost:8000/cafe" class="get-started-btn scrollto">Lihat cafe</a>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="row no-gutters">
      <div class="col-md-5 card-img kategori2-img">
        <img src="img/kategori2.png" class="card-img-top h-100" alt="..." />
      </div>
      <div class="col-md-7">
        <div class="card-body
              <h5 class=" card-title">VINTAGE</h5>
          <p class="card-text">
            Konsep vintage bergaya suatu daerah tertentu bisa membuat Anda nyaman dan dipadu dengan sajian menu makanan dan minuman yang selaras. Selain memiliki ruang indoor bergaya vintage, juga memanfaatkan ruang outdoor, yang membuat Anda betah lama-lama di cafe. </p>
          <a href="#" class="get-started-btn scrollto">Lihat cafe</a>
        </div>
      </div>
      <div class="col-md-5 card-img kategori2-img2">
        <img src="img/kategori2.png" class="card-img-top h-100" alt="..." />
      </div>
    </div>
  </div>


  <div class="card">
    <div class="row no-gutters">
      <div class="col-md-5 card-img">
        <img src="img/kategori3.png" class="card-img-top h-100" alt="..." />
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">LIVE MUSIC</h5>
          <p class="card-text">
            Di cafe live music di Malang ini, Anda tidak hanya disuguhkan dengan hidangan lezat dari cafe, namun juga sambil ditemani alunan musik yang membuat suasana cafe selalu hidup. Sangat cocok untuk dinikmati bersama teman atau keluarga. </p>
          <a href="#" class="get-started-btn scrollto">Lihat cafe</a>
        </div>
      </div>
    </div>
  </div>

</section>


<section class="container-fluid">
  <div class="col-lg-12 lokasi-title">
    <h2 class="section-title">LOKASI TERPOPULER</h2>
  </div>

  <div class="card-group">
    <div class="card">
      <img class="card-img-top" src="img/lokasi.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Idjen Boulevard</h5>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="img/lokasi2.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Jl.Raya Dermo</h5>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="img/lokasi3.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Jl.Soekarno-Hatta</h5>
      </div>
    </div>
  </div>

  <div class="card-group card-group2">
    <div class="card">
      <img class="card-img-top" src="img/lokasi4.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Klojen</h5>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="img/lokasi5.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Lowokwaru</h5>
      </div>
    </div>
  </div>

  </div>

</section>


<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3">CAFE TERFAVORIT </h3>
        </div>
        <div class="col-6 text-right">
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
                                    <img class="img-fluid" alt="100%x280" src="img/cafe.png">
                                    <div class="card-body">
                                        <h4 class="card-title">Bataputi Coffe House</h4>
                                        <p class="card-text">Berdiri sejak tahun 2015, Bataputi Coffe House terletak didalam kawasan tengah Perumahan Araya dengan latar bantaran Sungai Bango, serta menwarkan view dan venue outdoor yang unik.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/cafe2.png">
                                    <div class="card-body">
                                        <h4 class="card-title">Bukit Delight</h4>
                                        <p class="card-text">Bukit Delight merupakan cafe yang berada di daerah perbukitan Kota Malang. Karena berada di kawasan perbukitan dan lebih tinggi daripada daerah pusat Kota Malang, Bukit Delight memberikan suasana yang menarik, dimana pengunjung dapat menatap langsung kearah Gunung Panderman dan Gunung Banyak.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/cafe3.png">
                                    <div class="card-body">
                                        <h4 class="card-title">Golden Heritage Koffie</h4>
                                        <p class="card-text">Setelah sebelumnya memiliki pabrik kopi sendiri, Golden Heritage mendirikan sebuah cafe sejak 2011 lalu. Cafe ini memiliki konsep interior yang didesain mirip pabrik kopi membuat kesan pengunjung minum kopi langsung dari pabriknya.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/Dialoogi Space & Coffee.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Dialoogi Space & Coffee</h4>
                                        <p class="card-text">Dialoogi Space & Coffe merupakan lokasi kuliner dan work space dengan aneka kopi dan snacks sebagai sajian utamanya. Beroperasional sejak Desember 2019, Dialoogi Space & Coffe memiliki konsep semi industrial dan modern.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/Kotask Kaffe.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Kotask Kaffe</h4>
                                        <p class="card-text">Kotask Kaffe merupakan lokasi kuliner yang menyajikan menu western hingga asian sebagai sajian utamanya. Beroperasional sejak November 2020, Kotask Kaffe berkonsep minimalis dengan banyak akses warna putih di seluruh bangunannya.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/Nakoa Cafe.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Nakoa Cafe</h4>
                                        <p class="card-text">Nakoa Cafe merupakan lokasi kuliner yang menyajikan aneka kopi dan minuman non kopi sebagai sajian utamanya. Berdiri sejak akhir tahun 2019, Nakoa Cafe adalah salah satu cafe yang buka selama 24 jam non stop.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/Kopi Moro Seneng.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Kopi Moro Seneng</h4>
                                        <p class="card-text">Kopi Moro Seneng merupakan lokasi kuliner yang menyajikan kopi dan sego sambel sebagai sajian utamanya. Kopi Moro Seneng berkonsep sebagai warung jadul bergaya perkampungan Jawa dengan bangunan Joglo, serta lumbung padi khas rumah tradisional Jawa.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/Kopi Studio24.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Kopi Studio24</h4>
                                        <p class="card-text">Kopi Studio24 merupakan lokasi kuliner yang menyajikan berbagai minuman kopi dan non kopi yang dikemas dalam kemasan praktis sebagai sajian utamanya. Berada di lantai dua Studio Bakso, Kopi Studio24 hadir untuk memfasilitasi pengunjung yang tidak hanya ingin sekedar menikmati sajian bakso saja.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/LAB Coffe & Eatery.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">LAB Coffee & Eatery</h4>
                                        <p class="card-text">LAB Coffee & Eatery merupakan lokasi kuliner yang menyajikan berbagai varian minuman kopi dan menu Asia sebagai sajian utamanya. Beroperasional sejak 1 Januari 2021, LAB Coffee & Eatery berkonsep sebagai coffe shop yang mengusung tema industrial clean, terdiri dari 4 lantai.</p>
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

@endsection