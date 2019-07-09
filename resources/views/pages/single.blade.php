@extends('layouts2.app')

@section('content')
<div class="corpersaid-landing">
		<div class="header2">
			<div class="container">
				<div class="search-anything">
					<div class="search-here">
						<input class="enter-search2" type="text" name="text" placeholder="Search for anything here ( Bags, PPA, Apartments, etc)">
						<button class="search-icon"><i class="fa fa-search"></i> </button>
					</div>
					<div class="select-3">
						<select class="select-option2">
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
			</div>
		</div>
		<!-- <navbar end> -->
		<div class="corpersaid-view">
			<div class="container">
				<div class="row ">
					<div class="col-md-9">
						<div class="product-view">
							<div class="product-img">
                                    @php $images = json_decode($posts->images,true); @endphp
                                    @if(is_array($images) && !empty($images))
                                    <img src='{{ URL::asset('storage/post_images/'.$images[0]) }}' width="100%"/>
                                    @endif
								<div class="product-description">
									<h3>{{$posts->title}}</h3>
									<div class="product-post">
										<div class="date-posted">
											<i class="far fa-clock"></i>
											<p>Posted: {{date('M j, Y', strtotime($posts->created_at))}}</p>
										</div>
										<div class="date-posted">
                                            <i class="fa fa-map-marker-alt"></i>
											<p>{{$posts->location->name}}</p>
										</div>
									</div>
									<div class="post-details">
										<h4>Post Details</h4>
										<p class="text-justify">{{$posts->description}}</p>
									</div>
									<div class="share-on">
										<p>Share on:</p>
										<div class="share-social">
											<button class="google-btn"><i class="fab fa-google"></i></button>
											<button class="twitter-btn"><i class="fab fa-twitter"></i></button>
											<button class="facebook-btn"><i class="fab fa-facebook-f"></i></button>
											<button class="whatsapp-btn"><i class="fab fa-whatsapp"></i></button>
										</div>
									</div>
								</div>
							</div>

							<div class="related-post">
								<h4>Related Posts:</h4>
								<div class="row">
									<div class="col-md-4">
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
									<div class="col-md-4">
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
									<div class="col-md-4">
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
									<div class="col-md-4">
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
									<div class="col-md-4">
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
									<div class="col-md-4">
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
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="contact-section">
							<div class="contact-info">
								<div class="product-price">
									<p>&#8358 34,500</p>
								</div>
								<div class="img-icon">
									<img src="{{asset('assets/images/img-icon.png')}}">
								</div>
								<div class="user-name">
									<p class="user-name-bold">{{$posts->user->name}}</p>
									<p>{{$posts->location->name}}</p>
								</div>
								<div class="register-date">
									<p>Registered</p>
									<p class="registered-date">{{date('j M, Y', strtotime($posts->user->created_at))}}</p>
								</div>
								<div class="show-contact">
									<button class="show-contact-btn">Show Contact</button>
								</div>
							</div>

							<div class="filter-listing">
								<div class="filter-list">Filter Listing</div>
								<div class="filter-keywords">
									<div class="filter-keyword">
										<label>Keyword</label>
										<input class="search-keyword" type="text" name="text" placeholder="Search Anything">
									</div>
									<div class="filter-keyword">
										<label>Price From</label>
										<input class="search-keyword" type="text" name="text" placeholder="Minimum Price">
									</div>
									<div class="filter-keyword">
										<label>Price To</label>
										<input class="search-keyword" type="text" name="text" placeholder="Maximum Price">
									</div>
									<div class="filter-keyword">
										<label>Location</label>
										<div class="select-4">
											<select class="select-option">
												<option>All Location</option>
												@foreach ($locations as $location)
                                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                                @endforeach
											</select>
											<div class="caret">
												<i class="fas fa-caret-down"></i>
											</div>
										</div>
									</div>
									<div class="filter-keyword mb-4">
										<label>Categories</label>
										<div class="select-4">
											<select class="select-option">
												<option>All Categories </option>
												@foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
											</select>
											<div class="caret">
												<i class="fas fa-caret-down"></i>
											</div>
										</div>
									</div>
									<button class="show-contact-btn">Search Now</button>
								</div>
							</div>

							<div class="filter-listing">
								<div class="filter-list">Post Listing</div>
								<div class="filter-keywords pt-5">
									@if (!Auth::guest())
										<a href="{{route('post.create')}}"><button class="btn show-contact-btn">Start Posting</button></a>
										@else 
										<a href="{{route('login')}}"><button class="btn show-contact-btn">Start Posting</button></a>
									@endif
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection