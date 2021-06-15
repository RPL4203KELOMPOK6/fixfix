<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- IMPORT JQUERY -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <!-- IMPORT POPPER FOR DROPDOWN NAVBAR -->
  <script src="assets/js/popper.min.js"></script>
  <!-- IMPORT POPPER FOR BOOTSTRAP JS NAVBAR -->
  <script src="assets/js/bootstrap.min.js"></script>


  <!-- IMPORT BOOTSTRAP -->
  <link rel='stylesheet' type='text/css' media='screen' href="assets/style/bootstrap.css">
  <!-- IMPORT OWL CAROUSEL -->
  <link rel="stylesheet" href="assets/style/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/style/owl.theme.default.min.css">
  <link rel='stylesheet' type='text/css' media='screen' href="assets/style/animate.css">
  <script src="assets/js/owl.carousel.min.js"></script>

  <!-- IMPORT FONT AWESOME LIBRARY ICON -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- IMPORT MANUAL STYLE -->
  <link rel='stylesheet' type='text/css' media='screen' href="assets/style/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light container ">
    <a class="navbar-brand" href="/home"><img src="assets/img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse  navbar-nav navbar-center mx-auto" id="navbarSupportedContent">
      <form class="form-inline my-2 mx-auto  my-lg-0">
        <div class="input-group">
          <input class="form-control py-0  search-bar border border-dark rounded-pill" id="example-search-input">
          <span class="input-group-append">
            <button id="filtersubmit" class="border-0"><i class="fa fa-search search-icon text-body"></i></button>

        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item active mx-md-3 mx-0">
            <a class="nav-link d-flex" href="/cart"><img src="assets/img/Group.png" alt=""><span class="d-block text-body mt-1 ml-2 font-weight-bold d-md-none">Cart</span></a>
        </li>
        <li class="nav-item mx-md-3 mx-0">
            <a class="nav-link d-flex" href="#"><img src="assets/img/favorite-24px 1.png" alt=""><span class="d-block  text-body mt-1 ml-2 font-weight-bold d-md-none">Favorite</span></a>
        </li>
        <li class="nav-item mx-md-3 mx-0">
            <a class="nav-link d-flex" href="#"><img src="assets/img/clarity_notification-solid-badged.png" alt=""><span class="d-block  text-body mt-1 ml-2 font-weight-bold d-md-none">Notification</span></a>
        </li>
        @yield('login')
      </ul>
    </div>

  </nav>

  <ul class="nav justify-content-center primary-bg">
    <li class="nav-item mx-md-4">
      <a class="nav-link  text-white font-weight-bold" href="/home">Beranda</a>
    </li>
    <li class="nav-item mx-md-4">
      <a class="nav-link  text-white font-weight-bold dropdown-toggle "  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" href="#">Kategori</a>
      <div class="dropdown-menu category-menu primary-bg dropdown-menu-right pb-5 px-3" style="left: -130px;">
        <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">New Album</a>
        <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">Favourite Album </a>
        <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">Top Seller</a>
        <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">Old Album</a>
        <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">Korean Album</a>
      </div>
    </li>
    <li class="nav-item mx-md-4">
      <a class="nav-link  text-white font-weight-bold" href="#">Tentang Kami</a>
    </li>
  </ul>


  @yield('container')

  </section>
  <section class="footer mt-3 primary-bg text-white">
    <div class="container pt-4">
      <div class="d-flex justify-content-between flex-column flex-md-row">
        <div>
          <h3 class="font-weight-bold ">Alboem</h3>
          <p class="font-weight-bold"><i>Our tim menyediakan layanan platform jual beli album</i></p>
        </div>
        <div class="mr-5 mt-3 mt-md-0">
          <h5 class="font-weight-bold ">Find Us</h5>
          <a href="#"> <img src="assets/img/facebook-24px 1.png" alt=""></a>
          <a href="#" class="ml-2"> <img src="assets/img/youtube 1.png" alt=""></a>
          <a href="#" class="ml-2"> <img src="assets/img/Frame.png" alt=""></a>

        </div>
      </div>
      <div class="d-flex mt-5">
        <p class="font-weight-bold">Address</p>
        <span class="font-weight-bold ml-2">: Perumahan Buah Batu H44</span>
      </div>
      <div class="d-flex  mt-2">
        <p class="font-weight-bold">Phone</p>
        <span class="font-weight-bold ml-2">: 08123456789</span>
      </div>
      <div class="d-flex mt-2">
        <p class="font-weight-bold">Email</p>
        <span class="font-weight-bold ml-2">: rpl4203kelompok6@gmail.com</span>
      </div>

    </div>
    <div class="disclaimer mt-5">
      <p class="text-center py-1 font-weight-light content"><i class="far fa-copyright mr-1"></i> 2020. Powered by Alboem</p>
    </div>
  </section>
  <script src="assets/js/main.js"></script>
</body>
</html>