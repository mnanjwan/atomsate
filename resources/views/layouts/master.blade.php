<!DOCTYPE html>
<!-- OLMO - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">


	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="DSAThemes"/>
		<meta name="description" content="OLMO - Software, App, SaaS & Startup Landing Pages Pack"/>
		<meta name="keywords" content="Responsive, HTML5, DSAThemes, One Page, Landing, Software, Mobile App, SaaS, Startup, Creative, Freelancers, Digital Product">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  		<!-- SITE TITLE -->
		<title>@yield('title')</title>

		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="{{ asset('frontAssets/images/logo-01.png') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('frontAssets/images/logo-01.png') }}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontAssets/images/logo-01.png') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontAssets/images/logo-01.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontAssets/images/logo-01.png"') }}>
		<link rel="apple-touch-icon" href="{{ asset('frontAssets/images/apple-touch-icon.png') }}">
		<link rel="icon" href="{{ asset('frontAssets/images/logo-01.png') }}" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{ asset('frontAssets/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- FONT ICONS -->
		<link href="{{ asset('frontAssets/css/flaticon.css') }}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{ asset('frontAssets/css/menu.css') }}" rel="stylesheet">
		<link id="effect" href="{{ asset('frontAssets/css/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
		<link href="{{ asset('frontAssets/css/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('frontAssets/css/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('frontAssets/css/owl.theme.default.min.css') }}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{ asset('frontAssets/css/animate.css') }}" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="{{ asset('frontAssets/css/style.css') }}" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="{{ asset('frontAssets/css/responsive.css') }}" rel="stylesheet">
        @livewireStyles
        @notifyCss
	</head>



	<body>




		<!-- PRELOADER SPINNER
		============================================= -->
		<div id="loading" class="skyblue-loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<span class="smllogo"><img src="{{ asset('frontAssets/images/logo-01.png')}}" alt="mobile-logo"/>ATOM</span>
				</div>
			</div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->
		<div id="page" class="page">

        <!-- HEADER
			============================================= -->
            @include("partials.header")

            @yield('content')

			<!-- FOOTER-1
			============================================= -->
            @include("partials.footer")

		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->
		<script src="{{ asset('frontAssets/js/jquery-3.6.0.min.js') }}"></script>
		<script src="{{ asset('frontAssets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontAssets/js/modernizr.custom.js') }}"></script>
		<script src="{{ asset('frontAssets/js/jquery.easing.js') }}"></script>
		<script src="{{ asset('frontAssets/js/jquery.appear.js') }}"></script>
		<script src="{{ asset('frontAssets/js/jquery.scrollto.js') }}"></script>
		<script src="{{ asset('frontAssets/js/menu.js') }}"></script>
		<script src="{{ asset('frontAssets/js/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('frontAssets/js/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('frontAssets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('frontAssets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('frontAssets/js/quick-form.js') }}"></script>
		<script src="{{ asset('frontAssets/js/request-form.js') }}"></script>
		<script src="{{ asset('frontAssets/js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('frontAssets/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('frontAssets/js/wow.js') }}"></script>

		<!-- Custom Script -->
		<script src="{{ asset('frontAssets/js/custom.js')}}"></script>



        @livewireScripts
        @notifyJs
        <x:notify-messages />
	</body>



</html>
