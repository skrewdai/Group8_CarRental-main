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
					<a href="/" class="logo"><strong>CtrlDrive Auto Escapes</strong> <span>Website</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="/">Home </a> </li>

		                
		                <li> <a href="Offers">Offers</a> </li>

		                <li> <a href="AboutUs">About Us</a> </li>

		              

		                <li><a href="ContactUs">Contact Us</a></li>

		                <li class="dropdown active">
		                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
		                    
		                    <ul class="dropdown-menu">
		                        <li><a href="Team">Team</a></li>
				                <li class="active"><a href="Testimonials">Testimonials</a></li>
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
										<h1>Testimonials</h1>
									</header>

									<div class="row">
										<div class="col-6">
											<p><em>"The process was quick and hassle-free, and the vehicle was in excellent condition. I appreciate their competitive pricing and friendly staff. Definitely my go-to for future trips!"</em></p>
											<p><strong>- Maria Juana</strong></p>
											
										</div>

										<div class="col-6">
											<p><em>"The car was clean, comfortable, and reliable. The customer service team went above and beyond to accommodate my schedule changes. A top-notch rental experience."</em></p>
											<p><strong>- Jack Pingul</strong></p>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-6">
											<p><em>"I've rented from several companies before, but your company stands out for their exceptional service. The car was clean, and the rates were very competitive. What truly impressed me was the prompt and helpful customer support. I highly recommend them."</em></p>
											<p><strong>- John Ocampo</strong></p>
											
										</div>

										<div class="col-6">
											<p><em>"I rented a car for a business trip, and ctrldrive autoescapes exceeded my expectations. The reservation was straightforward, and the car was ready on time. Their professionalism and attention to detail made my trip stress-free. I'll definitely be a repeat customer."</em></p>
											<p><strong>- Anna Smith</strong></p>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-6">
											<p><em>"I rented a Group C vehicle for a weekend getaway with friends. The spaciousness and comfort of the car were exactly what we needed. [Your Company Name] made the rental process easy, and their friendly staff made us feel valued. It was a memorable trip thanks to their top-notch service."</em></p>
											<p><strong>- Alliana Gopez</strong></p>
											
										</div>

										<div class="col-6">
											<p><em>"I was hesitant about renting a car, but CtrlDrive put my worries to rest. The vehicle was well-maintained, and the whole experience was convenient. I appreciated their clear communication and responsiveness. They turned renting a car into a pleasant experience."</em></p>
											<p><strong>- James Reid</strong></p>
										</div>
										<div class="col-6">
											@foreach($testimonys as $testimony)
											<p><em>{{$testimony->message}}</em></p>
											<p><strong>{{"-".$testimony->name}}</strong></p>
											@endforeach
										</div>
										
										<form method="Post" action="{{route('testimony')}}">
											@csrf <!-- CSRF Protection -->
											<div class="fields">
												<div class="field half">
													<label for="name">Name</label>
													<input type="text" name="name" id="name" />
												</div>
												<div class="field">
													<label for="message">Notes</label>
													<textarea name="message" id="message" rows="6"></textarea>
												</div>
		
												<div class="field half text-right">
													<ul class="actions">
														<li><button type="submit" value="Send Message" class="primary" >Submit</button></li>
													</ul>
												</div>
											</div>
										</form>
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