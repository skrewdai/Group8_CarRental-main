<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>CtrlDrive Auto Escapes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="/" class="logo"><strong>CtrlDrive Auto Escapes</strong></a>
					<nav>
						<a href="/">Sign Out</a>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="/">Home </a> </li>

		               

		                <li class="active"> <a href="offers.html">Offers</a> </li>

		                <li> <a href="about-us.html">About Us</a> </li>

		                

		                <li><a href="contact.html">Contact Us</a></li>

		                <li class="dropdown">
		                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
		                    
		                    <ul class="dropdown-menu">
		                        <li><a href="team.html">Team</a></li>
				                <li><a href="testimonials.html">Testimonials</a></li>
				                <li><a href="faq.html">FAQ</a></li>
				                <li><a href="terms.html">Terms</a></li>
		                    </ul>
		                </li>
            		</ul>
				</nav>

								<!-- Banner -->
								<section id="banner" class="major">
									<div class="inner">
										<header class="major">
											<h1>Offers</h1>
										</header>
										
									</div>
								</section>

				<!-- Main -->
				<div id="main" class="alt">
					<section class="tiles">
						<article>
							<span class="image">
								<img src="images/hcity.jpg" alt="" />
							</span>
							<header class="major">
								<h3>Honda City 2019 Cherry Red</h3>
				
								<p>Explore the city in style with our Honda City 2019 Cherry Red. Enjoy a smooth ride and modern features, starting from <strong>Php 3,000.00</strong> per day.</p>
				
								<div class="major-actions">
									<a href="{{ route('login') }}" class="button small next">Book Now</a>
								</div>
							</header>
						</article>
						
						<article>
							<span class="image">
								<img src="images/vios.png" alt="" />
							</span>
							<header class="major">
								<h3>Toyota Vios 2019 Stock Red</h3>
				
								<p>Experience the reliability of the Toyota Vios 2019 Stock Red. Affordable and efficient, starting from <strong>Php 2,500.00</strong> per day.</p>
				
								<div class="major-actions">
									<a href="{{ route('login') }}" class="button small next">Book Now</a>
								</div>
							</header>
						</article>
				
						<article>
							<span class="image">
								<img src="images/mazda2.jpg" alt="" />
							</span>
							<header class="major">
								<h3>Mazda 2 2019</h3>
				
								<p>Drive in style with the Mazda 2 2019. Enjoy a comfortable ride with modern features, starting from <strong>Php 3,000.00</strong> per day.</p>
				
								<div class="major-actions">
									<a href="{{ route('login') }}" class="button small next">Book Now</a>
								</div>
							</header>
						</article>
				
						<article>
							<span class="image">
								<img src="images/mirage.jpg" alt="" />
							</span>
							<header class="major">
								<h3>Mirage Hatchback 2022</h3>
				
								<p>Experience the convenience of the Mirage Hatchback 2022. Automatic and perfect for everyday use, starting from <strong>Php 2,500.00</strong> per day.</p>
				
								<div class="major-actions">
									<a href="{{ route('login') }}" class="button small next">Book Now</a>
								</div>
							</header>
						</article>
				
						<article>
							<span class="image">
								<img src="images/avanza.jpg" alt="" />
							</span>
							<header class="major">
								<h3>Toyota Avanza 2023</h3>
				
								<p>Enjoy the spaciousness of the Toyota Avanza 2023. Perfect for group travels, starting from <strong>Php 5,000.00</strong> per day.</p>
				
								<div class="major-actions">
									<a href="{{ route('login') }}" class="button small next">Book Now</a>
								</div>
							</header>
						</article>
				
						<article>
							<span class="image">
								<img src="images/brv.jpg" alt="" />
							</span>
							<header class="major">
								<h3>Honda Brv 2024</h3>
				
								<p>Experience the spacious and powerful Honda Brv 2024. Perfect for family trips and adventures, starting from <strong>Php 6,000.00</strong> per day.</p>
				
								<div class="major-actions">
									<a href="{{ route('login') }}" class="button small next">Book Now</a>
								</div>
							</header>
						</article>
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

			<!-- Modal -->
		   {{--  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		      <div class="modal-dialog modal-lg" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h4 class="modal-title" id="exampleModalLabel">Book Now</h4>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		          </div>
		          <div class="modal-body">
		              <form action="#">
		              	<div class="fields">
		              		<div class="field half">
		              			<label for="field-1">Pick-up location</label>

		              			<input type="text" id="field-1" required="">
		              		</div>

		              		<div class="field half">
		              			<label for="field-2">Return location</label>

		              			<input type="text" id="field-2" required="">
		              		</div>

		              		<div class="field half">
		              			<label for="field-3">Pick-up date/time</label>

		              			<input type="text" id="field-3" required="">
		              		</div>

		              		<div class="field half">
		              			<label for="field-4">Return date/time</label>

		              			<input type="text" id="field-4" required="">
		              		</div>

		              		<div class="field">
		              			<label for="field-5">Enter full name</label>

		              			 <input type="text" id="field-5" required="">
		              		</div>

		              		<div class="field half">
		              			<label for="field-6">Enter email address</label>

		              			<input type="text" id="field-6" required="">
		              		</div>

		              		<div class="field half">
		              			<label for="field-6">Enter phone</label>

		              			<input type="text" id="field-6" required="">
		              		</div>
	              		</div>
		              </form>
		          </div>
		          <div class="modal-footer">
		            <button type="button" data-dismiss="modal">Cancel</button>
		            <button type="button">Book Now</button>
		          </div>
		        </div>
		      </div>
		    </div> --}}

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