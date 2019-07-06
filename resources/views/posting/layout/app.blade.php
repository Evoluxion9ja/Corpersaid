<!DOCTYPE html>
@include('posting.partials._header')
<body style="background: #F7F7F7;">
	<div class="corpersaid-landing" >
		<!-- navbar	-->
		@include('posting.partials._nav')
		<!-- <navbar end> -->
		<div class="corpersaid-view mt-5" >
			@yield('content')
		</div>
	</div>
<!--Footer _starts Here-->
@include('posting.partials._footer')