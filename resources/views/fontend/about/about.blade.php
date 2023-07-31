<x-fontend.layouts.master>        
    <!-- Preloader Start -->
    {{-- <x-slot:title>
    Hello
    </x-slot> --}}

 <main>

        <!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>About me</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">About me</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- About Me Start -->
        <div class="about-me pb-top">
            <div class="container">
                @foreach ($Personals as $personal)
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-me-img mb-30">
                            <img src="{{asset('storage/protfolioprofile/' . $personal->image)}}" alt="" height="470" width="300">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="about-me-caption">
                            <h2>{{$personal->header}}</h2> 
                            <p class="pb-30">{{$personal->sortdescription}}</p>
                            <h5>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</h5>
                            <p>{{$personal->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- About Me End -->
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
                        <a href="{{route('fontend.contact')}}" class="btn btn-black f-right">Contact Me Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To Work End -->
        <!-- client-comments -->
        <div class="client-comments section-paddingt30">
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
                            @foreach ($feedbacks as $feedback)
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="{{asset('/storage/reviews/'.$feedback->image)}}" alt="" height="50" width="50" class="rounded-circle">
                                            </div>
                                            <div class="comment-person">
                                                <h2>{{$feedback->name}}</h2>   
                                                <span>{{$feedback->project_name}}</span>
                                            </div>
                                    </div>
                                        <p>{{$feedback->comment}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>            
            <!-- End latest-blog-area -->
        </div>
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
        

    </main>

</x-fontend.layouts.master>