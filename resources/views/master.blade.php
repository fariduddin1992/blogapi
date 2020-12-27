<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175993553-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-175993553-1');
</script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PZRD849');
    </script>
<!-- End Google Tag Manager -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	<meta name="bingbot" content="index, follow" />
	<META NAME="Author" CONTENT="Share Your Codes">
	<META NAME="keywords"
		CONTENT="React,Laravel,Progamming concept,Php,Larvel,information,Html,css,Git,Version control">
	@if(Request::is('/'))
	<META NAME="description"
		CONTENT="Share Your codes is a Largest online Information website.Laravel,Php,Html,css,Reactjs,vuejs are diffrent Types  of Information is Here">
	<meta property="og:image" content="{{url('public/images/post_images/finderLogo.png')}}">
	<meta property="og:image:secure_url" content="{{url('public/images/post_images/finderLogo.png')}}">
	@else
	<META NAME="description" CONTENT="@yield('description')">
	@endif
	@if(Request::is('/'))
	<title>shareyourcodes | Latest online webportal and Learnig sites</title>
	<link rel="canonical" href="https://www.shareyourcodes.com/">
	@else
	<title>@yield('title')</title>
	<link rel="canonical" href="@yield('canonical')">
	@endif
	@yield('facebook_meta')
	<meta property="og:image:height" content="315" />
	@yield('twitter_meta')
	<!-- Favicon and touch icons -->
	<link rel="shortcut icon" href="assets/images/ico/favicon.ico')}}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="assets/images/ico/apple-touch-icon-57-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
		href="assets/images/ico/apple-touch-icon-72-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="assets/images/ico/apple-touch-icon-114-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="assets/images/ico/apple-touch-icon-144-precomposed.png')}}">

	<!-- jquery ui css -->
	<link href="{{url('public/assets/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- Bootstrap -->
	<link href="{{url('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<!--Animate css-->
	<link href="{{url('public/assets/css/animate.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- Navigation css-->
	<link href="{{url('public/assets/bootsnav/css/bootsnav.css')}}" rel="stylesheet" type="text/css" />
	<!-- youtube css -->
	<link href="{{url('public/assets/css/RYPP.css')}}" rel="stylesheet" type="text/css" />
	<!-- font awesome -->
	<link href="{{url('public/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- themify-icons -->
	<link href="{{url('public/assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css" />
	<!-- weather-icons -->
	<link href="{{url('public/assets/weather-icons/css/weather-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- flat icon -->
	<link href="{{url('public/assets/css/flaticon.css')}}" rel="stylesheet" type="text/css" />
	<!-- Important Owl stylesheet -->
	<link href="{{url('public/assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
	<!-- Default Theme -->
	<link href="{{url('public/assets/owl-carousel/owl.theme.css')}}" rel="stylesheet" type="text/css" />
	<!-- owl transitions -->
	<link href="{{url('public/assets/owl-carousel/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
	<!-- style css -->
	<link href="{{url('public/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{url('public/assets/sidebar/css/simple-sidebar.css')}}" rel="stylesheet">




</head>

