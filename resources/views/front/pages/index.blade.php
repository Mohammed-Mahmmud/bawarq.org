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

                    <div class="col-xl-6 col-lg-6  col-md-12 col-sm-12 col-12">
                        <div class="about-content position-relative mb-50">
                            <div class="position-relative">
                                <div class="title">
                                    <span class="theme-color text-uppercase d-block mb-1 mt--5">About Bawarq</span>
                                    <h2 class="mb-30">Oil Drilling Rigs Sale & Equipment Trading</h2>
                                </div><!-- /title -->
                            </div>
                            <p class="mb-25">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia dese runt mollit anim id est laboru doloremque laudantium, totaeaque ipsa
                                quae ab illo inven tore veritatis et quasi architecto beatae vitae.</p>
                            <p>Oremque laudantium, totaeaque ipsa quae </p>
                            <div class="about-info-wrapper pt-25 pb-20 mt-25">
                                <div class="row">
                                    <div class="col-xl-6  col-lg-12  col-md-6  col-sm-12 col-12">
                                        <ul class="about-info">
                                            <li class="d-inline-block pr-50">
                                                <p class="jostMedium-font-family mb-6">Name</p>
                                                <p class="jostMedium-font-family mb-6">Age</p>
                                                <p class="jostMedium-font-family mb-6">Occupation</p>
                                            </li><!-- /li -->
                                            <li class="d-inline-block">
                                                <p class="mb-6">James Smith</p>
                                                <p class="mb-6">29 Years</p>
                                                <p class="mb-6">System Engineer</p>
                                            </li><!-- /li -->
                                        </ul>
                                    </div><!-- /col -->
                                    <div class="col-xl-6  col-lg-12  col-md-6  col-sm-12 col-12">
                                        <ul class="about-info">
                                            <li class="d-inline-block pr-50">
                                                <p class="jostMedium-font-family mb-6">Phone</p>
                                                <p class="jostMedium-font-family mb-6">Email</p>
                                                <p class="jostMedium-font-family mb-6">Nationality</p>
                                            </li><!-- /li -->
                                            <li class="d-inline-block">
                                                <p class="mb-6">+123 456 7890</p>
                                                <p class="mb-6">hello@thames.com</p>
                                                <p class="mb-6">Bangladeshi</p>
                                            </li><!-- /li -->
                                        </ul>
                                    </div><!-- /col -->
                                </div><!-- /row -->
                            </div><!-- /about-info-wrapper -->
                            <div
                                class="about-footer-content d-flex align-items-center justify-content-sm-start justify-content-between mt-lg-2 mt-sm-4 mt-3">
                                <div class="signature pt-12 pr-45">
                                    <img src="{{ asset('front/assets') }}/images/about/signature.png" alt="signature">
                                </div>
                                <div class="about-footer-content-right mt-20 text-left">
                                    <h6 class="d-xl-inline-block text-uppercase pr5 mb-0">Bruce Wayne</h6>
                                    <span class="openS-font-family meta-text-color">Software Architect, Google
                                        Inc.</span>
                                </div>
                            </div><!-- /about-footer-content -->
                        </div><!-- /about-content -->
                    </div><!-- /col -->

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
