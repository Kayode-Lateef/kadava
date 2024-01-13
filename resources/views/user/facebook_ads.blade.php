<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title>Kadava - Ad Search</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="home/home/img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="home/home/img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="home/home/img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="home/home/img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="home/home/img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->
	<link href="home/css/bootstrap.min.css" rel="stylesheet">
	<link href="home/css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="home/css/listing.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="home/css/custom.css" rel="stylesheet">

</head>

<body>

	<header class="header_in clearfix element_to_stick">
		<div class="container">
			<div id="logo">
				<a href="/">
					<img src="/images/Kadava_logo_black.png" width="120" height="" alt="">
				</a>
			</div>


			<!-- Top menu based on authentication status -->
			@guest
			<ul id="top_menu">
				<li><a href="{{ route('login') }}" class="btn_access">Log In</a></li>
				<li><a href="{{ route('register') }}" class="btn_access green">Join Free</a></li>
			</ul>
			@else
			<ul id="top_menu" class="drop_user">
				<li>
					<div class="dropdown user clearfix">
						<a href="#" data-bs-toggle="dropdown">
							<figure><img src="{{ Auth::user()->profile_photo_url }}" alt=""></figure>{{ Auth::user()->name }}
						</a>
						<div class="dropdown-menu">
							<div class="dropdown-menu-content">
								<ul>
								<li><a href="{{ route('dashboard') }}"><i class="icon_cog"></i>Dashboard</a></li>
									<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
											<i class="icon_key"></i>Log out
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /dropdown -->
				</li>
			</ul>
			@endguest


			<!-- /top_menu -->
			<a href="#0" class="open_close">
				<i class="icon_menu"></i><span>Menu</span>
			</a>

			<nav class="main-menu">
				<div id="header_menu">
					<a href="#0" class="open_close">
						<i class="icon_close"></i><span>Menu</span>
					</a>
					<a href="/"><img src="/images/Kadava_logo.png" width="155" height="" alt=""></a>
				</div>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="{{ route('ad_search') }}">Product Search</a></li>
					<li><a href="{{ route('pricing') }}">Pricing</a></li>
				</ul>
			</nav>


		</div>
	</header>
	<!-- /header -->

	<main class="bg_color">

		<div class="container margin_30_40">
			<div class="page_header">
				<div class="breadcrumbs">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="#">Category</a></li>
						<li>Page active</li>
					</ul>
				</div>
			</div>
			<!-- /page_header -->

			<div class="filters_full">
				<div class="container clearfix">
					<div class="sort_select">
						<select name="sort" id="sort">
							<option value="popularity" selected="selected">Sort by Popularity</option>
							<option value="rating">Sort by Average rating</option>
							<option value="date">Sort by newness</option>
						</select>
					</div>
					<div class="search_bar_list">
						<input type="text" class="form-control" placeholder="Search by keyword">
					</div>

				</div>
				<!-- FILTERS -->
				<div class="container margin_detail">

					<div class="row">
						<div class="filter_type">
							<h6>Network</h6>
							<div class="row">
								<div class="col-md-12">
									<ul class="container_network">
										<li><i class="social_facebook"></i> Facebook</li>
										<li><i class="social_twitter"></i> Twitter</li>
										<li><i class="social_instagram"></i> Instagram</li>
										<li><i class="social_tiktok"></i> TikTok</li>
										<li><i class="social_reddit"></i> Reddit</li>
										<li><i class="social_pinterest"></i> Pinterest</li>
										<li><i class="social_youtube"></i> Youtube</li>

									</ul>
								</div>

							</div>
						</div>
					</div>
					<!-- /row -->

					<div class="row">
						<div class="filter_type">
							<h6>Category</h6>
							<div class="row">
								<div class="col-md-12">
									<ul class="container_category">
										<li>
											<label class="container_check">Apparel Accessories
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Automobiles & Motorcycles
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Beauty & Health
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">CellPhones & Telecommunications
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Consumer Electronics
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Education and Office Supports
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Food
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Furniture
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Gifts
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Home & Garden
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Home appliances
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Jewelry & Accessories
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Luggage & Bags
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">Men's Clothing
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</li>
									</ul>
								</div>

							</div>
						</div>
					</div>
					<!-- /row -->

					<a href="" class="add_top_10 btn_search small">Search</a>
				</div>
				<!-- FILTERS -->


			</div>

			<br> <br>

			<!-- /filters_full -->



			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="strip">
						<figure>
							<a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
							<img src="home/img/lazy-placeholder.png" data-src="home/img/professionals_photos/ad_1.avif" class="img-fluid lazy" alt="">
							<a href="detail-page.html" class="strip_info">
								<div class="item_title">
									<h3>Custom Newborn Baby Beanie,Leather Patch Beanie for Baby,Personalized Infant Beanie With Name,Knit Hat,Baby Shower Gift, Vegan Leather Patch </h3>
								</div>
							</a>
						</figure>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> Jul 28 2023</a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> 57</a></li>
							<li>
								<div class="score"><span>Impressions<em>350K</em></span><strong>Details</strong></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="strip">
						<figure>
							<a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
							<img src="home/img/lazy-placeholder.png" data-src="home/img/professionals_photos/ad_2.avif" class="img-fluid lazy" alt="">
							<a href="detail-page.html" class="strip_info">
								<div class="item_title">
									<h3>Powerful Magnetic Window Wiper Cleaning Tool</h3>
								</div>
							</a>
						</figure>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> Jul 28 2023</a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> 57</a></li>
							<li>
								<div class="score"><span>Impressions<em>350K</em></span><strong>Details</strong></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="strip">
						<figure>
							<a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
							<img src="home/img/lazy-placeholder.png" data-src="home/img/professionals_photos/ad_3.avif" class="img-fluid lazy" alt="">
							<a href="detail-page.html" class="strip_info">
								<div class="item_title">
									<h3>Custom Newborn Baby Beanie,Leather Patch Beanie for Baby,Personalized Infant Beanie With Name,Knit Hat,Baby Shower Gift, Vegan Leather Patch </h3>
								</div>
							</a>
						</figure>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> Jul 28 2023</a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> 57</a></li>
							<li>
								<div class="score"><span>Impressions<em>350K</em></span><strong>Details</strong></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="strip">
						<figure>
							<a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
							<img src="home/img/lazy-placeholder.png" data-src="home/img/professionals_photos/ad_4.avif" class="img-fluid lazy" alt="">
							<a href="detail-page.html" class="strip_info">
								<div class="item_title">
									<h3>Powerful Magnetic Window Wiper Cleaning Tool</h3>
								</div>
							</a>
						</figure>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> Jul 28 2023</a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> 57</a></li>
							<li>
								<div class="score"><span>Impressions<em>350K</em></span><strong>Details</strong></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="strip">
						<figure>
							<a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
							<img src="home/img/lazy-placeholder.png" data-src="home/img/professionals_photos/ad_1.avif" class="img-fluid lazy" alt="">
							<a href="detail-page.html" class="strip_info">
								<div class="item_title">
									<h3>Wooden Wedding Ring Box|Acrylic Ring Box|Personalized Wedding Ring Box|Engagement Ring Box|Jewelry Box for Wife|Women&#39;s Ring Bearer </h3>
								</div>
							</a>
						</figure>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> Jul 28 2023</a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> 57</a></li>							<li>
								<div class="score"><span>Impressions<em>350K</em></span><strong>Details</strong></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="strip">
						<figure>
							<a href="{{ route('login') }}" class="wish_bt"><i class="icon_lock"></i></a>
							<img src="home/img/lazy-placeholder.png" data-src="home/img/professionals_photos/ad_2.avif" class="img-fluid lazy" alt="">
							<a href="{{ route('login') }}" class="strip_info">
								<div class="item_title">
									<h3>Custom Newborn Baby Beanie,Leather Patch Beanie for Baby,Personalized Infant Beanie With Name,Knit Hat,Baby Shower Gift, Vegan Leather Patch </h3>
								</div>
							</a>
						</figure>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> Jul 28 2023</a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> 57</a></li>
							<li>
								<div class="score"><span>Impressions<em>350K</em></span><strong>Details</strong></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="strip">
						<figure>
							<a href="{{ route('login') }}" class="wish_bt"><i class="icon_lock"></i></a>
							<img src="home/img/lazy-placeholder.png" data-src="home/img/professionals_photos/ad_3.avif" class="img-fluid lazy" alt="">
							<a href="{{ route('login') }}" class="strip_info">
								<div class="item_title">
									<h3>Powerful Magnetic Window Wiper Cleaning Tool</h3>
								</div>
							</a>
						</figure>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> Jul 28 2023</a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> 57</a></li>
							<li>
								<div class="score"><span>Impressions<em>350K</em></span><strong>Details</strong></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="strip">
						<figure>
							<a href="{{ route('login') }}" class="wish_bt"><i class="icon_lock"></i></a>
							<img src="home/img/lazy-placeholder.png" data-src="home/img/professionals_photos/ad_4.avif" class="img-fluid lazy" alt="">
							<a href="{{ route('login') }}" class="strip_info">
								<div class="item_title">
									<h3>Powerful Magnetic Window Wiper Cleaning Tool</h3>
								</div>
							</a>
						</figure>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> Jul 28 2023</a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> 57</a></li>
							<li>
								<div class="score"><span>Impressions<em>350K</em></span><strong>Details</strong></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="strip">
						<figure>
							<a href="{{ route('login') }}" class="wish_bt"><i class="icon_lock"></i></a>
							<img src="home/img/lazy-placeholder.png" data-src="home/img/professionals_photos/ad_4.avif" class="img-fluid lazy" alt="">
							<a href="{{ route('login') }}" class="strip_info">
								<div class="item_title">
									<h3>Custom Newborn Baby Beanie,Leather </h3>
								</div>
							</a>
						</figure>
						<ul>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> Jul 28 2023</a></li>
							<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> 57</a></li>
							<li>
								<div class="score"><span>Impressions<em>350K</em></span><strong>Details</strong></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
			</div>
			<!-- /row -->
			<!-- <div class="pagination_fg">
				<a href="#">&laquo;</a>
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">&raquo;</a>
			</div> -->
		</div>
		<!-- /container -->

	</main>
	<!-- /main -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<h3 data-bs-target="#collapse_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="{{ route('ad_search') }}">Product search</a></li>
							<li><a href="{{ route('login') }}">Login</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 offset-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">

						<div class="follow_us">
							<ul>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="home/img/twitter_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="home/img/facebook_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="home/img/instagram_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="home/img/youtube_icon.svg" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				<div class="col-lg-6">
					<ul class="footer-selector clearfix">
						<li>Payment Method</li>
						<li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="home/img/cards_all.svg" alt="" width="230" height="35" class="lazy"></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© KaytechIT - Kaytchit.com</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->

	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->


	<!-- COMMON SCRIPTS -->
	<script src="home/js/common_scripts.min.js"></script>
	<script src="home/js/common_func.js"></script>
	<script src="home/assets/validate.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="home/js/sticky_sidebar.min.js"></script>
	<script src="home/js/specific_listing.min.js"></script>

	<!-- Map -->
	<script src="home/js/main_map_scripts.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

</body>

</html>
