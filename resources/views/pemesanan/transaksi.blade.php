@extends('layouts/main')

@section('title','Alboem | Transaksi')

@section('login')
  <li class="nav-item dropdown mx-md-3 mx-0">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      <img src="assets/img/account.png" alt="">
    </a>
    <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
      <div class="d-flex shadow-sm align-item-center rounded-small p-2">
        <img src="assets/img/account.png" class="photo-profile rounded-circle" alt=""> <span class="text-gray ml-3 font-weight-bold"> {{ Auth::user()->name }}</span>
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
      <p class="text-gray font-weight-bold text-right mt-4 cursor-pointer">Logout <i class="ml-1 fa fa-sign-out-alt"></i></p>
    </div>
  </li>
@endsection

@section('container')
    <section>
        <div class="container">
            <div class="bg-white p-3 mt-4 shadow">
                <p class="font-weight-bold"><i class="fas fa-map-marker-alt"></i> Alamat Pengiriman</p>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <p class="font-weight-bold w-50">{{ Auth::user()->name }}</p>
                        <p class="font-weight-bold w-50">Phone :{{ Auth::user()->phone }}</p>
                    </div>
                    <div class="col-md-8 mt-3 mt-md-0">
                        <p class="font-weight-bold text-secondary">{{ Auth::user()->alamat }}</p>
                    </div>
                </div>
                {{-- <button class="btn primary-bg text-white  mt-5 font-weight-bold"> Ubah
                  Alamat</button> --}}
            </div>
            <div class="bg-white p-3 mt-4 shadow table-responsive">
              <h5 class="font-weight-bold">Produk Pesanan</h5>
              <table class="table table-borderless">
                <thead>
                  <tr class="text-muted">
                    <th scope="col"><i class="fas fa-store-alt"></i> iNeedStore</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal Produk</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- ITEM PRODUK -->
                  @foreach ($data as $item)
                      
                  <tr  class="detail-produk">
                    <td class="d-flex align-item-center">
                      <img src="/image/{{$item->gambar}}" class="produk-pesan-icon" alt="">
                      <p class="ml-3"><span class="font-weight-bold">{{$item->penyanyi}}</span> {{$item->nama}}</p>
                    </td>
                    <td class="font-weight-bold">Rp. {{$item->harga}}</td>
                    <td class="font-weight-bold">{{$item->qty}}</td>
                    <td class="font-weight-bold">Rp. {{$item->harga * $item->qty}}</td>
                  </tr>
                  @endforeach
                  <tr >
                    <td></td>
                    <td ></td>
                    <td ></td>
                    <td class="font-weight-bold detail-produk text-red">Rp.900.000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="bg-white p-3 mt-4 shadow">
              <div class="d-flex align-item-center flex-column flex-md-row border-bottom pb-3">
                <p class="d-none d-md-block">Metode <br> Pembayaran</p>
                <p class="d-block d-md-none">Metode  Pembayaran</p>
                <div class="d-flex flex-column ml-3 mt-3 mt-md-0">
                  <div class="d-flex">
                    <button class="btn primary-bg text-white method-payment"> Transfer Bank</button>
                      <button class="btn primary-bg text-white ml-3 method-payment">  COD</button> 
                  </div>
                  <div class="mt-2 d-flex">
                    <button class="btn primary-bg text-white method-payment"> Debit Online</button>
                      <button class="btn primary-bg text-white ml-3 method-payment"> Indomart/Alfamart</button>
                  </div>
                </div>
              </div>
              <div style="width: 300px;" class="d-flex  mx-auto mx-md-0 ml-md-auto  flex-column">
                <div class="d-flex mt-3">
                  <p class="mr-auto font-weight-bold">Subtotal Produk</p>
                  <p >Rp900.000</p>
                </div>
                <div class="d-flex mt-2">
                  <p class="mr-auto font-weight-bold">Total Ongkos Kirim</p>
                  <p>Rp20.000</p>
                </div>
                  <div class="d-flex mt-2">
                  <p class="mr-auto font-weight-bold">Total Pembayaran:</p>
                  <p class="text-red">Rp920.000</p>
                </div>
              </div>
              <div class="border-top  mt-4">
                <a href="/pesanan" class="btn red-bg text-white  d-block ml-0 ml-md-auto  mr-4 mx-auto mx-md-0 font-weight-bold mt-4 px-5">Buat Pesanan</a>
                {{-- <button class="btn red-bg text-white  d-block ml-0 ml-md-auto  mr-4 mx-auto mx-md-0 font-weight-bold mt-4 px-5"><a href="/pesanan">Buat Pesanan</a></button> --}}
              </div>
          </div>
        </div>
    </section>
    <section class="partner-info container border-content py-5">
    <div class="row">
        <div class="col-md-4 p-4">
            <h5 class="font-weight-bold text-center">Alamat Pengiriman</h5>
            <img src="assets/img/image 4.png" class="w-75 mt-5 d-block mx-auto" alt="">
        </div>
        <div class="col-md-4 p-4">
            <h5 class="font-weight-bold text-center">Jasa Pengiriman</h5>
            <img src="assets/img/image 5.png" class="w-50 mt-5 d-block mx-auto" alt="">
        </div>
        <div class="col-md-4 p-4">
            <h5 class="font-weight-bold text-center">Partner</h5>
            <img src="assets/img/image 6.png" class="w-50 mt-5 d-block mx-auto" alt="">
        </div>
    </div>
    </section>
    <script src="assets/js/main.js"></script>
@endsection