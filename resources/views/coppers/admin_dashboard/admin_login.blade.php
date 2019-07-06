<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{config('app.name')}} Admin Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('fonts/dashboard/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/dashboard/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/dashboard/favicon.png')}}" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
  .btn-corpersaid{ background: #04BB97; color: #ffffff; }
  .content-wrapper {
    background: #04BB97;
    padding: 2.75rem 2.25rem;
    width: 100%;
    -webkit-flex-grow: 1;
    flex-grow: 1;
}
.text-primary { color: #04BB97 !important;}
.auth .brand-logo {
    margin-bottom: 2rem;
    text-align: center;
}
</style>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
              @include('partials._validate')
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <a href="../../index.html"><img src="{{asset('images/dashboard/corpersaid-logo.svg')}}"></a>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="{{route('admin.login')}}" method="POST" data-parsley-validate>
                {{csrf_field()}}
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-corpersaid btn-lg font-weight-medium auth-form-btn">{{__(strtoupper('sign in'))}}</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Not An Admin? <a href="register.html" class="text-primary">Request</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
