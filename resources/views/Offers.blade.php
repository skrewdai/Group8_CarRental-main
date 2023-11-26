<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>	
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

		               

		                <li class="active"> <a href="Offers">Offers</a> </li>

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

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Offers</h1>
									</header>
								</div>
							</section>

							<section class="tiles">
								<article>
									<span class="image">
										<img src="images/offer-1-720x480.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Lorem ipsum dolor sit amet, consectetur</h3>

										<p>from : <strong>$ 120.00</strong> per weekend</p>

										<p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>

										<div class="major-actions">
											<a href="#" data-toggle="modal" data-target="#exampleModal" class="button small next">Book Now</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/offer-2-720x480.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Lorem ipsum dolor sit amet, consectetur</h3>

										<p>from : <strong>$ 120.00</strong> per weekend</p>

										<p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>

										<div class="major-actions">
											<a href="#" data-toggle="modal" data-target="#exampleModal" class="button small next">Book Now</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/offer-3-720x480.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Lorem ipsum dolor sit amet, consectetur</h3>

										<p>from : <strong>$ 120.00</strong> per weekend</p>

										<p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>

										<div class="major-actions">
											<a href="#" data-toggle="modal" data-target="#exampleModal" class="button small next">Book Now</a>
										</div>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/offer-4-720x480.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Lorem ipsum dolor sit amet, consectetur</h3>

										<p>from : <strong>$ 120.00</strong> per weekend</p>

										<p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>

										<div class="major-actions">
											<a href="#" data-toggle="modal" data-target="#exampleModal" class="button small next">Book Now</a>
										</div>
									</header>
								</article>

								<article>
									<span class="image">
										<img src="images/offer-5-720x480.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Lorem ipsum dolor sit amet, consectetur</h3>

										<p>from : <strong>$ 120.00</strong> per weekend</p>

										<p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>

										<div class="major-actions">
											<a href="#" data-toggle="modal" data-target="#exampleModal" class="button small next">Book Now</a>
										</div>
									</header>
								</article>

								<article>
									<span class="image">
										<img src="images/offer-6-720x480.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Lorem ipsum dolor sit amet, consectetur</h3>

										<p>from : <strong>$ 120.00</strong> per weekend</p>

										<p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>

										<div class="major-actions">
											<a href="#" data-toggle="modal" data-target="#exampleModal" class="button small next">Book Now</a>
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
		    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		      <div class="modal-dialog modal-lg" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h4 class="modal-title" id="exampleModalLabel">Book Now</h4>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		          </div>
		          <div class="modal-body">
		              <form method="POST" action="{{route('reserve')}}">
						@csrf <!-- CSRF Protection -->
		              	<div class="fields">
		              		<div class="field half">
		              			<label for="field-1">Pick-up location</label>

		              			<input type="text" id="pickup" name="pickup" required="">
		              		</div>

		              		<div class="field half">
		              			<label for="field-2">Return location</label>

		              			<input type="text" id="return" name="return" required="">
		              		</div>

		              		<div class="field half">
		              			<label for="field-3">Pick-up date/time</label>

		              			<!-- <input type="text" id="pickdate" name="pickdate" required=""> -->
								<input type="datetime-local" id="pickdate" name="datetime"> 
		              		</div>

		              		<div class="field half">
		              			<label for="field-4">Return date/time</label>

		              			<!-- <input type="text" id="retdate" name="retdate" required=""> -->
								<input type="datetime-local" id="retdate" name="datetime1"> 
		              		</div>

		              		<div class="field">
		              			<label for="field-5">Enter full name</label>

		              			 <input type="text" id="fname" name="fname" required="">
		              		</div>

		              		<div class="field half">
		              			<label for="field-6">Enter email address</label>

		              			<input type="text" id="email" name="email" required="">
		              		</div>

		              		<div class="field half">
		              			<label for="field-6">Enter phone</label>

		              			<input type="text" id="phone" name="phone" required="">
		              		</div>
							<div class="modal-footer">
								<button type="button" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Book Now</button>
							</div>
	              		</div>
		              </form>
		          </div>
		        </div>
		      </div>
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