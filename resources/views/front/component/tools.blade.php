 <!-- ====== blog-area-start
            ==================================================== -->
 <div id="service" class="blog-area over-hidden">
     <div class="blog-wrappers section-bg pt-160 pb-120">
         <div class="container">
             <div class="row">
                 <div class="col-xl-12 col-lg-12  col-md-12  col-sm-12 col-12">
                     <div class="title">
                         <span class="theme-color text-uppercase d-block mb-6">Get Updates</span>
                         <h2>Recent Services</h2>
                     </div><!-- /title -->
                 </div><!-- /col -->
             </div><!-- /row -->
             <div class="row justify-content-center blog-wrapper blog-active mt-75">
                 @if (count($tools) > 0)
                     @foreach ($tools as $tool)
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                             <div class="single-blog mb-50 shadow-hover transition3">
                                 <div class="blog-img">
                                     <img class="w-100 img transition5" src="{{ asset($tool->image) }}"
                                         alt="{{ $tool->name }}">
                                 </div>
                                 <div class="single-blog-content bg-white pl-30 pt-25 pb-15 pr-30">
                                     <h3 class="mb-10 mt-1">
                                         <a class="primary-hover" href="#" data-toggle="modal"
                                             data-target="#exampleModal-b1">{{ $tool->name }}</a>
                                     </h3>
                                 </div>
                             </div><!-- /single-blog -->
                         </div><!-- /col -->
                     @endforeach
                 @endif
             </div><!-- /row -->
             <div class="blog-modal-wrapper">
                 @if (count($tools) > 0)
                     @foreach ($tools as $tool)
                         <!-- Modal 1 start -->
                         <div class="modal fade" id="exampleModal-b1" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModal-b1" aria-hidden="true">
                             <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                     <div class="close-icon float-right pt-10 pr-10">
                                         <button type="button" class="close d-inline-block" data-dismiss="modal"
                                             aria-label="Close">
                                             <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                         </button>
                                     </div>
                                     <div class="modal-content border-0">
                                         <div class="modal-body pl-50 pr-50 pt-10 pb-50">
                                             <div class="blog-modal-img">
                                                 <img class="w-100" src="{{ asset($tool->image) }}"
                                                     alt="blog post image 02">
                                             </div>
                                             <div class="row align-items-center justify-content-center">
                                                 <div class="col-12">
                                                     <div class="content-wrapper">
                                                         <h2 class="modal-title text-center">
                                                             {{ $tool->name }}
                                                         </h2>
                                                         <p>{!! $tool->description !!}</p>
                                                         <div class="pro-modal-footer mt-30 mb-45">
                                                             <div
                                                                 class="row align-items-center justify-content-md-between">
                                                                 <div
                                                                     class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                                     {{-- <div
                                                                         class="modal-tags d-sm-flex align-items-center pt-25">
                                                                         <h6 class="mb-0 pr-15">
                                                                             Tags :</h6>
                                                                         <ul class="tag-list">
                                                                             <li class="d-inline-block pr-10 ">
                                                                                 <a class="meta-text-color d-block"
                                                                                     href="#">Web Design</a>
                                                                             </li>
                                                                             <li class="d-inline-block pr-10 ">
                                                                                 <a class="meta-text-color d-block"
                                                                                     href="#">Social Media</a>
                                                                             </li>
                                                                             <li class="d-inline-block pr-10 ">
                                                                                 <a class="meta-text-color d-block"
                                                                                     href="#">Recent Blog</a>
                                                                             </li>
                                                                         </ul>
                                                                     </div> --}}
                                                                 </div><!-- /col -->
                                                                 <div
                                                                     class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                                     {{-- <div
                                                                         class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                                         <h6 class="pr-12 mb-0 pb-0">Share :</h6>
                                                                         <ul class="social-link text-md-right">
                                                                             <li class="d-inline-block">
                                                                                 <a class="facebook-color text-center pl-15 d-inline-block transition-3"
                                                                                     href="#"><i
                                                                                         class="fab fa-facebook-f"></i></a>
                                                                             </li>
                                                                             <li class="d-inline-block">
                                                                                 <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                                     href="#"><i
                                                                                         class="fab fa-twitter"></i></a>
                                                                             </li>
                                                                             <li class="d-inline-block">
                                                                                 <a class="google-plus-color text-center pl-15 d-inline-block transition-3"
                                                                                     href="#"><i
                                                                                         class="fab fa-google-plus-g"></i></a>
                                                                             </li>
                                                                             <li class="d-inline-block">
                                                                                 <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                                     href="#"><i
                                                                                         class="fab fa-linkedin-in"></i></a>
                                                                             </li>
                                                                         </ul><!-- social-link -->
                                                                     </div> --}}
                                                                 </div><!-- /col -->
                                                             </div> <!-- .row -->
                                                         </div>
                                                     </div>
                                                 </div><!-- /col -->
                                             </div><!-- /row -->
                                         </div><!-- /modal-body -->
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- Modal 1 end -->
                     @endforeach
                 @endif
             </div><!-- /blog-modal-wrapper end -->

         </div><!-- /container -->
     </div><!-- /blog-wrapper -->
 </div>
 <!-- blog-area-end  -->
