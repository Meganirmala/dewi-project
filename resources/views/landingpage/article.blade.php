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
          </a>
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
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('frontend/assets/img/photos/slider.jpg') }}">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2 class="display-1 fs-35 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">News of Bedalewun</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Welcome to our journal. Here you can find the latest news and articles.</p>
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
    <!-- /section -->
    <section class="wrapper bg-light wrapper-border">
      <div class="container inner py-8">
        <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
          <div class="col-lg-8 align-self-center">
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
          <div class="col-lg-8">
            <div class="blog classic-view">
            @foreach ($articles as $data )
              <article class="post">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a href="{{ route('articleDetail', $data->id) }}"><img src="{{ asset('article_dewi/'. $data->foto) }}" alt="" /></a>
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
                      <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="{{ route('articleDetail', $data->id) }}">{{ $data->judul }}</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>{!! substr($data->konten, 0, 400) !!}<a href="{{ route('articleDetail', $data->id) }}"> Read more</a></p>
                    </div>
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
              @endforeach
            </div>
           
          </div>
          <!-- /column -->
          <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
            <div class="widget">
              <h4 class="widget-title mb-3">Bedalewun News</h4>
              <p>Read our newest articles and news about our village </p>
              <nav class="nav social">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
              <!-- /.social -->
              <div class="clearfix"></div>
            </div>
          </aside>
          <!-- /column .sidebar -->
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
            <address>Desa Bedalewun, Kecamatan Ile Boleng, Kabupaten Flores Timur, Nusa Tenggara Timur</address>
            <a href="mailto:nerenwatotenapokdarwis@gmail.com">nerenwatotenapokdarwis@gmail.com</a><br />081-338-689-307
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