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

		                <li class="active"> <a href="AboutUs">About Us</a> </li>

		                <li><a href="ContactUs">Contact Us</a></li>

		                <li class="dropdown">
		                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
		                    
		                    <ul class="dropdown-menu">
		                        <li><a href="Team">Team</a></li>
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
										<h1>About Us</h1>
									</header>
									<span class="image main"><img src="images/about-fullscreen-1-1920x700.jpg" alt="" /></span>
									<p>Welcome to CtrlDrive Auto Escapes, your premier destination for top-notch car rental services. With a commitment to excellence and a passion for providing exceptional customer experiences, we have established ourselves as a trusted name in the industry.</p>
									<p>At our company, we understand that every journey is unique, and that's why we offer a diverse fleet of well-maintained vehicles to cater to your specific needs. Whether you're planning a business trip, a family vacation, or just need a temporary vehicle, we have the perfect solution for you.</p>
									<p>As a company deeply rooted in the community, we believe in responsible and sustainable business practices. Our vehicles are regularly inspected to ensure they meet safety standards, and we're actively working towards reducing our environmental footprint through efficient operations.</p>
									<p>Thank you for considering us for your car rental needs. We look forward to being a part of your travel experiences and providing you with a ride that matches your style, comfort, and preferences. Choose us for a partnership built on trust, quality, and exceptional service.</p>
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
