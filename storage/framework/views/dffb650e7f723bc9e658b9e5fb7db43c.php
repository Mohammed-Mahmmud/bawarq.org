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
                 <!--[if BLOCK]><![endif]--><?php if(count($tools) > 0): ?>
                     <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                             <div class="single-blog mb-50 shadow-hover transition3">
                                 <div class="blog-img">
                                     <img class="w-100 img transition5" src="<?php echo e(asset($tool->image)); ?>"
                                         alt="<?php echo e($tool->name); ?>">
                                 </div>
                                 <div class="single-blog-content bg-white pl-30 pt-25 pb-15 pr-30">
                                     <h3 class="mb-10 mt-1">
                                         <a class="primary-hover" href="#" data-toggle="modal"
                                             data-target="#exampleModal-b1"><?php echo e($tool->name); ?></a>
                                     </h3>
                                 </div>
                             </div><!-- /single-blog -->
                         </div><!-- /col -->
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                 <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
             </div><!-- /row -->
             <div class="blog-modal-wrapper">
                 <!--[if BLOCK]><![endif]--><?php if(count($tools) > 0): ?>
                     <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                 <img class="w-100" src="<?php echo e(asset($tool->image)); ?>"
                                                     alt="blog post image 02">
                                             </div>
                                             <div class="row align-items-center justify-content-center">
                                                 <div class="col-12">
                                                     <div class="content-wrapper">
                                                         <h2 class="modal-title text-center">
                                                             <?php echo e($tool->name); ?>

                                                         </h2>
                                                         <p><?php echo $tool->description; ?></p>
                                                         <div class="pro-modal-footer mt-30 mb-45">
                                                             <div
                                                                 class="row align-items-center justify-content-md-between">
                                                                 <div
                                                                     class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                                     
                                                                 </div><!-- /col -->
                                                                 <div
                                                                     class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                                                     
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
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                 <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
             </div><!-- /blog-modal-wrapper end -->

         </div><!-- /container -->
     </div><!-- /blog-wrapper -->
 </div>
 <!-- blog-area-end  -->
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/active/bawarq.org/resources/views/front/component/tools.blade.php ENDPATH**/ ?>