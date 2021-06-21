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
        <div id="carouselExampleIndicators2" class="carousel slide">

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
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="img/cafe3.png">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="row">

                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>

                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="row">

                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>

                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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