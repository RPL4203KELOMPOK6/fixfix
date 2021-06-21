@extends('layouts/main')

{{-- @section('title','Adress') --}}

@section('login')
  <li class="nav-item mx-md-3 mx-0">
    <a class="nav-link font-weight-bold form-font text-body mt-1 text-center" href="#">Login</a>
  </li>
  <li class="nav-item mx-md-3  mx-0">
    <a class="nav-link font-weight-bold form-font text-body register-button mt-1 text-center" href="#">Daftar</a>
  </li>
@endsection

@section('container')
  <section class="bg-white position-relative">
    <img src="assets/img/wave-dropdown.png" class="wave w-auto d-none d-md-block position-absolute dropdown-wave" alt="">
    <img src="assets/img/Group 525.png" class="wave w-auto d-none d-md-block position-absolute bottom-left" alt="">

    <div class="container pb-big">
      <h3 class="font-weight-bold pt-5">Korean Alboem</h3>
      <p>Pilih produk album korean yang anda sukai</p>
      <div class="primary-bg  border-header mt-3"></div>
      <div class="row mt-medium">
        <div class="col-md-6">
          <img src="assets/img/bts-persona.png" class="w-100" alt="">
          <h4 class="font-weight-bold mt-4">BTS Persona</h4>
          <p class="text-secondary">Tersedia 4 Series</p>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <img src="assets/img/bts-love-yourself.png" class="w-100" alt="">
          <h4 class="font-weight-bold mt-4">BTS Love Yourself</h4>
          <p class="text-secondary">Tersedia 3 series</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
          <img src="assets/img/bts-be.png" class="w-100" alt="">
          <h5 class="font-weight-bold mt-4 ml-4">BTS BE</h5>
          <p class="text-secondary  ml-4">Tersedia 3 series</p>
        </div>
        <div class="col-md-4">
          <img src="assets/img/bts-world.png" class="w-100" alt="">
          <h5 class="font-weight-bold mt-4  ml-4">BTS World</h5>
          <p class="text-secondary  ml-4">Tersedia 2 series</p>
        </div>
        <div class="col-md-4">
          <img src="assets/img/bts-map-of-the-soul.png" class="w-100" alt="">
          <h5 class="font-weight-bold mt-4  ml-4">BTS Map Of The Soul </h5>
          <p class="text-secondary  ml-4">Tersedia 7 series</p>
        </div>
      </div>
    </div>
  </section>    
  <script src="assets/js/main.js"></script>
@endsection