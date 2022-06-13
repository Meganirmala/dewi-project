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
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-bg-primary">
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
                  <a class="nav-link" href="{{ route('contact') }}" data-bs-toggle="">Contact</a>
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
    <section class="wrapper bg-soft-green">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <div class="post-category text-line">
                <a href="#" class="hover" rel="category"></a>
              </div>
              <!-- /.post-category -->
              <h1 class="display-1 mb-4">{{ $article_detail->judul }}<h1>
              <!-- /.post-meta -->
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog single mt-n17">
              <div class="card">
                <figure class="card-img-top"><img src="{{ asset('article_dewi/' . $article_detail->foto) }}" alt="" /></figure>
                <div class="card-body">
                  <div class="classic-view">
                    <article class="post">
                      <div class="post-content mb-5">
                        <h2 class="h1 mb-4">{{ $article_detail->judul }}</h2>
                        <p>{!! $article_detail->konten !!}</p>
                      </div>
                      <!-- /.post-content -->
                    </article>
                    <!-- /.post -->
                  </div>
                  <!-- /.classic-view -->
                  <hr />
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.blog -->
          </div>
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