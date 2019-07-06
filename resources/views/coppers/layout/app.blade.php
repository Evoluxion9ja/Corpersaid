<!DOCTYPE html>
<html lang="en">
    @include('coppers.partials._header')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('coppers.partials._nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('coppers.partials._sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
<!--Footer Starts Here-->
@include('coppers.partials._footer')
