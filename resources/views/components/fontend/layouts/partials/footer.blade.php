<footer>
    <!-- Footer Start-->
    <div class="footer-area">
        <div class="container">
            @foreach (App\Models\Footer::where('isActive', 1)->limit(1)->get() as $footer)
            <div class="footer-top footer-padding">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                         <div class="footer-top-cap text-center">
                             <img src="{{asset('ui/fontend/assets/img/logo/logo2_footer.png')}}" alt="">
                             <span><a href="#">{{$footer->email}}</a></span>
                             <p style="width: 650px"> {{$footer->address}}</p>
                         </div>
                    </div>
                </div>
            </div>
             <div class="footer-bottom">
                 <div class="row d-flex justify-content-between align-items-center">
                     <div class="col-xl-9 col-lg-8">
                         <div class="footer-copy-right">
                             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/nrudhro/" target="_blank">{{$footer->name}}</a>
 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                         </div>
                     </div>
                     <div class="col-xl-3 col-lg-4">
                         <!-- Footer Social -->
                         <div class="footer-social f-right">
                             <a>Stay Connected</a>
                             <a href="{{$footer->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                             <a href="{{$footer->twitter}}"><i class="fab fa-twitter"></i></a>
                             <a href="{{$footer->facebook}}"><i class="fab fa-facebook-f"></i></a>
                             {{-- <a href="#"><i class="fas fa-globe"></i></a> --}}
                             <a href="{{$footer->instagram}}"><i class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
            </div>    

            @endforeach
           
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{asset('ui/fontend')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('ui/fontend')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('ui/fontend')}}/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('ui/fontend')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('ui/fontend')}}/assets/js/wow.min.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/animated.headline.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="{{asset('ui/fontend')}}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="{{asset('ui/fontend')}}/assets/js/contact.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/jquery.form.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/jquery.validate.min.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/mail-script.js"></script>
    <script src="{{asset('ui/fontend')}}/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{asset('ui/fontend')}}/assets/js/plugins.js"></script>
    <script src="{{asset('ui/fontend/assets/js/main.js')}}"></script>
    
</body>
</html>