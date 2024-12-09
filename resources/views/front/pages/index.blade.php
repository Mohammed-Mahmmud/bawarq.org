@extends('front.layouts.master')
@section('title', 'Bawarq')
@section('content')
    <!-- ====== about-area-start
                        ==================================================== -->
    <div id="about" class="about-area over-hidden">
        <div class="about-content-wrapper about-margin mt-170 mb-110 position-relative">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-xl-12 col-lg-12 col-md-8 offset-md-0 col-sm-10 col-10">
                        <div class="about-img-wrapper position-relative mb-90">
                            <div class="about-img position-relative z-index11" data-aos="fade-right" data-aos-duration="2000"
                                data-aos-delay="100">
                                <div class="about-img-over pl-50 transition5 d-inline-block position-relative">


                                    <div class="about-shape1 position-absolute" data-aos="fade-right"
                                        data-aos-duration="2000" data-aos-delay="800"></div><!-- /about-shape1 -->
                                    <div class="about-shape2 position-absolute z-index11" data-aos="fade-right"
                                        data-aos-duration="2000" data-aos-delay="800"></div><!-- /about-shape2 -->


                                </div>
                            </div><!-- /about-img -->
                        </div><!-- /about-img-wrapper -->
                    </div><!-- /col -->

                    @livewire('front.component.about')

                </div><!-- /row -->
            </div><!-- /container -->
            <div class="about-icon position-absolute d-none d-md-inline-block z-index1 zoom-animation">
                <img src="{{ asset('front/assets') }}/images/shape/content-shape2.png" alt="about shape 2">
            </div><!-- /intro-feature-icon -->

        </div><!-- /about-wrapper -->
    </div>
    <!-- about-area-end -->
    <!-- ====== contact-area-start
                        ==================================================== -->
    @livewire('front.component.contacts')
    <!-- contact-area-end  -->

    @livewire('front.component.tools')

@endsection
