@extends('layouts2.app')

@section('content')
<div class="corpersaid-landing">
		<div class="corpersaid-header">
			<div class="container">
				<div class="search-section">
					<div class="search-section2">
						<div class="searching">
							<h6>Search</h6>
							<div class="search-here">
								<input class="enter-search" type="text" name="text" placeholder="Search for Anything">
							</div>
						</div>
						<div class="searching">
							<h6>Location</h6>
							<div class="select-2">
								<select class="select-option">
									<option>Select Location</option>
									@foreach ($locations as $location)
										<option value="{{$location->id}}">{{$location->name}}</option>
									@endforeach
								</select>
								<div class="caret">
									<i class="fas fa-caret-down"></i>
								</div>
							</div>
						</div>
						<div class="searching">
							<h6>Category </h6>
							<div class="select-2">
								<select class="select-option">
									<option>Select Category </option>
									@foreach ($categories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</select>
								<div class="caret">
									<i class="fas fa-caret-down"></i>
								</div>
							</div>
						</div>
						<div class="searching">
							<div class="find-btn-click">
								<button class="btn find-btn">Find Now</button>
							</div>
						</div>
					</div>
				</div>
				<div class="categories">
					<div>
						<div class="row">
							@foreach ($categories as $category)
								<a href="">
									<div class="col-md-3">
										{{$category->name}}
									</div>
								</a>
							@endforeach
						</div>
						<a href="tolet.html"><img src="assets/images/tolet.svg"> </a>
						<a href="forsale.html"><img src="assets/images/for-sale.svg"> </a>
						<a href="services.html"><img src="assets/images/services.svg"> </a>
						<a href="ppa.html"><img src="assets/images/ppa.svg"> </a>
					</div>
				</div>
			</div>
		</div>

		<div class="most-recent">
			<div class="container">
				<div class="recent-text text-center">
					<h4>Most Recent Updates</h4>
					<p>Beautifully designed businesses, products and services platform to make your <br>NYSC days interesting, easy and comfortable</p>
				</div>
				<div class="row">
					@foreach ($posts as $post)
						<div class="col-md-3">
							<div class="products">
								<a href="{{url('posts/'.$post->url)}}">
										@php $images = json_decode($post->images,true); @endphp
										@if(is_array($images) && !empty($images))
										<img src='{{ URL::asset('images/'.$images[0]) }}' width="100%"/>
										@endif
									<div class="product-name">
										<div class="product-name2">
											<h5>{{$post->title}}</h5>
											<div class="dot-menu  dropdown dropleft">
												<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
												  <i class="fas fa-ellipsis-v"></i>
												</a>
												<div class="dropdown-menu" >
												  <a class="dropdown-item" href="#">Contact Client</a>
												  <a class="dropdown-item" href="#">Share</a>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					@endforeach
				</div>
				<div class="see-more text-center mt-5">
					<button class="find-btn">See More</button>
				</div>
			</div>
		</div>

		<!-- Trending Section -->
		<div class="trending-product">
			<div class="container">
				<div class="recent-text text-center">
					<h4>Trending Products and Services</h4>
					<p>Beautifully designed businesses, products and services platform to make your <br>NYSC days interesting, easy and comfortable</p>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>

					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>

					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="products">
							<a href="view.html">
							<img src="{{asset('assets/images/room.jpg')}}">
							<div class="product-name">
								<div class="product-name2">
									<h5>Hair Style</h5>
									<div class="dot-menu  dropdown dropleft">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
								          <i class="fas fa-ellipsis-v"></i>
								        </a>
								        <div class="dropdown-menu" >
								          <a class="dropdown-item" href="#">Contact Client</a>
								          <a class="dropdown-item" href="#">Share</a>
								        </div>
									</div>
								</div>
								<p>Lagos, Nigeria</p>
							</div>
							</a>
						</div>
					</div>


				</div>
				<div class="see-more text-center mt-5">
					<button class="find-btn">See More</button>
				</div>
			</div>
		</div>

		<!-- Trending Section end -->

	</div>
@endsection