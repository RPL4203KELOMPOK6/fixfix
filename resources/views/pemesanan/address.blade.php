@extends('layouts/main')

@section('title','Alboem | Alamat')

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
    <div class="container w-responsive-75 mt-5">
        <div class="data-header py-3 px-2 ">
            <h5 class="font-weight-bold mt-2 text-center">Tambah Alamat Baru</h5>
        </div>
        <div class="bg-white py-3">
            <form action="" class="form-font px-4">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-check-label text-gray  align-item-center  mt-2" id="alamatutamaa" for="alamatutama">
                            Alamat Utama
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="alamatutama" value="option1">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-md-9">
                        <div class="d-flex flex-column flex-md-row">
                            <label class="form-check-label text-gray mt-2  ml-md-0"  for="alamatbaru">
                                Label Alamat:
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="alamatbaru" value="option2">
                                <span class="checkmark" ></span>
                            </label>
                            <input type="text" id="alamatbaruform" disabled class="rounded-form mx-0 mx-md-4 ml-md-4 ml-0 w-responsive-75 address-input form-control form-address">
                        </div>
                    </div>
                </div>
                <h5 class=" mt-2 dark-color address-border-top pt-3">Informasi Penerima</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputName" class="text-gray-2">Nama Depan <span class="text-red sup-label">*</span></label>
                      <input type="text" class="form-control rounded-form form-address w-responsive-75" id="inputName">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputLastname" class="text-gray-2">Nama Belakang <span class="text-red sup-label">*</span></label>
                        <input type="text" class="form-control rounded-form form-address  w-responsive-75" id="inputLastname">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telp" class="text-gray-2">No.Hp <span class="text-red sup-label">*</span></label>
                        <div class="input-group mb-2 w-responsive-75 position-relative">
                            <div class="input-group-prepend number">
                              <div class="input-group-text text-white ">+62</div>
                            </div>
                            <input type="number" class="form-control  rounded-form form-address telp" id="telp">
                          </div>
                    </div>
                </div>
                <h5 class=" mt-2 dark-color address-border-top pt-3">Informasi Penerima</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="prov" class="text-gray-2">Provinsi <span class="text-red sup-label">*</span></label>
                      <input type="text" class="form-control d-block rounded-form form-address w-responsive-75" id="prov">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="postcode" class="text-gray-2">Kode Pos <span class="text-red sup-label">*</span></label>
                        <input type="text" class="form-control rounded-form form-address  w-responsive-75" id="postcode">
                    </div>
                </div>
                <div class="form-row mt-0 mt-md-1">
                    <div class="form-group col-md-6">
                      <label for="city" class="text-gray-2">Kota / Kabupaten <span class="text-red sup-label">*</span></label>
                      <input type="text" class="form-control rounded-form form-address w-responsive-75" id="city">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kecamatan" class="text-gray-2">Kecamatan<span class="text-red sup-label">*</span></label>
                        <input type="text" class="form-control rounded-form form-address  w-responsive-75" id="kecamatan">
                    </div>
                </div>
                <button type="button" class="btn primary-bg text-white d-block mx-auto mt-3">Tambah Alamat</button>
            </form>
        </div>
    </div>
</section>
<script src="assets/js/main.js"></script>
@endsection