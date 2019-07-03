<!DOCTYPE html>
<!--Header Starts here -->
@include('partials._header')
<!--Header ends here-->
<body>
	<div class="corpersaid-landing">
		<!-- navbar	-->
		@include('partials._nav')
		<!-- <navbar end> -->
		@yield('content')
		<!-- Trending Section end -->

    </div>
    <!--Footer-starts here-->
    @include('partials._footer')
    <!--Footer ends here -->
</body>
</html>