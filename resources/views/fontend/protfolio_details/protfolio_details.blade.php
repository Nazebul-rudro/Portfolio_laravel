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
        <!-- Services Details Start -->
        <div class="portfolio-details-area section-padding2">
            @foreach ($consultents as $consultent)
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-img">
                            <div class="details-img mb-40">
                                <img src="{{asset('storage/consultent/'.$consultent->image)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="details-caption pl-50">
                            <p>{{$consultent->description}}</p>
                            <h3>How can we help?</h3>
                            <p>{{$consultent->sortdescription}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <!-- Services Details End -->
     

    </main>

</x-fontend.layouts.master>