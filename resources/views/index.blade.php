<x-fontend.layouts.master>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('ui/fontend/')}}assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->




    <main>

        @if (!empty($sliders))    
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                @foreach ($sliders as $slider)                   
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">{{$slider->caption}}</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">{{$slider->title}}</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s" >{{$slider->description}}</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Learn More</a>
                                        <a href="industries.html" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                

                @endforeach
                <!-- Single Slider -->
            </div>
        </div>
        @endif
        <!-- slider Area End-->
        <!-- About Area start -->
        @if (!empty($abouts))
        <section class="about-area section-paddingt30">
            <div class="container">
                @foreach ($abouts as $about)
                <div class="row ">
                    <div class="col-lg-5">
                        <div class="about-caption mb-50">
                            <h3>{{$about->header}}</h3>
                            <p class="pera1">{{$about->description}}</p>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-caption2">
                            <h3>Any Type Of Query<br> & Discussion.</h3>
                            <p>Late talk with me</p>
                           <div class="send-cv">
                                <a href="#">{{$about->email}}</a>
                                <i class="ti-arrow-right"></i>
                           </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </section>
        @endif
       
        <!-- About Area End -->
        <!-- Categories Area Start -->
        <section class="categories-area section-padding3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>What Services you will Get from me!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-pen"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">UI/UX Design</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi  nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-speaker"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Digital Marketing</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi  nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-portfolio"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Website Design</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi  nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
        <!-- Categories Area End -->
        <!-- Services Area Start -->
        <section class="services-area  services-padding">
            <div class="container">
               <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle">
                                <h2>What Services you will Get from me!</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="properties__button">
                                <!--Nav Button  -->                                            
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> All</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Web Design</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Laravel Project</a>
                                        
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('ui/fontend')}}/assets/img/service/services2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('ui/fontend')}}/assets/img/service/services3.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services6.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('ui/fontend')}}/assets/img/service/services2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('ui/fontend')}}/assets/img/service/services3.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('ui/fontend')}}/assets/img/service/services1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('ui/fontend')}}/assets/img/service/services3.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('ui/fontend')}}/assets/img/service/services6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!-- Want To Work Start -->
        <section class="wantToWork-area w-padding2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Dont worry for contact i`m available</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="#" class="btn btn-black f-right">Contact Me Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To Work End -->

        <!-- client-comments -->
        <section class="client-comments section-paddingt30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>Some Possitive Feedback  That Encourage Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest-blog-area start -->
            <div class="latest-blog-area">
                <div class="container">
                    <div class="custom-row">
                        <div class="blog-active">
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="{{asset('ui/fontend/assets/img/gallery/blog1.png')}}" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>   
                                                <span>UI/UX Designer</span>
                                            </div>
                                    </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="{{asset('ui/fontend/assets/img/gallery/blog2.png')}}" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>   
                                                <span>UI/UX Designer</span>
                                            </div>
                                    </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="{{asset('ui/fontend/assets/img/gallery/blog3.png')}}" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>   
                                                <span>UI/UX Designer</span>
                                            </div>
                                    </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/blog2.png" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>   
                                                <span>UI/UX Designer</span>
                                            </div>
                                    </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            <!-- End latest-blog-area -->
        </section>
        <!-- Brand Area Start -->
        <div class="brand-area pb-bottom">
            <div class="container">
                <div class="brand-active brand-border pt-50 pb-40">
                    <div class="single-brand">
                        <img src="{{asset('ui/fontend')}}/assets/img/gallery/brand1.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('ui/fontend')}}/assets/img/gallery/brand2.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('ui/fontend')}}/assets/img/gallery/brand3.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('ui/fontend')}}/assets/img/gallery/brand4.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('ui/fontend')}}/assets/img/gallery/brand2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->
        <!-- Contact Info Start -->
        <section class="contact-info-area w-padding2" data-background="assets/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-7">
                      <div class="contact-caption mb-50">
                            <h3>If Not Now, When? Let’s Work Together!</h3>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra.</p>
                            <img src="assets/img/gallery/sin.png" alt="">
                      </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <form action="{{route('message.store')}}" method="POST" class="contact-wrapper">
                            @csrf
                            <input type="text" name="name" placeholder="Full Name" value="{{old('name')}}">
                            <input type="email" name="email" placeholder="Email Address" value="{{old('email')}}">
                            <textarea name="message" id="message" placeholder="Your Message">{{old('message')}}</textarea>
                            <button class="submit-btn2" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Info End -->

    </main>

</x-fontend.layouts.master>