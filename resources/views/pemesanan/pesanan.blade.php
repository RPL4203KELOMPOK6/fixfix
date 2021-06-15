@extends('layouts/main')

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
  <section class="position-relative container form-font">
    <div class="bg-white  my-5 ">
      <h5 class="font-weight-normal border-bottom p-4"><i class="fas fa-arrow-left mr-3"><a href="/transaksi"></i>Pembayaran</a></h5>
      <div class="border border-warning m-3 d-flex align-item-center">
        <span class="fa-stack m-3 mr-5">
          <i class="fas fa-circle text-warning fa-stack-2x"></i>
          <i class="fas fa-bell fa-stack-1x text-center ml-2 ml-md-0 fa-inverse"></i>
        </span>
        <p class="font-weight-bold ">Perhatian Virtual Account untuk top up AlboemPay dan pembelian barang berbeda.</p>
      </div>
      <div class="w-responsive-50 p-3 d-block mx-auto">
        <div class="d-flex border-bottom pb-3 justify-content-between">
          <h6>Total Pembayaran</h6>
          <h6 class="text-danger">Rp.131.000</h6>
        </div>
        <div class="d-flex  mt-3">
          <div class="mr-3">
            <img src="assets/img/Logo-BCA-Bank-Central-Asia-Group.jpg" class="bank-icon" alt="">
          </div>
          <div>
            <h6>Bank BCA (Dicek Otomatis)</h6>
            <div class="d-none d-md-block">
              <!-- DESKTOP VIEW -->
              <small>No. Rekening:</small>
              <div class="d-flex flex-column flex-md-row ">
                <h5 class="text-danger mt-1" id="rekening">126 0821 1366 6271</h5>
                <h5 class="text-info mt-1 ml-4 cursor-pointer copyrekening">Salin</h5>
              </div>
            </div>
          </div>

        </div>
        <!-- MOBILE VIEW -->
        <div class="d-block d-md-none mt-2">
          <small>No. Rekening:</small>
          <div class="d-flex flex-column flex-md-row ">
            <h5 class="text-danger mt-1">126 0821 1366 6271</h5>
            <h5 class="text-info mt-1 text-center cursor-pointer copyrekening">Salin</h5>
          </div>
        </div>
        
        <div class="d-flex collapse-container justify-content-between border-bottom pb-2 mt-2" data-toggle="collapse"
          data-target="#collapseATM" aria-expanded="false" aria-controls="collapseExample">
          <h6>Petunjuk Transfer ATM</h6>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="collapse show" id="collapseATM" aria-expanded="false" aria-controls="collapseExample">
          <div class="py-2">
            <!-- ISI CONTENT  -->
            <!-- LIST ITEM -->
            <div class="row flex-nowrap">
              <!-- NUMBER  -->
              <div class="col-1">
                <div class="circle-number">1</div>
              </div>
              <div class="col-11">
                <p><span class="text-secondary">Pilih</span> Transaksi Lainnya > Transfer > Ke Rek BCA
                  Virtual Account.</p>
              </div>
            </div>
            <!-- LIST ITEM END -->
            <!-- LIST ITEM -->
            <div class="row flex-nowrap mt-2">
              <!-- NUMBER  -->
              <div class="col-1">
                <div class="circle-number">2</div>
              </div>
              <div class="col-11">
                <p><span class="text-secondary">Pilih</span> Nomor Virtual Account <span class="text-danger">126 0821
                    1366 6271</span><span class="text-secondary"> dan pilih</span> Benar.</p>
              </div>
            </div>
            <!-- LIST ITEM END -->
            <!-- LIST ITEM -->
            <div class="row flex-nowrap mt-2">
              <!-- NUMBER  -->
              <div class="col-1">
                <div class="circle-number">3</div>
              </div>
              <div class="col-11">
                <p><span class="text-secondary ">Periksa Informasi yang tertera di layar. Pastikan Merchant
                    adalah</span> Alboem, Total tagihan<span class="text-secondary"> sudah Benar
                    dan username kamu </span> aldyr7 <span class="text-secondary">Jika benar pilih</span> Ya.</p>
              </div>
            </div>
            <!-- LIST ITEM END -->
          </div>
        </div>
        <div class="d-flex collapse-container justify-content-between border-bottom pb-2 mt-2" data-toggle="collapse"
          data-target="#collapseibanking" aria-expanded="false" aria-controls="collapseExample">
          <h6>Petunjuk Transfer iBanking</h6>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="collapse" id="collapseibanking" aria-expanded="false" aria-controls="collapseExample">
          <div class="py-2">
            <!-- ISI CONTENT  -->
            <!-- LIST ITEM -->
            <div class="row flex-nowrap">
              <!-- NUMBER  -->
              <div class="col-1">
                <div class="circle-number">1</div>
              </div>
              <div class="col-11">
                <p><span class="text-secondary">Pilih</span> Transaksi Lainnya > Transfer > Ke Rek BCA
                  Virtual Account.</p>
              </div>
            </div>
            <!-- LIST ITEM END -->
            <!-- LIST ITEM -->
            <div class="row flex-nowrap mt-2">
              <!-- NUMBER  -->
              <div class="col-1">
                <div class="circle-number">2</div>
              </div>
              <div class="col-11">
                <p><span class="text-secondary">Pilih</span> Nomor Virtual Account <span class="text-danger">126 0821
                    1366 6271</span><span class="text-secondary"> dan pilih</span> Benar.</p>
              </div>
            </div>
            <!-- LIST ITEM END -->
            <!-- LIST ITEM -->
            <div class="row flex-nowrap mt-2">
              <!-- NUMBER  -->
              <div class="col-1">
                <div class="circle-number">3</div>
              </div>
              <div class="col-11">
                <p><span class="text-secondary ">Periksa Informasi yang tertera di layar. Pastikan Merchant
                    adalah</span> Alboem, Total tagihan<span class="text-secondary"> sudah Benar
                    dan username kamu </span> aldyr7 <span class="text-secondary">Jika benar pilih</span> Ya.</p>
              </div>
            </div>
            <!-- LIST ITEM END -->
          </div>
        </div>
        <div class="d-flex collapse-container justify-content-between border-bottom pb-2 mt-2" data-toggle="collapse"
          data-target="#collapsembanking" aria-expanded="false" aria-controls="collapseExample">
          <h6>Petunjuk Transfer mBanking</h6>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="collapse" id="collapsembanking" aria-expanded="false" aria-controls="collapseExample">
          <div class="py-2">
          <!-- ISI CONTENT  -->
            <!-- LIST ITEM -->
            <div class="row flex-nowrap">
              <!-- NUMBER  -->
              <div class="col-1">
                <div class="circle-number">1</div>
              </div>
              <div class="col-11">
                <p><span class="text-secondary">Pilih</span> Transaksi Lainnya > Transfer > Ke Rek BCA
                  Virtual Account.</p>
              </div>
            </div>
            <!-- LIST ITEM END -->
            <!-- LIST ITEM -->
            <div class="row flex-nowrap mt-2">
              <!-- NUMBER  -->
              <div class="col-1">
                <div class="circle-number">2</div>
              </div>
              <div class="col-11">
                <p><span class="text-secondary">Pilih</span> Nomor Virtual Account <span class="text-danger">126 0821
                    1366 6271</span><span class="text-secondary"> dan pilih</span> Benar.</p>
              </div>
            </div>
            <!-- LIST ITEM END -->
            <!-- LIST ITEM -->
            <div class="row flex-nowrap mt-2">
              <!-- NUMBER  -->
              <div class="col-1">
                <div class="circle-number">3</div>
              </div>
              <div class="col-11">
                <p><span class="text-secondary ">Periksa Informasi yang tertera di layar. Pastikan Merchant
                    adalah</span> Alboem, Total tagihan<span class="text-secondary"> sudah Benar
                    dan username kamu </span> aldyr7 <span class="text-secondary">Jika benar pilih</span> Ya.</p>
              </div>
            </div>
            <!-- LIST ITEM END -->
          </div>
        </div>
        <a href="/home" class="btn primary-bg mx-auto d-block w-50 mt-4 text-white font-weight-bold">OK</a>

      </div>
    </div>

  </section>
  <script src="assets/js/main.js"></script>
@endsection
