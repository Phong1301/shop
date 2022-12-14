
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>@yield('title')</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('template/fe/assets/img/favicon.png') }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href=" {{ asset('template/fe/assets/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href=" {{ asset('template/fe/assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href=" {{ asset('template/fe/assets/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href=" {{ asset('template/fe/assets/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href=" {{ asset('template/fe/assets/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href=" {{ asset('template/fe/assets/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href=" {{ asset('template/fe/assets/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href=" {{ asset('template/fe/assets/css/responsive.css') }}">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{ route('home') }}">
								<img src="{{ asset('template/fe/assets/img/logo.png') }}" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item">
									<a href="{{ route('home') }}">Home</a>
								</li>
								<li>
									<a href="{{ route('shop') }}">Shop</a>
									<ul class="sub-menu">
										{{-- @foreach ($categories as $category )
											<li><a href="{{ url('category/'.$category->id) }}">{{ $category->name }}</a></li>
										@endforeach --}}
										<li><a href="{{ route('fruit') }}">Fruit</a></li>
										<li><a href="{{ route('pizza') }}">Pizza</a></li>
										<li><a href="{{ route('cream') }}">Cream</a></li>
										<li><a href="{{ route('drinks') }}">Drinks</a></li>
									</ul>
								</li>
								<li>
									<a href="{{ route('about') }}">About</a>
								</li>
								<li>
									<a href="{{ route('news') }}">News</a>
								</li>
								<li>
									<a href="{{ route('contact') }}">Contact</a>
								</li>
								<li>
									<div class="header-icons">
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										<a class="shopping-cart" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
										@if(Auth::check())
											<form action="{{ route('logout') }}" method="post" id="logout-form">
                    							@csrf
												<a class="user" href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
											</form>
										@else
											<a class="user" href="{{ route('login') }}"><i class="fas fa-user"></i></a>
										@endif
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	@yield('content')

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>Ho Chi Minh</li>
							<li>nguyenvietphong13012000@gmail.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2022</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="{{ asset('template/fe/assets/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('template/fe/assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ asset('template/fe/assets/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ asset('template/fe/assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ asset('template/fe/assets/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ asset('template/fe/assets/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ asset('template/fe/assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ asset('template/fe/assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ asset('template/fe/assets/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{ asset('template/fe/assets/js/main.js') }}"></script>

</body>
</html>