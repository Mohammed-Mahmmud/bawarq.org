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
                         <div class="col-xl-4 col-lg-6 col-md-3 col-sm-12 col-12">
                             <div class="single-blog mb-50 shadow-hover transition3">
                                 <div class="blog-img">
                                    <a href="{{ asset($tool->image) }}" data-toggle="modal" data-target="#exampleModal-{{ $tool->id }}">
                                     <img class="w-100 img transition5" width="100px" height="200px"
                                         src="{{ asset($tool->image) }}" alt="{{ $tool->name }}">
                                    </a>
                                 </div>
                                 <div class="single-blog-content bg-white pl-30 pt-25 pb-15 pr-30">
                                     <h3 class="mb-10 mt-1" style="height:80px">
                                         <a class="primary-hover" href="#" data-toggle="modal"
                                             data-target="#exampleModal-{{ $tool->id }}">{{ $tool->name }}</a>
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
                         <div class="modal fade" id="exampleModal-{{ $tool->id }}" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModal-{{ $tool->id }}" aria-hidden="true">
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
                                             <div class="blog-modal-img" style="text-align: center">
                                                 <img style="width: 50%; height: 50%" src="{{ asset($tool->image) }}"
                                                     alt="blog post image 02">
                                             </div>
                                             <div class="row align-items-center justify-content-center">
                                                 <div class="col-12">
                                                     <div class="content-wrapper">
                                                         <h2 class="modal-title text-center">
                                                             {{ $tool->name }}
                                                         </h2>
                                                         <p>{!! nl2br(htmlspecialchars($tool->description)) !!}</p>
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
