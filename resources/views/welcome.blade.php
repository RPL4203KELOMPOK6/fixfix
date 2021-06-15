@extends('layouts/main')

@section('title','Alboem')

@section('login')
  <li class="nav-item mx-md-3 mx-0">  
    <a class="nav-link font-weight-bold form-font text-body mt-1 text-center" href="login">Login</a>
  </li>
  <li class="nav-item mx-md-3  mx-0">
    <a class="nav-link font-weight-bold form-font text-body register-button mt-1 text-center" href="register">Daftar</a>
  </li>
@endsection

@section('container')
  <section>
    <!-- CAROUSEL HERO -->
    <div class="container">
      <div id="carousel-hero" class="owl-carousel owl-theme mt-5">
        <div class="item hero-img-carousel ">
          <div class="position-relative">
            <!-- GAMBAR -->
            <img class="w-100 " src="assets/img/highlight1 1.png" alt="">
            <!-- CAPTION -->
            <p class="text-white carousel-caption font-weight-bold">Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="item hero-img-carousel ">
          <div class="position-relative">
            <img class="w-100 " src="assets/img/highlight1 1.png" alt="">
            <p class="text-white carousel-caption font-weight-bold">Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="item hero-img-carousel ">
          <div class="position-relative">
            <img class="w-100 " src="assets/img/highlight1 1.png" alt="">
            <p class="text-white carousel-caption font-weight-bold">Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white position-relative">
    <img src="assets/img/Group 8901.png" class="wave w-auto d-none d-md-block position-absolute top-right" alt="">
    <img src="assets/img/Group 525.png" class="wave w-auto d-none d-md-block position-absolute bottom-left" alt="">

    <div class="container pb-big">
      <h3 class="font-weight-bold pt-5">Rekomendasi Produk</h3>
      <p>Spesial untuk anda</p>
      <div class="primary-bg  border-header mt-3"></div>
      <div class="row mt-medium">
        <div class="col-md-6">
          <img src="assets/img/Image.png" class="w-100" alt="">
          <h4 class="font-weight-bold mt-4">Lovesick Girls</h4>
          <p class="text-secondary">Lorem ipsum de amet</p>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <img src="assets/img/Image-1.png" class="w-100" alt="">
          <h4 class="font-weight-bold mt-4">Billie ellish</h4>
          <p class="text-secondary">Lorem ipsum de amet</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
          <img src="assets/img/examine1.png" class="w-100" alt="">
          <h5 class="font-weight-bold mt-4 ml-4">BE</h5>
          <p class="text-secondary  ml-4">BTS</p>
        </div>
        <div class="col-md-4">
          <img src="assets/img/examine2.png" class="w-100" alt="">
          <h5 class="font-weight-bold mt-4  ml-4">Lovesick Girls</h5>
          <p class="text-secondary  ml-4">Blackpink</p>
        </div>
        <div class="col-md-4">
          <img src="assets/img/examine3.png" class="w-100" alt="">
          <h5 class="font-weight-bold mt-4  ml-4">Lorem</h5>
          <p class="text-secondary  ml-4">EXO</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5">
    <div class="container bg-white rounded-lg shadow-lg py-3">
      <h2 class="text-center header-color font-weight-bold mt-3">Kenapa Alboem</h2>
      <div class="row">
        <div class="col-md-4">
          <img src="assets/img/dollar.png" class=" d-block mx-auto" alt="">
          <h4 class="text-center mt-4 font-weight-bold">Harga Terjangkau</h>
        </div>
        <div class="col-md-4">
          <img src="assets/img/transaction.png" class=" d-block mx-auto" alt="">
          <h4 class="text-center mt-4 font-weight-bold">Transaksi Mudah</h>

        </div>
        <div class="col-md-4">
          <img src="assets/img/secure.png" class=" d-block mx-auto" alt="">
          <h4 class="text-center mt-4 font-weight-bold">Transaksi Aman</h>
        </div>
      </div>

    </div>

<div class="container">
<h2 class="text-center header-color font-weight-bold mt-5">Testimonials</h2>
<div id="carousel-review" class="owl-carousel owl-theme mt-5" >
  <!-- TAMBAHKAN DIV CLASS ITEM BARU UNTUK MENAMBAHKAN REVIEW -->
  <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Dadang Konelo</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Seoul, Indonesia</small>
          </div>
            <div class="ml-auto">
            <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">"Terpercaya!"</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review">
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-1.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Wanda Wibisono</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bandung, Indonesia</small>
          </div>
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">“I like it because I like to buy original music and i can explore the new album.”</p>
      </div>
    </div>
  </div>
   <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-2.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Raillya Rachell</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bekasi, Indonesia</small>
          </div>
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>
        </div>
         <!-- DESKRIPSI -->
        <p class="card-text mt-3">“This is very good for my hobbies”.</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Dadang Konelo</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Seoul, Indonesia</small>
          </div>
            <div class="ml-auto">
            <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">"Terpercaya!"</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review">
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-1.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Wanda Wibisono</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bandung, Indonesia</small>
          </div>
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">“I like it because I like to buy original music and i can explore the new album.”</p>
      </div>
    </div>
  </div>
   <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-2.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Raillya Rachell</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bekasi, Indonesia</small>
          </div>
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>
        </div>
         <!-- DESKRIPSI -->
        <p class="card-text mt-3">“This is very good for my hobbies”.</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Dadang Konelo</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Seoul, Indonesia</small>
          </div>
            <div class="ml-auto">
            <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">"Terpercaya!"</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review">
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-1.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Wanda Wibisono</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bandung, Indonesia</small>
          </div>
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">“I like it because I like to buy original music and i can explore the new album.”</p>
      </div>
    </div>
  </div>
   <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-2.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Raillya Rachell</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bekasi, Indonesia</small>
          </div>
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>
        </div>
         <!-- DESKRIPSI -->
        <p class="card-text mt-3">“This is very good for my hobbies”.</p>
      </div>
    </div>
  </div>
</div>

@endsection