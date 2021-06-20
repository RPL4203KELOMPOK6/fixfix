@extends('layouts/main')

@section('title','Profil')

@section('login')
  <li class="nav-item dropdown mx-md-3 mx-0">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      <img src="assets/img/account.png" alt="">
    </a>
    <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
      <div class="d-flex shadow-sm align-item-center rounded-small p-2">
        <img src="assets/img/account.png" class="photo-profile rounded-circle" alt=""> <span class="text-gray ml-3 font-weight-bold"> John Doe</span>
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
                <div class="col-md-4 p-4">
                    <div class="bg-white p-3 sticky-top ">
                        <h6 class="font-weight-bold ml-3">Akun Saya</h6>
                        <ul class="nav flex-column profile-sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="#">Akun Saya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Wallet</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promosi / Hot Deals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Lacak Pesanan</a>
                            </li>                                  
                            <li class="nav-item">
                                <h6 class="font-weight-bold ml-3 mt-3">Share</h6>
                               <a href="#"> <img class="mx-1 ml-3" src="assets/img/Vector.png" alt=""></a>
                               <a href="#"><img class="mx-1" src="assets/img/youtube 2.png" alt=""></a>
                               <a href="#"><img class="mx-1" src="assets/img/ig.png" alt=""></a> 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 p-4">
                    <div class="profile-data bg-white pb-3">
                        <div class="data-header py-3 px-2 ">
                            <h5 class="font-weight-bold ml-3">Data Profil</h5>
                        </div>               
                        <dl class="row content data mt-3 px-5">
                            <form role="form" action="/profile" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div class="form-group row">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                </div>
                                <div class="form-group row">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{$user->email}}">
                                </div>
                                <div class="form-group row">
                                    <label for="phone">Nomor Telfon</label>
                                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                                </div>
                                <div class="form-group row">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{$user->alamat}}">
                                </div>
                            </form>
                        </dl>
                        <button type="button" class="btn primary-bg text-white  d-block ml-auto  mr-4  font-weight-bold">Submit</button>
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

@endsection