<body>
<!-- Google Tag Manager (noscript) -->
<!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZRD849"-->
<!--height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
<!-- End Google Tag Manager (noscript) -->



	<!-- PAGE LOADER -->
	{{-- <div class="se-pre-con"></div> --}}
	<!-- *** START PAGE HEADER SECTION *** -->
	<header>
		<!-- START HEADER TOP SECTION -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
						<!-- Start header social -->
						{{-- <div class="header-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li class="hidden-xs"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
								<li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
							</ul>
						</div> --}}
						<!-- End of /. header social -->


					</div>
					<!-- Start header top right menu -->

				</div> <!-- end of /. row -->
			</div> <!-- end of /. container -->
		</div>
		<!-- END OF /. HEADER TOP SECTION -->
		<!-- START MIDDLE SECTION -->
		<div class="header-mid hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo">
							<a href="{{url('/')}}"><img src="{{url('public/assets/images/logo.svg')}}"
									class="img-responsive" alt="findertecho logo" title="findertecho logo"></a>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END OF /. MIDDLE SECTION -->
		<!-- START NAVIGATION -->
		<nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">
			<!-- Start Top Search -->
			<div class="top-search">
				<div class="container">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
					</div>
				</div>
			</div>
			<!-- End Top Search -->
			<div class="container">
				<!-- Start Atribute Navigation -->
				<div class="attr-nav">
					<ul>
						<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
					</ul>
				</div>
				<!-- End Atribute Navigation navbar-toggle hide -->
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button"
						class="{{ Request::is('education/*') ? 'navbar-toggle hide' : 'navbar-toggle' }}"
						data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>

					<a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#brand"><img
							src="{{url('public/assets/images/logo.svg')}}" class="logo" alt="findertechno"
							title="findertechno"></a>
				</div>
				{{-- <div id="page-content-wrapper">
					<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
						<button class="navbar-toggler " type="button" id="menu-toggle" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							<i class="fa fa-bars"></i>
						</button>
					</nav>
				</div> --}}
				<!-- End Header Navigation -->
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-left" data-in="" data-out="">
						<li class="dropdown active">
							<a href="{{url('/')}}">Home</a>

						</li>
						<li class="dropdown megamenu-fw">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu</a>
							<ul class="dropdown-menu megamenu-content" role="menu">
								<li>
									<div class="row">
										@php
										$categories = App\Models\Category::orderBy('name', 'asc')
										->select('id', 'name')
										->get();
										@endphp

										@foreach ($categories as $parent_category)
										{{-- @if($parent_category->name =="Phone") --}}

										@foreach ($parent_category->subcategories as $subcategory)
										<div class="col-menu col-md-3">
											{{-- <a href="{{url($parent_category->name)}}">
											<h6 class="title">{{ $parent_category->name }}</h6>
											</a> --}}
											<div class="content">

												<ul class="menu-col">

													<li>
														<a
															href={{url($parent_category->name.'/'.$parent_category->id.'/'.$subcategory->name.'/'.$subcategory->id)}}>{{$subcategory->name}}</a>
													</li>
												</ul>
											</div>
										</div> <!-- end col-3 -->
										@endforeach
										{{-- @endif --}}
										@endforeach

									</div><!-- end row -->
								</li>
							</ul>
						</li>
						@php
						$categories = App\Models\Category::orderBy('name', 'asc')
						->select('id', 'name')
						->limit(8)
						->get();
						@endphp
						{{-- @foreach ($categories as $parent_category)
						<li><a href="{{url($parent_category->name)}}">{{$parent_category->name}}</a></li>
						@endforeach --}}

						<li><a href="{{url('/contactus')}}">Contact Us</a></li>

					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<!-- END OF/. NAVIGATION -->
	</header>
	<!-- *** END OF /. PAGE HEADER SECTION *** -->
	<!-- *** START PAGE MAIN CONTENT *** -->
	<div class="mainContent">
		@yield('content')
	</div>
	<!-- *** END OF /. PAGE MAIN CONTENT *** -->
	<!-- *** START FOOTER *** -->
	<footer>
		<div class="container">
			<div class="row">
				<!-- START FOOTER BOX (About) -->
				<div class="col-sm-4 footer-box">
					<div class="about-inner">
						{{-- <img src="{{url('public/assets/images/logo-white.png')}}" class="img-responsive"
						alt="about" /> --}}
						<img src="{{url('public/assets/images/logo.svg')}}" class="img-responsive"
							alt="findertecho logo" title="findertecho logo">

						<ul>
							<li><i class="ti-location-arrow"></i>Dhaka,Bangladesh</li>
							{{-- <li><i class="ti-mobile"></i>(800) 123 456 789</li> --}}
							<li><i class="ti-email"></i>findertechno475@gmail.com
							</li>
						</ul>
					</div>
				</div>
				<!--  END OF /. FOOTER BOX (About) -->
				<!-- START FOOTER BOX (Twitter feeds) -->

				<!-- END OF /. FOOTER BOX (Twitter feeds) -->
				<!-- START FOOTER BOX (Category) -->
				<div class="col-sm-4 footer-box">
					<h3 class="wiget-title">Category</h3>
					<ul class="menu-services">
						<?php $Categorypost = App\Models\Category::all();?>

						@foreach ($Categorypost as $Categoryposts)
						{{-- @if($Categoryposts->posts->id>0) --}}
						@foreach ($Categoryposts->subcategories as $subcategory)
						<li>
							<a
								href={{url($Categoryposts->name.'/'.$Categoryposts->id.'/'.$subcategory->name.'/'.$subcategory->id)}}>{{$subcategory->name}}</a>
						</li>
						@endforeach
						{{-- @endif --}}
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- *** END OF /. FOOTER *** -->
	<!-- *** START SUB FOOTER *** -->
	<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5">
					<div class="copy">Copyright@2020 Finder Techno</div>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7">
					<ul class="footer-nav">
						<li><a href={{url('/privacy')}}>Privacy</a></li>
						<li><a href={{route('contact.index')}}>Contact</a></li>
						<li><a href={{route('about.index')}}>About</a></li>
						<li><a href="#">Donation</a></li>
						<li><a href="#">F.A.Q</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- *** END OF /. SUB FOOTER *** -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{url('public/assets/js/jquery.min.js')}}" type="text/javascript"></script>
	<!-- jquery ui js -->
	<script src="{{url('public/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{url('public/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<!-- Bootsnav js -->
	<script src="{{url('public/assets/bootsnav/js/bootsnav.js')}}" type="text/javascript"></script>
	<!-- theia sticky sidebar -->
	<script src="{{url('public/assets/js/theia-sticky-sidebar.js')}}" type="text/javascript"></script>
	<!-- youtube js -->
	<script src="{{url('public/assets/js/RYPP.js')}}" type="text/javascript"></script>
	<!-- owl include js plugin -->
	<script src="{{url('public/assets/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
	<!-- custom js -->
	<script src="{{url('public/assets/js/custom.js')}}" type="text/javascript"></script>

	<script>
		$(document).ready(function() {
		  $('#summernote').summernote({
			toolbar: [
			  ['insert', ['prettify']]
			]
		  });
		});
	</script>
	<script>
		$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#leftmenu").toggleClass("toggled");
		});
	</script>
</body>

</html>