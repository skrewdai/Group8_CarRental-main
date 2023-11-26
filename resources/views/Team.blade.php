<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="welcome" class="logo"><strong>CtrlDrive Auto Escapes</strong> <span>Website</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="welcome">Home </a> </li>

		                

		                <li> <a href="Offers">Offers</a> </li>

		                <li> <a href="AboutUs">About Us</a> </li>

		                

		                <li><a href="ContactUs">Contact Us</a></li>

		                <li class="dropdown active">
		                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
		                    
		                    <ul class="dropdown-menu">
		                        <li class="active"><a href="Team">Team</a></li>
				                <li><a href="Testimonials">Testimonials</a></li>
				                <li><a href="Faqs">FAQ</a></li>
				                <li><a href="Terms">Terms</a></li>
		                    </ul>
		                </li>
            		</ul>
				</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Our team members</h1>
									</header>
									
									<div class="row">
										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="images/author-image-1-646x680.jpg" class="img-responsive" alt="">	

											<h3>Johnny William</h3>

											<h4><em>CEO</em></h4>

											<ul class="icons">
												<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="images/author-image-2-646x680.jpg" class="img-responsive" alt="">	

											<h3>Karry Pitcher</h3>

											<h4><em>CEO</em></h4>

											<ul class="icons">
												<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="images/author-image-3-646x680.jpg" class="img-responsive" alt="">	

											<h3>Mary Cool</h3>

											<h4><em>CEO</em></h4>

											<ul class="icons">
												<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="images/author-image-4-646x680.jpg" class="img-responsive" alt="">	

											<h3>Michael Soft</h3>

											<h4><em>CEO</em></h4>

											<ul class="icons">
												<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</div>

									</div>
								</div>
							</section>

					</div>

				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Copyright  © 2023 CtrlDrive Auto Escapes</li>
							<li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
						</ul>
					</div>
				</footer>

			</div>

		<!-- Scripts -->
			<script src="{{asset('/js/jquery.min.js')}}"></script>
			<script src="{{asset('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
			<script src="{{asset('/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('/js/browser.min.js')}}"></script>
			<script src="{{asset('/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('/js/util.js')}}"></script>
			<script src="{{asset('/js/main.js')}}"></script>

	</body>
</html>