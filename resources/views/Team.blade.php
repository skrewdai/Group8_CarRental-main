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
											<img src="images/andre.jpg" class="img-responsive" alt="">	

											<h3>Andrew Calupaz</h3>

											<h4><em>Backend Developer</em></h4>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="images/jans.png" class="img-responsive" alt="">	

											<h3>Lester Castro</h3>

											<h4><em>Frontend Developer</em></h4>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="images/lombs.jpg" class="img-responsive" alt="">	

											<h3>Brent Lombos</h3>

											<h4><em>Frontend Developer</em></h4>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="images/rain.jpg" class="img-responsive" alt="">	

											<h3>Rain Maglaqui</h3>

											<h4><em>Frontend Developer</em></h4>
										</div>

										<div class="col-md-3 col-sm-6 co-xs-12 text-center">
											<img src="images/jy.jpg" class="img-responsive" alt="">	

											<h3>Jyrill Marcelo</h3>

											<h4><em>Backend Developer</em></h4>
										</div>

									</div>
								</div>
							</section>

					</div>

				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="copyright">
							<li>Copyright  © 2023 CtrlDrive Auto Escapes</li>
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