<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{config('app.name')}} | Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('icons/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('icons/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/dashboard/favicon.png')}}" />
      <!-- inject:css -->
      <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
  <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!--Form Validation Parsley-->
      {{Html::style('css/dashboard/parsley.css')}}
</head>