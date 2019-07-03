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
									<option>Yaba</option>
									<option>Egbeda</option>
									<option>Victoria Island</option>
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
									<option>To Let</option>
									<option>For Sale</option>
									<option>Services</option>
									<option>PPA</option>
								</select>
								<div class="caret">
									<i class="fas fa-caret-down"></i>
								</div>
							</div>
						</div>
						<div class="searching">
							<div class="find-btn-click">
								<button class="find-btn">Find Now</button>
							</div>
						</div>
					</div>
				</div>
				<div class="categories">
					<div>
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