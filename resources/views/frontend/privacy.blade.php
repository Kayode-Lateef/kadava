<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kadava">
    <title>Kadava - Privacy </title>

    @include('frontend.layouts.style')


    <!-- SPECIFIC CSS -->
    <link href="{{ asset('frontend/css/help.css') }}" rel="stylesheet">



</head>

<body>


    @include('frontend.layouts.header')

    <!-- /header -->
    <!-- /header -->

    <main>
        @include('frontend.layouts.privacy.hero-single')
        <!-- /hero_single -->

        @include('frontend.layouts.privacy.privacy')
        <!-- Privacy -->


    </main>
    <!-- /main -->


    @include('frontend.layouts.footer')

    <!--/footer-->

    <div id="toTop"></div><!-- Back to top button -->

    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->


    <!-- COMMON SCRIPTS -->
    @include('frontend.layouts.scripts')


</body>

</html>
