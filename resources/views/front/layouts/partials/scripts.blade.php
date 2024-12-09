  <!-- ================== All js here ================ -->
    <script src="{{asset('front/assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{asset('front/assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('front/assets')}}/js/popper.min.js"></script>
    <script src="{{asset('front/assets')}}/js/bootstrap.min.js"></script>
    <!-- knob-js -->
    <script src="{{asset('front/assets')}}/js/jquery-appear.js"></script>
    <script src="{{asset('front/assets')}}/js/jquery-knob.js"></script>
    <script src="{{asset('front/assets')}}/js/aos.js"></script>
    <script src="{{asset('front/assets')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{asset('front/assets')}}/js/waypoint.js"></script>
    <script src="{{asset('front/assets')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{asset('front/assets')}}/js/image-loaded.min.js"></script>
    <script src="{{asset('front/assets')}}/js/counterup-min.js"></script>
    <script src="{{asset('front/assets')}}/js/one-page-nav-min.js"></script>
    <script src="{{asset('front/assets')}}/js/slick.min.js"></script>
    <script src="{{asset('front/assets')}}/js/parallax.js"></script>
    <!-- map js -->
    <script src="{{asset('front/assets')}}/js/leaflet.js"></script>
    <script src="{{asset('front/assets')}}/js/typer.js"></script>
    <script src="{{asset('front/assets')}}/js/plugins.js"></script>
    <script src="{{asset('front/assets')}}/js/ajax-form.js"></script>
    <script src="{{asset('front/assets')}}/js/vanilla-tilt.min.js"></script>
    <script src="{{asset('front/assets')}}/js/jquery.meanmenu.min.js"></script>
    <script src="{{asset('front/assets')}}/js/main.js"></script>
    <script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
    <script>
      CKEDITOR.replace('ckeditor');
    </script>
    @yield('scripts')