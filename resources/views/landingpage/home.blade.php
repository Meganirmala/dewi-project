<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="elemis">
  <title>Desa Wisata Bedalewun</title>
  <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <p href="demo15.html">Desa Bedalewun</p>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="./index.html"><img src="{{ asset('frontend/assets/img/logo-light.png') }}" srcset="{{ asset('frontend/assets/img/logo-light@2x.png 2x') }}" alt="" /></a>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link" href="{{ route('landing') }}" data-bs-toggle="">Home</a>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{ route('about') }}" data-bs-toggle="">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{ route('articles') }}" data-bs-toggle="">Article</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link" href="{{ route('contactDesa') }}" data-bs-toggle="">Contact</a>
                  <!--/.dropdown-menu -->
                </li>
              </ul>
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper bg-dark">
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('frontend/assets/img/photos/view-adat.jpg') }}">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2 class="display-1 fs-45 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Desa Wisata Bedalewun</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Desa Bedalewun, Kecamatan Ile Boleng, Kabupaten Flores Timur, Nusa Tenggara Timur</p>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </section>
    <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
        <div class="shape bg-soft-yellow rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
        <figure class="rounded"><img src="{{ asset('frontend/assets/img/photos/bedalewun-adat.jpg') }}" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <h2 class="display-4 mb-3">Desa Wisata Bedalewun</h2>
        @foreach ($about as $data )
        <p class="lead fs-lg">{!! $data->description !!}</p>
        @endforeach

        <!--/.row -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
    <!-- /section -->
    <section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
        <h2 class="fs-15 text-uppercase text-primary text-center">Our News</h2>
        <h3 class="display-6x mb-6 text-center">Here are the latest news from our blog that got the most attention.</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="position-relative">
      <div class="shape bg-dot green rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
      <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            @foreach ($articles as $data )

            <div class="swiper-slide">
              <div class="item-inner">
                <article>
                  <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="{{ route('articleDetail', $data->id) }}"> <img src="{{ asset('article_dewi/'. $data->foto) }}" alt="" /></a>
                      <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <div class="post-category text-line">
                          <a href="#" class="hover" rel="category"></a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('articleDetail', $data->id) }}">{{ $data->judul }}</a></h2>
                      </div>
                      <!-- /.post-header -->
                      {{-- <div class="post-content">
                        <p>Tarian hedung adalah tarian tradisonal sejenis tarian perang masyarakat Adonara, Flores Timur, NTT. Nama hedung sendiri diambil dari kata hedung, yang berarti menang. Sehingga dapat diartikan bahwa tarian hedung adalah tarian kemenangan.</p>
                      </div> --}}
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($data->tanggal_posting)->format('d/m/Y') }}</span></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>
                <!-- /article -->
              </div>
              <!-- /.item-inner -->
            </div>
            @endforeach
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.position-relative -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-19 pb-14 pt-md-16 pb-md-21">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
            <div class="shape bg-dot leaf rellax w-22 h-15" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
            <figure class="rounded"><img src="{{ asset('frontend/assets/img/photos/slider.jpg') }}" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="display-4 mb-8">Contact Us to Start Your Journey!</h2>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Address</h5>
                <address>Desa Bedalewun, Kec. Ile Boleng, <br class="d-none d-md-block" />Kabupaten Flores, Nusa Tenggara Timur</address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
              </div>
              <div>
                @foreach ($contact as $data )
                <h5 class="mb-1">Phone</h5>
                <p>{{ $data->telepon }}</p>
                @endforeach
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-overlay bg-image" style="background-size: cover;" data-image-src="{{ asset('frontend/assets/img/photos/upacara-adat.jpg') }}">
      <div class="container py-14 py-md-16 text-center">
        <div class="row">
          <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
            <h2 class="display-4 mb-23 light">Enjoy the interesting expreince in Bedalewun Villages Now!</h2>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-4">
          <div class="widget">
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <div class="col-md-12 col-lg-8">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white align-">Get in Touch</h4>
            @foreach ($contact as $data )
            <address>{{ $data->alamat }}</address>
            <a href="mailto:nerenwatotenapokdarwis@gmail.com">{{ $data->email }}</a><br />{{ $data->telepon }}
            @endforeach
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
</body>

</html>