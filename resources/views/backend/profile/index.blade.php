<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Personal Protfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('ui/fontend')}}/assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('ui/fontend')}}/assets/css/bootstrap.min.css">
            {{-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css"> --}}
            <link rel="stylesheet" href="{{asset('ui/fontend')}}/assets/css/style.css">
   </head>

   <body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('ui/fontend')}}/assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="menu-main d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav> 
                                            <ul id="navigation">
                                               
                                                <li><a href="{{route('login')}}">Login</a></li>
                                                
                                            </ul>
                                        </nav>
                                    </div>
                                    
                                    @if (App\Models\User::all()->count() <= 1)
                                        <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                            <a href="{{ route('register') }}" class="btn header-btn">Sign Up</a>
                                        </div> 
                                       
                                    @endif
                                
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

    <main>
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">Get Every Single Solutions.</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">I’m Designer & Devloper Nazmul Haque</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s" >jhorem rfpsum golor sidt amet, consectetur adipiscing elit, eiusmod tempor incididunt utcjhg labore bet dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="#" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Email-Address</a>
                                        <a href="#" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">haque-ia18@dipti.com.bd</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>


    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                   <div class="row justify-content-center">
                       <div class="col-lg-6">
                            <div class="footer-top-cap text-center">
                                <img src="{{asset('ui/fontend/assets/img/logo/logo2_footer.png')}}" alt="">
                                <span><a href="#"></a></span>
                                <p>ADDRESS</p>
                                <p> 306/A Boro Moghbazar, Rail Gate,    
                                </p>
                                <p>Dhaka 1217, Bangladesh, Bangladesh.</p>
                            </div>
                       </div>
                   </div>
               </div>
                
            </div>
        </div>
        <!-- Footer End-->
    </footer>
        
    </body>
    </html>