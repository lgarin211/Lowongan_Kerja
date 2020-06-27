<!-- JUDUL -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PT.BONET UTAMA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/font-awesome.min.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  </head>
  <!-- NAVBAR -->
  <body>

    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand " href="index.html"><strong>PT.BONET UTAMA</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form-pendaftaran"> Lowongan Pekerjaan</a>
              </li>

<!-- END NAVBAR -->

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <div class="top-shadow"></div>

{{-- CONTENT --}}


    @yield('content')


{{-- FOOTER --}}
<footer id="main-footer" class="bg-light py-4">
  <div class="container">
      <div class="row">
          <div class="col-md-3 text-center text-md-left">
              <a>
                  <img src="{{ asset('assets/images/logo2.png') }}" style="height:60px;">
              </a>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.Aperiam cumque, esse modi maxime veniam nulla delectus dolorem
              </p>
          </div>
                    <div class="col-md-3 text-center text-md-left">
                        <h5>Contact Info</h5>
                        <div class="text-nowrap"><i class="ion-location text-primary  mr-3"></i>
                             Jl. Padjajaran No.88 F Bogor Utara
                        </div>
                        <div class="text-nowrap"><i class="ion-ios-email text-primary mr-2"></i>
                             info@bonet.co.id
                        </div>
                        <div class="text-nowrap"><i class="ion-ios-telephone text-primary mr-2"></i>
                             (0251) 8337555
                        </div>
                    </div>

                    <div class="col-md-3 text-center text-md-left">
                        <h5>Quick Links</h5>

                        <div><a href="/" >
                          <span class="fa fa-caret-right fa-fw mr-2"></span>Home</a>
                        </div>
                        <div><a href="/form-pendaftaran">
                          <span class="fa fa-caret-right fa-fw mr-2"></span>Form Lowongan Pekerjaan</a>
                        </div>
                    </div>

                    <div class="col-md-3 text-center text-md-left">
                        <h5>Search Us</h5>
                            <div><a href="https://www.facebook.com/profile.php?id=100005284935705&fref=ts" >
                                <span class="fa fa-facebook-official fa-fw mr-3"></span>Facebook</a>
                            </div>
                            <div><a href="https://twitter.com/BonetUtama"  >
                                <span class="fa fa-twitter fa-fw mr-3"></span>Twitter</a>
                            </div>
                            <div><a href="https://www.google.com/search?q=PT.+Bonet+Utama&oq=PT.+Bonet+Utama&aqs=chrome..69i57j0l4j69i60j69i61l2.6722j0j7&sourceid=chrome&ie=UTF-8" >
                              <span class="fa fa-google fa-fw mr-3"></span>Google</a>
                            </div>
                            <div><a href="http://bonet.co.id/">
                              <span class="fa fa-globe fa-fw mr-3"></span>Website</a>
                            </div>

                    </div>

                    <div class="col-md-12  text-center md-left">
                        <p> Copyright &copy; <script>document.write(new Date().getFullYear());</script>  All rights reserved </p>
                    </div>
                </div>
      </div>
  </div>
</footer>

      <!-- END footer -->

      <!-- loader -->
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

      <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>

      <script src="{{ asset('assets/js/main.js') }}"></script>

      <script>
        $('#upload_file').on('change', function () {
            // get file name
            var fileName = $(this).val();
            var fileName = fileName.replace(/^.*\\/, "");

            // replace choose file
            $(this).next('.custom-file-label').html(fileName);
        })
        $('#upload_foto').on('change', function () {
            // get image name
            var fileName = $(this).val();
            var fileName = fileName.replace(/^.*\\/, "");

            // replace choose file
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>

    </body>
  </html>


