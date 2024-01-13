<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kadava">
    <title>Kadava - Ad search </title>

    @include('frontend.layouts.style')

	<!-- SPECIFIC CSS -->
	<link href="{{ asset('frontend/css/listing.css') }}" rel="stylesheet">

</head>

<body>

    @include('frontend.layouts.adsearch.header')
	<!-- /header -->

	<main class="bg_color">

		<div class="container margin_30_40">

            @include('frontend.layouts.adsearch.page-header')
			<!-- /page_header -->


            @include('frontend.layouts.adsearch.filter-full')
			<!-- /filters_full -->


            <div class="row" id="ads-container">
                @include('frontend.layouts.adsearch.products')
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

    @include('frontend.layouts.footer')
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->

	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->


    @include('frontend.layouts.adsearch.scripts')


</body>

</html>
