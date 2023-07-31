<x-fontend.layouts.master>

    <main>

        <!-- Header Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>My Portfolio</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">My Portfolio</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
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
                                        @foreach ($alls = App\Models\Service::where('isActive', '1')->orderByRaw('RAND()')->limit(1)->get() as $all)
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <!-- Single -->
                                                <div class="single-services mb-30">
                                                    <a href="{{$all->git_link}}">
                                                        <img src="{{ asset('storage/service/' . $all->project_image) }}" alt="{{ $all->project_image }}">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                            
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="row">
                                                    @foreach ( $allservices = App\Models\Service::where('isActive', '1')->orderByRaw('RAND()')->limit(2)->get() as $allservice)
                                                    <div class="col-lg-12">
                                                        <!-- Single -->
                                                        <div class="single-services mb-30">
                                                            <a href="{{$allservice->git_link}}">
                                                                <img src="{{ asset('storage/service/' . $allservice->project_image) }}" alt="{{ $allservice->project_image }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            
                                            @foreach ( $serviceimgs = App\Models\Service::where('isActive', '1')->orderByRaw('RAND()')->limit(3)->get() as $serviceimg)
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <a href="{{$serviceimg->git_link}}">
                                                    <img src="{{ asset('storage/service/' . $serviceimg->project_image) }}" alt="{{ $serviceimg->project_image }}">
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
                           
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="services-caption">
                                   
                                    <div class="row">
                                        @foreach ($webservices = App\Models\Service::where('isActive', '1')->limit(6)->get() as $webservice)
                                        
                                        @if ($webservice->project_name == "web_desgin" )
                                        {{-- {{$webservice->project_name}} --}}
                                        
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            {{-- {{$webservice->id}} --}}
                                            <div class="single-services mb-30">
                                                <a href="{{$webservice->git_link}}">
                                                <img src="{{ asset('storage/service/' . $webservice->project_image) }}" alt="{{$webservice->project_name}}">
                                                </a>
                                            </div>
                                    </div>
                                        @endif   
                                        @endforeach     
                                    </div> 
                                </div>
                            </div>
                           
                            
                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        @foreach ($laravelservices  as $laravelservice)
                                        {{-- {{$laravelservice->id}} --}}
                                        @if ($laravelservice->project_name == "laravel_project")
                                        {{-- {{$laravelservice->id}} --}}
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                               <a href="{{$laravelservice->git_link}}">
                                                <img src="{{asset('storage/service/' . $laravelservice->project_image)}}" alt="{{$laravelservice->project_name}}">
                                               </a>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                        
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

    </main>
   
   </x-fontend.layouts.master>