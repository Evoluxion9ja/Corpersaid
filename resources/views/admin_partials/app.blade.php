<!DOCTYPE html>
    @include('admin_partials.header')
<!--sidebar-menu-->
    @include('admin_partials.sidebar')
<!--sidebar-menu-->

<!--main-container-part-->
    @yield('contents')
<!--end-main-container-part-->
<!--Footer Part-->
@include('admin_partials.footer')
