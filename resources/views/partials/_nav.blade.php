<div class="container-fluid fixed-top bg-white nav-bar2">
        <div class="container">
            <nav class="navbar navbar-expand-lg px-0">
                <a class="navbar-brand" href="{{route('/')}}"><img class="logo-music" src="{{asset('assets/images/corpersaid-logo.svg')}}" alt="corpersaid logo"></a>
                <button class="navbar-toggler text-dark" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="fa fa-bars color-black"></span>
                </button>

                <div class="collapse navbar-collapse bg-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu orange menu-color">
                        <li class="nav-item ">
                            <a class="nav-link" href="tolet.html">To Let</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="forsale.html">For Sale</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="ppa.html">PPA</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('register')}}" > Register</a>
                        </li>
                        <!-- <li class="nav-item ">
                            <a class="nav-link post-listing-btn" href="#">Post Listing</a>
                        </li> -->
                        <li class="nav-item ">
                            <div class="dropdown">
                                <button type="button" class="btn post-listing-btn dropdown-toggle" data-toggle="dropdown">Post Listing</button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="tolet.html">TO LET</a>
                                  <a class="dropdown-item" href="forsale.html">FOR SALE</a>
                                  <a class="dropdown-item" href="services.html">SERVICES</a>
                                  <a class="dropdown-item" href="ppa.html">PPA</a>
                                </div>
                             </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>