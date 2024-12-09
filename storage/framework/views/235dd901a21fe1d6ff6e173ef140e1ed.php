<!doctype html>
<html class="no-js" lang="zxx">

<?php echo $__env->make('front.layouts.partials.main-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body data-background="images/slider/body-bg.jpg">
    <?php echo $__env->make('front.layouts.partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->make('front.layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!--  ====== header extra info start
    ============================================================ -->
    <main class="over-hiddenn">
        <?php echo $__env->make('front.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php echo $__env->make('front.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('front.layouts.partials.upbtn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->make('front.layouts.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/active/bawarq.org/resources/views/front/layouts/master.blade.php ENDPATH**/ ?>