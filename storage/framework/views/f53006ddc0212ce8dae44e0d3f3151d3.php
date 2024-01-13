<!DOCTYPE html>
<html lang="en">

<head>
       <!-- <base href="/public"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kadava">
    <title>Kadava - Home </title>

    <?php echo $__env->make('frontend.layouts.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- SPECIFIC CSS -->
    <link href="<?php echo e(asset('frontend/css/home.css')); ?>" rel="stylesheet">

</head>

<body>

<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- /header -->


    <main>

    <?php echo $__env->make('frontend.layouts.hero-single', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /hero_single -->

    <?php echo $__env->make('frontend.layouts.explore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Explore -->
        <!-- /bg_gray -->


        <?php echo $__env->make('frontend.layouts.feautures', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--Features  -->
        <!-- /bg_gray -->

        <?php echo $__env->make('frontend.layouts.call-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/call_section-->

    </main>
    <!-- /main -->

    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/footer-->

    <div id="toTop"></div><!-- Back to top button -->

    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->

    <!-- COMMON SCRIPTS -->
    <?php echo $__env->make('frontend.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- SPECIFIC SCRIPTS -->
    <script src="frontend/js/jquery.cookiebar.js"></script>
    <script>
        $(document).ready(function() {
            'use strict';
            $.cookieBar({
                fixed: true
            });
        });
    </script>

</body>

</html>
<?php /**PATH C:\laragon\www\Kadava-New\resources\views/frontend/index.blade.php ENDPATH**/ ?>