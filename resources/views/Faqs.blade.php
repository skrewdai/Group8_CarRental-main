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
		                        <li><a href="Team">Team</a></li>
				                <li><a href="Testimonials">Testimonials</a></li>
				                <li class="active"><a href="Faqs">FAQ</a></li>
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
										<h1>FAQ</h1>
									</header>

									<div class="row">
										<div class="col-6">
											<h4><i class="fa fa-question-circle"></i> How can I make a reservation?</h4>
											<p>Making a reservation with us is easy! You can either book online through our user-friendly website or give us a call at +63 012 345 6789 to speak with one of our representatives.</p>
											
										</div>

										<div class="col-6">
											<h4><i class="fa fa-question-circle"></i> What if I return the car late?</h4>
											<p> Late returns may incur additional charges. If you anticipate being late, please contact us as soon as possible to discuss options and avoid any penalties.</p>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-6">
											<h4><i class="fa fa-question-circle"></i> Are there any mileage restrictions?</h4>
											<p>Most of our rentals come with unlimited mileage, allowing you to enjoy your journey without worrying about mileage restrictions. However, some special rates or promotions might have mileage limits, so it's best to confirm when booking.</p>
										</div>

										<div class="col-6">
											<h4><i class="fa fa-question-circle"></i> Can I add an additional driver to the rental?</h4>
											<p>Yes, you can usually add an additional driver for a fee. Both the primary renter and the additional driver must meet our age and driver's license requirements.</p>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-6">
											<h4><i class="fa fa-question-circle"></i> What happens if the car breaks down?</h4>
											<p>In case of a breakdown, contact our roadside assistance number provided in your rental agreement. We'll arrange for help to get you back on the road as quickly as possible.</p>
										</div>
										<br>

										<div class="col-6">
											<h4><i class="fa fa-question-circle"></i> Can I modify my reservation?</h4>
											<p>Yes, you can modify your reservation based on availability and within our modification guidelines. Please contact us at least [Notice Period] before your rental start time for modifications.</p>
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
						</ul>
						<ul class="copyright">
							<li>Copyright © 2023 CtrlDrive Auto Escapes</li>
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
