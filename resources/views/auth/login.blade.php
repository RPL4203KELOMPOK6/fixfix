<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alboem | Login</title>
    <!-- IMPORT JQUERY -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- IMPORT POPPER FOR DROPDOWN NAVBAR -->
    <script src="assets/js/popper.min.js"></script>
    <!-- IMPORT POPPER FOR BOOTSTRAP JS NAVBAR -->
    <script src="assets/js/bootstrap.min.js"></script>


    <!-- IMPORT BOOTSTRAP -->
    <link rel='stylesheet' type='text/css' media='screen' href="assets/style/bootstrap.css">
    <!-- IMPORT OWL CAROUSEL -->
    <link rel="stylesheet" href="assets/style/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/style/owl.theme.default.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href="assets/style/animate.css">
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- IMPORT FONT AWESOME LIBRARY ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- IMPORT MANUAL STYLE -->
    <link rel='stylesheet' type='text/css' media='screen' href="assets/style/style.css">
</head>


<body>
<section class="sign-in container-fluid" >
    <div class="row" style="height: 100vh;">
        <div class="col-md-4 primary-bg d-md-flex d-none " >
            <div class=" align-self-center " >
            <img class=" w-auto" src="assets/img/sign_in_hero.png"   alt="">
        </div>

        </div>
        <div class="col-md-8 my-auto">
            <div class="w-50 m-auto">
                <h3 class="header-color form-font font-weight-lighter">Sign In To Alboem</h3>
            @isset($url)
            <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
            @else
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @endisset
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="email-label">Email address</label>
                    <input type="email" class="form-control mt-4 py-4 @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <a href="#"><small id="emailHelp" class="form-text form-font text-right my-3" style="color: #00B8C7;">Lupa Password ?</small></a>
                </div>
                <div class="form-group">
                    <div class="input-container">
                        <img class="key-icon" src="assets/img/pass-icon.png" alt="" >
                        <input placeholder="Password" type="password" class="form-control  py-4 @error('password') is-invalid @enderror" id="password-input" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <img class="visibility-icon cursor-pointer" src="assets/img/visibility.png" alt="" >
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <small class="form-text">Belum Punya Akun? <a href="{{ route('register') }}" class="font-weight-bold" style="color: #00B8C7">Daftar Sekarang</a></small>
                    <button type="submit" class="btn text-white px-4 py-2 shadow" style="background-color: #4B97BC;">Login</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/main.js"></script>
</body>
</html>