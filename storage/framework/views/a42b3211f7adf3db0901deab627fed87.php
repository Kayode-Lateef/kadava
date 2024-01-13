<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kadava">
    <title>Kadava - Ad search </title>

    <?php echo $__env->make('frontend.layouts.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<!-- SPECIFIC CSS -->
	<link href="<?php echo e(asset('frontend/css/listing.css')); ?>" rel="stylesheet">

</head>

<body>

    <?php echo $__env->make('frontend.layouts.adsearch.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- /header -->

	<main class="bg_color">

		<div class="container margin_30_40">

            <?php echo $__env->make('frontend.layouts.adsearch.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- /page_header -->


            <?php echo $__env->make('frontend.layouts.adsearch.filter-full', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- /filters_full -->


            <div class="row" id="ads-container">
                <?php echo $__env->make('frontend.layouts.adsearch.products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Products Search -->
            </div>
            <!-- /row -->

            <div class="ajax-load d-flex justify-content-center">
                    <div class="spinner-border text-center" role="status" style="">
                        <span class="visually-hidden">Loading More Ads</span>
                    </div>
            </div>





		</div>
		<!-- /container -->

	</main>
	<!-- /main -->

    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->

	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->


    <?php echo $__env->make('frontend.layouts.adsearch.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html>
<?php /**PATH C:\laragon\www\Kadava-New\resources\views/frontend/ad_search.blade.php ENDPATH**/ ?>