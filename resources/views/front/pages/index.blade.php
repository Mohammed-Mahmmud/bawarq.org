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
                            <div class="about-img position-relative z-index11" data-aos="fade-right"
                                data-aos-duration="2000" data-aos-delay="100">
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
    <div id="contact" class="contact-area over-hidden mb-160 mt-155">
        <div id="hero-btn" class="contact-wrapper position-relative">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-xl-12 col-lg-12  col-md-12  col-sm-12 col-12">
                        <div class="title text-center">
                            <span class="theme-color text-uppercase d-block mb-6">Contact Me</span>
                            <h2>Let’s Start A New Project</h2>
                        </div><!-- /title -->
                    </div><!-- /col -->
                </div><!-- /row -->
                <div class="row">
                    <div class="col-xl-6 col-lg-5 col-md-12  col-sm-12 col-12">
                        <div class="contact-wrapper mt-70">
                            <ul class="contact-info-content">
                                <li class="contact-location s-contact mb-20 transition-3 d-lg-flex align-items-center">
                                    <div class="contact-icon d-inline-block text-center theme-bg mr-30">
                                        <span class="text-white d-inline-block">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                    </div><!-- /contact-icon -->
                                    <div class="contact-text d-inline-block">
                                        <h4 class="mb-2">Location</h4>
                                        <p class="text-color mb-0">20 Bordeshi, London, Usa</p>
                                    </div>
                                </li><!-- /contact-location -->
                                <li class="contact-email s-contact mb-20 transition-3 d-lg-flex  align-items-center">
                                    <div class="contact-icon d-inline-block text-center theme-bg mr-30">
                                        <span class="text-white d-inline-block">
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                    </div><!-- /contact-icon -->
                                    <div class="contact-text">
                                        <h4 class="mb-2">Phone</h4>
                                        <p class="mb-0">
                                            <a class="text-color primary-hover d-block" href="#">+123 456
                                                7890</a>
                                        </p>
                                    </div>
                                </li><!-- /contact-email -->
                                <li class="contact-phone s-contact mb-20 transition-3 d-lg-flex  align-items-center">
                                    <div class="contact-icon d-inline-block text-center theme-bg mr-30">
                                        <span class="text-white d-inline-block">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div><!-- /contact-icon -->
                                    <div class="contact-text d-inline-block">
                                        <h4 class="mb-2">Email</h4>
                                        <p class="mb-0">
                                            <a class="text-color primary-hover d-block"
                                                href="#">hello@thames.com</a>
                                        </p>
                                    </div>
                                </li><!-- /contact-phone -->
                            </ul><!-- /contact-info-content -->
                        </div><!-- /contact-wrapper -->
                    </div><!-- /col -->
                    <div class="col-xl-6 col-lg-7 col-md-12  col-sm-12 col-12">
                        <div class="contact-wrapper">
                            <div class="contact-form mt-45">
                                <form action="php/mail.php" method="POST" id="contact-form">
                                    <div class="contact-info pt-20">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pr6 mb-12"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="2000">
                                                <input
                                                    class="name w-100 theme-border pl-20 pt-15 pb-15 pr-10 form-color border-radius5 openS-font-family"
                                                    type="text" name="inputName" id="inputName"
                                                    placeholder="Your Name">
                                                <!-- /name -->
                                            </div><!-- /col -->
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl6 pr-12 mb-12"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="2500">
                                                <input
                                                    class="email w-100 theme-border pl-20 pt-15 pb-15 pr-10 form-color border-radius5 openS-font-family"
                                                    type="email" name="inputEmail" id="inputEmail"
                                                    placeholder="Your Email">
                                                <!-- /email -->
                                            </div><!-- /col -->
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pr6 mb-12"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="2000">
                                                <input
                                                    class="phone w-100 theme-border pl-20 pt-15 pb-15 pr-10 form-color border-radius5 openS-font-family"
                                                    type="text" name="inputPhone" id="inputPhone"
                                                    placeholder="Your Phone">
                                                <!-- /phone -->
                                            </div><!-- /col -->
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 pl6 pr-12 mb-12"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="2500">
                                                <input
                                                    class="subject w-100 theme-border pl-20 pt-15 pb-15 pr-10 form-color border-radius5 openS-font-family"
                                                    type="text" name="inputSubject" id="inputSubject"
                                                    placeholder="Your Subject">
                                                <!-- /subject -->
                                            </div><!-- /col -->
                                        </div><!-- /row -->
                                        <div class="row ">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-12 pr-12 mb-12"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="2000">
                                                <textarea class="massage w-100 theme-border pl-20 pt-15 pr-10 primary-color border-radius5 openS-font-family"
                                                    name="inputMessage" id="inputMessage" placeholder="Start writing message here"></textarea>
                                            </div><!-- /col -->
                                        </div><!-- /row -->
                                        <button
                                            class="btn position-relative over-hidden text-white d-inline-block theme-bg white-text text-uppercase"
                                            type="submit" name="submit" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="2500">Submit
                                            Now</button>
                                    </div>
                                </form>
                                <p class="form-message mt-20"></p>
                            </div><!-- /contact-form -->
                        </div><!-- /contact-wrapper -->
                    </div><!-- /col -->
                </div><!-- /row -->
                <div class="row">
                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="500">
                        <div class="map-wrapper mt-70" id="mapwrapper"> </div>
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /contact-wrapper -->
    </div>
    <!-- contact-area-end  -->

    @livewire('front.component.tools')

@endsection
