<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" type="image/png" href="{{asset('assets/images/corpersaid-favicon.png')}}"/>
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/corpersaid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/font-awesome/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <title>Corpers Aid | Home</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/coppers_css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/coppers_css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/coppers_css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/coppers_css/iofrm-theme15.css')}}">
</head>
<body>
    <!-- navbar -->
        @include('partials._nav')
        <!-- <navbar end> -->
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="{{asset('images/backend_images/logo-light.svg')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Login to post your products and services</h3>
                    <p>Access all Services, Products and Job Listing while on your NYSC Journey.<br><br>
                        We provide comfort during your youth service year.</p>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="page-links">
                            <a href="{{route('login')}}">Login</a><a href="{{route('register')}}" class="active">Register</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail Address" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-button">
                            <button type="submit" class="btn btn-primary btn-block ibtn">
                                {{ __('Register') }}
                            </button>
                        </div>
                        </form>
                        <div class="other-links">
                            <span>Or register with</span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/backend_js/jquery.min.js"></script>
<script src="js/backend_js/popper.min.js"></script>
<script src="js/backend_js/bootstrap.min.js"></script>
<script src="js/backend_js/main.js"></script>
</body>
</html>