<!DOCTYPE html>
<html lang="en" class="wow-animation">
<head>
    <!-- Site Title -->
    <title>Klinik Boungeville Ciekek Pandeglang</title>
    <meta charset="utf-8"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CRoboto+Slab:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  
</head>
<body>

<div id="page-preloader">
  <div class="contpre">
    <div class="two"></div>
  </div>
</div>

<!-- The Main Wrapper -->
<div class="main-wrapper">

    <!--/////////////////////////// HEADER \\\\\\\\\\\\\\\\\\\\\\\\\\\-->
    <header class="main-header">
      <!-- Nav -->
      <div class="nav">
        <div class="nav-toggle"><span></span></div>
        <div class="nav-outside">
          <div class="nav-inside">
            <a href="./" class="nav-logotype">
              <img src="img/logo.png" width="133" height="35" alt=""/>
            </a>
            <ul class="nav-links">
              <li class="active"><a href="#home"><span>Home</span></a></li>
              <li><a href="#one"><span>Tentang Kami</span></a></li>
              <li><a href="#two"><span>Features</span></a></li>
              <li><a href="#three"><span>Pricing</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
       
    <!--/////////////////////////// CONTENT \\\\\\\\\\\\\\\\\\\\\\\\\\\-->
    <main class="main-container">

      <!--========== HEADER CONTENT ==========-->
      <section id="home">
        <div class="page-header-01 bg-gray">
          <div class="container text-md-left">
            <div class="row flex-center">
              <div class="col-md-7 flex-item-middle">
                <h2 class="text-primary">SISTEM PAKAR</h2>
                <h3>Identifikasi Kerusakan Kulit Wajah Untuk Proses Penggunaan Cream Asthetic and Anti Aging.</h3>
                <div class="btn-block">
                  <a href="{{ url('/login') }}" class="btn btn-md btn-primary">Masuk Sistem</a>
                  <a href="#" class="btn btn-md btn-default"><span>Tentang Sistem</span></a>
                </div>
              </div>
              <div class="col-xs-8 col-sm-7 col-md-5 wow fadeInRight">
              	&nbsp;
                <img src="{{ asset('/img/image.jpg') }}" width="535" height="623" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="one" class="p-50 p-lg-100">
        <div class="container text-md-left">
          <div class="row flex-center">
            <div class="col-xs-8 col-sm-7 col-md-6 wow fadeInLeft">
              <img src="{{ asset('/img/images.jpg') }}" width="406" height="463" alt="">
            </div>
            <div class="col-md-6 flex-item-middle">
              <h4>klinik bougenville Ciekek Pandeglang</h4>
              <p class="text-light">Multiply of may one they're our winged female god brought saw be kind given it meat given fill. The sea isn't green. They're us won't rule signs them upon bearing had female creeping.Cattle multiply life.</p>
              <a href="#" class="btn btn-md btn-default mt-30"><span>learn more</span></a>
            </div>
          </div>
        </div>
      </section>

    </main>
    
    <!--/////////////////////////// FOOTER \\\\\\\\\\\\\\\\\\\\\\\\\\\-->
    <footer id="footer" class="main-footer all-white">
      <div class="container container-large">
        <div class="row flex-center">
          <div class="col-xl-10">
            <div class="show-sm-flex flex-justify flex-middle">
              <div class="text-sm-left">
                <p>@Kokitindo {{ date('Y') }}</p>
              </div>
              <div class="text-sm-right mt-10 mt-sm-0">
                <ul class="list-inline">
                  <li><a href="#" class="icon icon-sm fa fa-facebook"></a></li>
                  <li><a href="#" class="icon icon-sm fa fa-google-plus"></a></li>
                  <li><a href="#" class="icon icon-sm fa fa-twitter"></a></li>
                  <li><a href="#" class="icon icon-sm fa fa-instagram"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
</div>

<!-- Core Scripts -->
<script src="{{ url('/js/minified.js') }}"></script>

<!-- Additional Functionality Scripts -->
<script src="{{ url('/js/main.js') }}"></script>

</body>
</html>