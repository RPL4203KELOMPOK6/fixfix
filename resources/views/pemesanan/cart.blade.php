@extends('layouts/main')

@section('title','Alboem | Keranjang')

@section('login')
  <li class="nav-item dropdown mx-md-3 mx-0">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      <img src="assets/img/account.png" alt="">
    </a>
    <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
      <div class="d-flex shadow-sm align-item-center rounded-small p-2">
        <img src="assets/img/account.png" class="photo-profile rounded-circle" alt=""> <span class="text-gray ml-3 font-weight-bold">{{ Auth::user()->name }}</span>
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
            <div class="row">
                <div class="col-md-8 p-4">
                    <div class="wishlist bg-white ">
                        <div class="data-header py-3 px-2 ">
                            <h5 class="font-weight-bold ml-3 mt-2">Keranjang</h5>
                        </div>
                        <div class="option d-flex justify-content-between pl-5 pr-3 mt-3">
                            <div>
                                <input id="check-all" type="checkbox" class="rounded">
                                <label for="check-all" class="text-gray font-weight-bold ml-1 align-top ">Pilih Semua</label>
                            </div>
                            <p class="font-weight-bold text-gray cursor-pointer">
                                Hapus 
                            </p>
                        </div>
                        @foreach ($data as $item)
                            <div class="wishlist-item top mt-3 d-flex position-relative pl-0 pl-md-5 flex-column flex-md-row py-4">
                                <input type="checkbox" checked class="rounded cart-check">
                                <!-- GAMBAR -->
                                <img src="/image/{{$item->gambar}}" class="wishlist-img d-block mx-auto mx-md-0" alt="">
                                <div class="ml-0 ml-md-3 text-center text-md-left mt-3 mt-md-0">
                                    <!-- JUDUL PRODUK -->
                                    <p class="content"><span class="font-weight-bold">{{$item->penyanyi}}</span> {{$item->nama}}</p>
                                    <!-- HARGA  -->
                                    <input type="hidden" name="total" value="{{$item->harga * $item->qty}}">
                                    <h6 class="text-red font-weight-bold mt-4">Rp. {{$item->harga * $item->qty}}</h6>
                                    <!-- STOK -->
                                    <p class="content mt-4">quantity : {{$item->qty}}</p>
                                </div>
                                <div class="ml-0 ml-md-auto mr-0  mr-md-4 mx-auto">

                                    {{-- <div class="d-flex cart-form  w-100">
                                        <img src="assets/img/trash-bin.png" class="cursor-pointer " alt="">

                                        <div class="d-flex">
                                            <div class="btn cursor-pointer   btn-minus  num-icon pr-0 pt-2 ">
                                                <i class="fa fa-minus num-fa "></i>
                                            </div>
                                            <input id="qty" value="1" class="form-control quantity rounded num-form" min="1"
                                                name="quantity" placeholder="0" type="number">
                                            <div class="btn cursor-pointer  btn-plus pl-0 pt-2 num-icon">
                                                <i class="fa fa-plus num-fa"></i>
                                            </div>
                                        </div>

                                    </div> --}}
                                </div>
                            </div>
                            
                        @endforeach
                        {{-- <div class="wishlist-item d-flex position-relative pl-0 pl-md-5 flex-column flex-md-row py-4">
                            <input type="checkbox" checked class="rounded cart-check">
                            <!-- GAMBAR -->
                            <img src="assets/img/product2.png" class="wishlist-img d-block mx-auto mx-md-0" alt="">
                            <div class="ml-0 ml-md-3 text-center text-md-left mt-3 mt-md-0">
                                <!-- JUDUL PRODUK -->
                                <p class="content"><span class="font-weight-bold">Rihanna</span> Anti Album </p>
                                <!-- HARGA  -->
                                <h6 class="text-red font-weight-bold mt-4">Rp. 480.000</h6>
                                <!-- STOK -->
                                <p class="content mt-4">Stok : 20</p>
                            </div>
                            <div class="ml-0 ml-md-auto mr-0  mr-md-4 mx-auto">

                                <div class="d-flex cart-form  w-100">
                                    <img src="assets/img/trash-bin.png" class="cursor-pointer " alt="">

                                    <div class="d-flex">
                                        <div class="btn cursor-pointer   btn-minus  num-icon pr-0 pt-2 ">
                                            <i class="fa fa-minus num-fa "></i>
                                        </div>
                                        <input id="qty" value="1" class="form-control quantity rounded num-form" min="1"
                                            name="quantity" placeholder="0" type="number">
                                        <div class="btn cursor-pointer  btn-plus pl-0 pt-2 num-icon">
                                            <i class="fa fa-plus num-fa"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wishlist-item d-flex position-relative pl-0 pl-md-5  flex-column flex-md-row py-4">
                            <input type="checkbox" class="rounded cart-check">

                            <!-- GAMBAR -->
                            <img src="assets/img/product3.png" class="wishlist-img d-block mx-auto mx-md-0" alt="">
                            <div class="ml-0 ml-md-3 text-center text-md-left mt-3 mt-md-0">
                                <!-- JUDUL PRODUK -->
                                <p class="content"><span class="font-weight-bold">Valley </span> Maybe Album </p>
                                <!-- HARGA  -->
                                <h6 class="text-red font-weight-bold mt-4">Rp. 500.000</h6>
                                <!-- STOK -->
                                <p class="content mt-4">Stok : 130</p>
                            </div>
                            <div class="ml-0 ml-md-auto mr-0  mr-md-4 mx-auto">

                                <div class="d-flex cart-form  w-100">
                                    <img src="assets/img/trash-bin.png" class="cursor-pointer " alt="">

                                    <div class="d-flex">
                                        <div class="btn cursor-pointer   btn-minus  num-icon pr-0 pt-2 ">
                                            <i class="fa fa-minus num-fa "></i>
                                        </div>
                                        <input id="qty" value="1" class="form-control quantity rounded num-form" min="1"
                                            name="quantity" placeholder="0" type="number">
                                        <div class="btn cursor-pointer  btn-plus pl-0 pt-2 num-icon">
                                            <i class="fa fa-plus num-fa"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wishlist-item d-flex position-relative pl-0 pl-md-5 flex-column flex-md-row py-4">
                            <input type="checkbox" checked class="rounded cart-check">

                            <!-- GAMBAR -->
                            <img src="assets/img/product 4.png" class="wishlist-img d-block mx-auto mx-md-0" alt="">
                            <div class="ml-0 ml-md-3 text-center text-md-left mt-3 mt-md-0">
                                <!-- JUDUL PRODUK -->
                                <p class="content"><span class="font-weight-bold">Jeremy Zucker & Chealse Cutler</span>
                                    Brent Album </p>
                                <!-- HARGA  -->
                                <h6 class="text-red font-weight-bold mt-4">Rp. 500.000</h6>
                                <!-- STOK -->
                                <p class="content mt-4">Stok : 56</p>
                            </div>
                            <div class="ml-0 ml-md-auto mr-0  mr-md-4 mx-auto">

                                <div class="d-flex cart-form  w-100">
                                    <img src="assets/img/trash-bin.png" class="cursor-pointer " alt="">

                                    <div class="d-flex">
                                        <div class="btn cursor-pointer   btn-minus  num-icon pr-0 pt-2 ">
                                            <i class="fa fa-minus num-fa "></i>
                                        </div>
                                        <input id="qty" value="1" class="form-control quantity rounded num-form" min="1"
                                            name="quantity" placeholder="0" type="number">
                                        <div class="btn cursor-pointer  btn-plus pl-0 pt-2 num-icon">
                                            <i class="fa fa-plus num-fa"></i>
                                        </div>
                                    </div>

                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- <p>{{$totalfix}}</p> --}}
                <div class="col-md-4 p-4">
                    <div class="bg-white shadow-sm rounded-small  sticky-top ">
                        <form class="form-inline">
                            <div class="input-group mx-auto mt-3 align-item-center">
                                <img src="assets/img/discount.png" alt="" class="discount-icon">
                                <input placeholder="Masukan Kode Promo" class="form-control  py-0 discount-form"
                                    id="example-search-input">
                               
                            </div>
                        </form>
                        <div class="summary">
                            <div class="p-3">
                            <h5 class="font-weight-bold dark-color">Ringkasan Belanja</h5>
                            <div class="d-flex justify-content-between">
                                <small class="font-weight-bold text-secondary">Total Harga (3 barang)</small>
                                <small class="font-weight-bold text-secondary mb-2">Rp1.500.000</small>
                            </div>
                            <div class="d-flex justify-content-between border-top py-2">
                                <small class="font-weight-bold ">Total Harga (3 barang)</small>
                                <small class="font-weight-bold">Rp1.500.000</small>
                            </div>
                            <button class="btn add-address-bg mt-3 text-white font-weight-bold d-block w-100"><a href="/transaksi"> Beli </a></button>
                            </div>
                        </div>
                    </div>
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