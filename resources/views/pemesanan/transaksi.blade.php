@extends('layouts/main');

@section('title','Adress')

@section('login')
  <li class="nav-item dropdown mx-md-3 mx-0">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      <img src="assets/img/account.png" alt="">
    </a>
    <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
      <div class="d-flex shadow-sm align-item-center rounded-small p-2">
        <img src="assets/img/Ellipse 175.png" class="photo-profile rounded-circle" alt=""> <span class="text-gray ml-3 font-weight-bold"> John Doe</span>
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
                        <p class="font-weight-bold w-50">Jhon Doe (+62)82113261721</p>
                    </div>
                    <div class="col-md-8 mt-3 mt-md-0">
                        <p class="font-weight-bold text-secondary">Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Bandung, Jawa Barat 4025</p>
                    </div>
                </div>
                <button class="btn primary-bg text-white  mt-5 font-weight-bold"> Ubah
                  Alamat</button>
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
                  <tr  class="detail-produk">
                    <td class="d-flex align-item-center">
                      <img src="assets/img/detail2.png" class="produk-pesan-icon" alt="">
                      <p class="ml-3"><span class="font-weight-bold">EXO</span> Vol.3 EX'ACT Album</p>
                    </td>
                    <td class="font-weight-bold">Rp.130.000</td>
                    <td class="font-weight-bold">1</td>
                    <td class="font-weight-bold">Rp.130.000</td>
                  </tr>
                  <!-- ITEM PRODUK -->
                  <tr  class="detail-produk">
                    <td class="d-flex align-item-center">
                      <img src="assets/img/product2.png" class="produk-pesan-icon" alt="">
                      <p class="ml-3"><span class="font-weight-bold">Rihanna</span> Anti Album</p>
                    </td>
                    <td class="font-weight-bold">Rp.150.000</td>
                    <td class="font-weight-bold">1</td>
                    <td class="font-weight-bold">Rp.150.000</td>
                  </tr>
                  <!-- SELECT OPSI PENGIRIMAN -->
                  <tr class="border-bottom border-dark">
                    <td class="primary-color font-weight-bold">
                     Opsi Pengiriman:
                    </td>
                    <td class="font-weight-bold">
                      <select class="p-0 w-responsive-50 font-weight-bold text-black form-control-sm border-0">
                        <option>Reguler</option>
                        <option>Express</option>
                      </select>
                    </td>
                    <td class="font-weight-bold"></td>
                    <td class="font-weight-bold detail-produk">Rp.20.000</td>
                  </tr>
                  <!-- Total Harga -->
                  <tr >
                    <td></td>
                    <td ></td>
                    <td ></td>
                    <td class="font-weight-bold detail-produk text-red">Rp.300.000</td>
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
                  <p >Rp280.000</p>
                </div>
                <div class="d-flex mt-2">
                  <p class="mr-auto font-weight-bold">Total Ongkos Kirim</p>
                  <p>Rp20.000</p>
                </div>
                  <div class="d-flex mt-2">
                  <p class="mr-auto font-weight-bold">Total Pembayaran:</p>
                  <p class="text-red">Rp300.000</p>
                </div>
              </div>
              <div class="border-top  mt-4">
                <button class="btn red-bg text-white  d-block ml-0 ml-md-auto  mr-4 mx-auto mx-md-0 font-weight-bold mt-4 px-5"><a href="/pesanan">Buat Pesanan</a></button>
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