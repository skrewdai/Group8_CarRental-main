<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> 
		

    </head>
	<body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">

			<body class="is-preload">
		
				<!-- Wrapper -->
					<div id="wrapper">
		
						<!-- Header -->
						<header id="header" class="alt">
							<a href="welcome" class="logo"><strong> CtrlDrive Auto Escapes</strong> <span>Website</span></a>
							<nav>
								<a href="#menu">Menu</a>
								@if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                	@endif 
                    @endauth
                </div>
            @endif
							</nav>
						</header>
		
						<!-- Menu -->
						<nav id="menu">
							<ul class="links">
								<li class="active"> <a href="welcome">Dashboard </a> </li>
		
								<li> <a href="Offers">Offers</a> </li>
		
								<li> <a href="AboutUs">About Us</a> </li>
		
							   
		
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
		
						<!-- Banner -->
							<section id="banner" class="major">
								<div class="inner">
									<header class="major">
										<h1>RENT A CAR IN MANILA </h1>
									</header>
									<div class="content">
										<p>Experience the Finest Vehicle Rental Service in Manila</p>
										<ul class="actions">
											<li><a href="ContactUs" class="button next scrolly">Contact us</a></li>
										</ul>
									</div>
								</div>
							</section>
		
						<!-- Main -->
							<div id="main">
									
									<!-- Offers -->
									<section class="tiles">
										<article>
											<span class="image">
												<img src="https://images.hindustantimes.com/auto/img/2020/11/24/600x338/Honda_City_hatchback_1606214438854_1606214445801.JPG" alt="" height="200" />
											</span>
											<header class="major">
												<h3>Group A - Hatchback</h3>
		
												<p>from : <strong>3500 pesos</strong> per day</p>
		
												<p>Group A cars are compact economy vehicles known for their exceptionally low fuel consumption. Opting for this car rental category ensures both fuel efficiency and convenient parking solutions.</p>
		
												<div class="major-actions">
													<a href="Offers" class="button small next">View Offer</a>
												</div>
											</header>
										</article>
										<article>
											<span class="image">
												<img src="https://imgcdnblog.carmudi.com.ph/carmudi-ph/wp-content/uploads/2019/03/07114536/Toyota-Vios.jpg" alt="my pic" />
											</span>
											<header class="major">
												<h3>Group B: Sedan M/T</h3>
		
												<p>from : <strong>4500 pesos</strong> per day</p>
		
												<p>Group B vehicles consist of sedans that are slightly larger than our Group A models. Selecting this car rental category offers excellent fuel efficiency along with ample seating for up to 5 individuals.</p>
		
												<div class="major-actions">
													<a href="Offers" class="button small next">View Offer</a>
												</div>
											</header>
										</article>
										<article>
											<span class="image">
												<img src="images/offer-3-720x480.jpg" alt="" />
											</span>
											<header class="major">
												<h3>Group C - AUV (7 seater) A/T</h3>
		
												<p>from : <strong>7000 pesos</strong> per day</p>
		
												<p>
													Choose Group  vehicles for ultimate comfort and ample space. Perfect for a cozy drive with seating for 7 people.
												</p>
		
												<div class="major-actions">
													<a href="Offers" class="button small next">View Offer</a>
												</div>
											</header>
										</article>
									</section>
									
									<!-- About us -->
									<section>
										<div class="inner">
											<header class="major">
												<h2>About us</h2>
											</header>
											<p>
												
											Welcome to CtrlDrive Auto Escapes, your trusted destination for premium car rental services. 
											With a diverse fleet of well-maintained vehicles, we offer tailored solutions for your travel needs. Our seamless booking process, competitive rates, and 24/7 customer support ensure a hassle-free experience. At Ctrl Drive Auto  Escapes, we prioritize customer satisfaction, 
											providing reliable rides that match your style and preferences. Choose us for a memorable journey with a commitment to quality and exceptional service.
											</p>
											<ul class="actions">
												<li><a href="AboutUs" class="button next">Read more</a></li>
											</ul>
										</div>
									</section>
		
									<!-- Testimonials -->
									<section>
										<div class="inner">
											<header class="major">
												<h2>Testimonials</h2>
											</header>
											<div class="row">
												<div class="col-6">
													<p><em>"The booking process was so easy, and the car I received was in excellent condition. The staff was friendly and professional, making sure I understood all the features of the vehicle. I highly recommend CtrlDrive Auto Escapes for anyone looking for a hassle-free car rental."</em></p>
													<p><strong>- Juan Dela Cruz</strong></p>
													
												</div>
		
												<div class="col-6">
													<p><em>"I rented a car for a family trip, and I couldn't be happier with the service provided by your company. The SUV we rented was spacious enough for all our luggage, and the kids loved the extra legroom. The pickup and drop-off process was smooth, and the staff made us feel valued as customers. Next time we need a rental, your company will be our first choice."</em></p>
													<p><strong>- Jose Santos</strong></p>
												</div>
											</div>
											<ul class="actions">
												<li><a href="Testimonials" class="button next">Read more</a></li>
											</ul>
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
									<li>Copyright © 2022 CtrlDrive Auto Escapes</li>
								
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