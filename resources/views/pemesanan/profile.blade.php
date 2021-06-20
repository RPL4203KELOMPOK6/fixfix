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
                        <dl class="row content data mt-3">
                            <dd class="col-md-3"><span class="ml-4">Nama</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">: {{ Auth::user()->name }}</span></dd>
                            <dd class="col-md-3"><span class="ml-4">Email</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">: {{ Auth::user()->email }}</span></dd>
                            <dd class="col-md-3"><span class="ml-4">No Hp</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                            <dd class="col-md-3"><span class="ml-4">Tanggal Lahir</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                        </dl>
                        <button type="button" class="btn primary-bg text-white  d-block ml-auto  mr-4  font-weight-bold"
                            data-toggle="modal" data-target="#modalprofil"
                        >Ubah Profil</button>

                        <div class="modal fade" id="modalprofil" role="dialog" arialabelledby="modalLabel" aria-hidden="true"> 
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Profil Anda</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="" class="form-control" placeholder="{{ Auth::user()->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>No Hp</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-data bg-white pb-3 mt-5">
                        <div class="data-header py-3 px-2 ">
                            <h5 class="font-weight-bold ml-3">Alamat Pengiriman</h5>
                        </div>
                        <p class="content font-weight-bold ml-4 mt-2">Alamat 1</p>
                        <div class="row content data mt-3">
                           <div class="col-md-6">
                                <small class="text-secondary ml-4">Nama Penerima</small>
                                <p class="content data ml-4">Bidadari</p>
                           </div>
                           <div class="col-md-6">
                            <small class="text-secondary ml-4">No Hp</small>
                            <p class="content data ml-4">085262947577</p>
                        </div>
                        </div>
                        <button type="button" class="btn primary-bg text-white  d-block ml-auto  mr-4  font-weight-bold"
                            data-toggle="modal" data-target="#modalAlamat"
                        >Ubah</button>

                        <div class="modal fade" id="modalAlamat" role="dialog" arialabelledby="modalLabel" aria-hidden="true"> 
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Alamat Anda</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Nama Penerima</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>No HP</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Anda</label>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="/address">
                        <button class="btn add-address-bg mt-3 text-white font-weight-bold d-block mx-auto mx-md-0"> Tambah Alamat Baru </button>
                    </a>

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
