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
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{ asset('frontend/assets/img/photos/bedalewun.jpg') }}">
      <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 mb-3 text-white">Get in Touch</h1>
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="{{ route('landing') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
      <div class="container pb-11">
        <div class="row mb-14 mb-md-16">
          <div class="col-xl-10 mx-auto mt-n19">
            <div class="card">
              <div class="row gx-0">
                <div class="col-lg-6 align-self-stretch">
                  <div class="map map-full rounded-top rounded-lg-start">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13732.833999352133!2d123.21991822038221!3d-8.385734903497944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dab7a26e4c3c6e3%3A0xdb83fe405027837e!2sBedalewun%2C%20Kec.%20Ile%20Boleng%2C%20Kabupaten%20Flores%20Timur%2C%20Nusa%20Tenggara%20Tim.!5e1!3m2!1sid!2sid!4v1654773852256!5m2!1sid!2sid" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>                  </div>
                  <!-- /.map -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                  <div class="p-10 p-md-11 p-lg-14">
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                      </div>
                      <div class="align-self-start justify-content-start">
                        <h5 class="mb-1">Address</h5>
                        @foreach ($contact as $data )
                        <address>{{ $data->alamat }}</address>
                      </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                      </div>
                      <div>
                        <h5 class="mb-1">Phone</h5>
                        <p>{{ $data->telepon }}</p>
                      </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                      <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                      </div>
                      <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p class="mb-0"><a href="mailto:nerenwatotenapokdarwis@gmail.com" class="link-body">{{ $data->email }}</a></p>
                      </div>
                      @endforeach

                    </div>
                    <!--/div -->
                  </div>
                  <!--/div -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

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