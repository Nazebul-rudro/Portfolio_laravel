<header>
    <!-- Header Start -->
    <div class="header-area">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{asset('ui/fontend/assets/img/logo/logo.png')}}" alt="missing imgs"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="{{route('home')}}">Home</a></li>
                                            <li><a href="{{route('fontend.about')}}">About</a></li>
                                            <li><a href="{{route('fontend.service')}}">Services</a></li>
                                            <li><a href="{{route('fontend.protfolio')}}">Portfolio</a></li>
                                            {{-- <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="portfolio_details.html">Portfolio Details</a></li>
                                                </ul>
                                            </li> --}}
                                            <li><a href="{{route('fontend.contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                    <a href="{{route('fontend.protfolio_details')}}" class="btn header-btn">Get Free Consultent</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->
</header>