<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alboem | Registrasi</title>
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
    <section>
        <div class="row" style="height: 100vh;">
            <div class="col-md-4 primary-bg d-md-flex d-none " >
                <div class=" align-self-center " >
                <img class=" w-auto" src="assets/img/sign_up_hero.png"   alt="">
            </div>

            </div>
            <div class="col-md-8 my-auto">
                <div class="w-50 m-auto">
                    <h3 class="header-color form-font font-weight-lighter">Sign up To Alboem</h3>
                    <button type="submit" class="btn text-white px-4 py-2 shadow" style="background-color: #4B97BC;"><img src="assets/img/icongoogle.png" alt=""> Sign up with google</button>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <hr />
                    <a class="form-text form-font text-center my-3">or</a>
                    <hr />
                    <div class="form-group">
                        <div class="input-container">
                            <input placeholder="Username" type="name" class="form-control  py-4  @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                        <div class="input-container">
                            <input placeholder="Email" type="email" class="form-control  py-4 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-container">
                            <input placeholder="Phone" type="pgone" class="form-control  py-4 @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-container">
                            <input placeholder="Address" type="alamat" class="form-control  py-4 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-container">
                            <img class="key-icon" src="assets/img/pass-icon.png" alt="" >
                            <input placeholder="Password" type="password" class="form-control  py-4 @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                            <img class="visibility-icon cursor-pointer" src="assets/img/visibility.png" alt="" >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-container">
                            <img class="key-icon" src="assets/img/pass-icon.png" alt="" >
                            <input placeholder="Verify Password" type="password" class="form-control py-4" id="password-input" name="password_confirmation" required autocomplete="new-password">
                            <img class="visibility-icon cursor-pointer" src="assets/img/visibility.png" alt="" >
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn text-white px-4 py-2 shadow" style="background-color: #4B97BC; width: 625px;">{{ __('Register') }}</button>
                    </div>

                    <div class="form-group">
                        <small class="form-text">Sudah Punya Akun? <a href="{{ route('login') }}" class="font-weight-bold" style="color: #00B8C7">Kembali ke login</a></small>
                    <div>
                </form>
            </div>
            </div>
        </div>
    </section>
<script src="assets/js/main.js"></script>
</body>
</html>