@extends('layouts/main')

@section('title','Alboem | Detail Produk')

@section('login')
<li class="nav-item dropdown mx-md-3 mx-0">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">
  <img src="{{asset('assets/img/account.png')}}" alt="">
  </a>
  <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
  <div class="d-flex shadow-sm align-item-center rounded-small p-2">
      <img src="assets/img/account.png" class="photo-profile rounded-circle" alt=""> <span class="text-gray ml-3 font-weight-bold"><a href="/profile">{{ Auth::user()->name }}</a></span>
  </div>
  <a href="#">
      <div  class="shadow-sm mt-2 rounded-small p-2">
      <p class="text-gray font-weight-bold">Your Favorite Shop</p>
      </div>
  </a>
  <a href="#">
      <div  class="shadow-sm mt-2 rounded-small p-2">
      <p class="text-gray font-weight-bold">Your Transaction</p>
      </div>
  </a>
  <a href="#">
      <div  class="shadow-sm mt-2 rounded-small p-2">
      <p class="text-gray font-weight-bold">Setting</p>
      </div>
  </a>
  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <p class="text-gray font-weight-bold text-right mt-4 cursor-pointer">{{ __('Logout') }}<i class="ml-1 fa fa-sign-out-alt"></i></p>
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
       @csrf
  </form>
  </div>
</li>
@endsection

@section('container')
<section>
    <div class="container">
        <div class="row mt-5">
          
            <div class="col-md-6">
                <img src="image/1622900440_examine1.png" class="w-100" alt="">
                {{-- <img src="{{asset('../image/'. $album->gambar)}}" class="w-100" alt="" > --}}
                <div id="product-carousel" class="mt-4 mx-md-5 mx-auto  w-25">
                  <div class="item"><img src="/image/{{$data->gambar}}" class="w-100" alt=""></div>
              </div>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                {{-- <h5 class="font-weight-bold">{{$album->nama}}<h5> --}}
                  <h5 class="font-weight-bold">{{$data->nama}}<h5>
                <div>
                    <i class="far fa-star star-icon"></i>
                    <i class="far fa-star star-icon"></i>
                    <i class="far fa-star star-icon"></i>
                    <i class="far fa-star star-icon"></i>
                    <i class="far fa-star star-icon"></i>
                    <small class="text-secondary">( 3 costumer review )</small>
                </div>
                {{-- <h5 class="font-weight-bold text-red">{{$album->harga}}<h5> --}}
                  <h5 class="font-weight-bold">Rp. {{$data -> harga}} <h5>
                <div class="content w-responsive-75 mb-3 border-content pt-4 mt-3">
                <p>{{$data->penyanyi}}</p>
                
              </div>
              <a href="#" class="content text-dark"><u> SEE MORE</u></a>
              <div class="mt-3 border-content pt-4  w-responsive-75">
                <form action="" class="d-flex">
                  <input value="1" type="number" class="qty-form text-center">
                  <button class="btn primary-bg text-white ml-3 font-weight-bold"><a href="/cart"></a>Tambah Ke Keranjang</button>
                </form>
              </div>
              <h5 class="text-red font-weight-bold cursor-pointer"><i class="fas fa-heart mr-3"></i>Add to Wishlist</h5>
              <div class="content border-content w-responsive-75 pt-4 mt-4">
                <p>Categories: KPOP</p>
                <p class="mt-1"> Tags: EXO</p>

              </div>
            </div>
          
        </div>
    </div>
</section>
<section>
  <div class="container">
    <nav>
      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
        <a class="nav-link active font-weight-bold" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
        <a class="nav-link  font-weight-bold" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>

      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active content w-responsive-75 py-3 border-content w-100" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <p>{{$data -> deskripsi}}</p>
        {{-- Meet the M35 - it's Kodak's all-new beginner friendly 35mm point and shoot film camera!! <br>
        With its eye-catching modern retro design, the M35 is Kodak's answer to the growing analogue photography revival!
        <br><br><br>
        They've taken it back to basics & created a super simple to use compact with manual film loading /wind /rewind & a flash! It's suitable for complete beginners & long term film enthusiasts of ALL levels 🙌. You'll simply load your batteries & film, point...& shoot! 📸
        <br><br>
        Also in: Green, Yellow & Red
        <br>
        ⚒ Specs:
        <ul>
          <li>31mm f10 fixed focus lens</li>
          <li>Shutter: 1/120secs</li>
          <li>Flash</li>
          <li>Manual wind/rewind</li>
        </ul> --}}
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
    </div>
    <div class="border-content pt-3">
      <h4 class="font-weight-bold text-center">Produk Serupa</h4>
      <div class="row mt-5">

        <div class="col-md-4 p-5">
          <img src="assets/img/another1.png" class="w-100 d-block mx-auto" alt="">
          <div class="d-flex justify-content-between mt-2">
            <p class="text-secondary">new series blackpink</p>
            <div>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <!-- TAMBAHKAN CLASS DISABLED JIKA BINTANG BERWARNA ABU  -->
              <i class="far fa-star star-icon disabled"></i>
            </div>
          </div>
          <p class="mt-2">Blackpink</p>
          <p class="font-weight-bold text-red mt-2">Rp 325.000</p>
        </div>
        <div class="col-md-4 p-5">
          <img src="assets/img/another2.png" class="w-100 d-block mx-auto" alt="">
          <div class="d-flex justify-content-between mt-2">
            <p class="text-secondary">New album of billie</p>
            <div>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <!-- TAMBAHKAN CLASS DISABLED JIKA BINTANG BERWARNA ABU  -->
              <i class="far fa-star star-icon disabled"></i>
            </div>
          </div>
          <p class="mt-2">Billie Eilish</p>
          <p class="font-weight-bold text-red mt-2">Rp 455.000</p>
        </div>
        <div class="col-md-4 p-5  ">
          <img src="assets/img/another3.png" class="w-100 d-block mx-auto" alt="">
          <div class="d-flex justify-content-between mt-2">
            <p class="text-secondary">See new of jastin</p>
            <div>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon disabled"></i>
              <!-- TAMBAHKAN CLASS DISABLED JIKA BINTANG BERWARNA ABU  -->
              <i class="far fa-star star-icon disabled"></i>
            </div>
          </div>
          <p class="mt-2">JASTIN BIBER </p>
          <p class="font-weight-bold text-red mt-2">Rp 275.000</p>
        </div>
      </div>
    </div>

  </div>
</section>
<script src="assets/js/main.js"></script>
@endsection