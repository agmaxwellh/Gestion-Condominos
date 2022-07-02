<!doctype html>
<html lang="en">

<head>

	<!--====== Required meta tags ======-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--====== Title ======-->
	<title>Start | Landing Page for Startup and SaaS Business</title>

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="/images/favicon.png" type="image/png">

	<!--====== Slick css ======-->
	<link rel="stylesheet" href="/css/slick.css">

	<!--====== Line Icons css ======-->
	<link rel="stylesheet" href="/css/LineIcons.css">

	<!--====== Magnific Popup css ======-->
	<link rel="stylesheet" href="/css/magnific-popup.css">

	<!--====== tailwind css ======-->
	<link rel="stylesheet" href="/css/tailwind.css">


</head>

<body>

	<!--====== HEADER PART START ======-->

	<header class="header-area">
		<div class="navigation">
			<div class="container">
				<div class="row">
					<div class="w-full">
						<nav class="flex items-center justify-between navbar navbar-expand-md">
							<a class="mr-4 navbar-brand" href="index.html">
								<img src="/images/logo_transparent.png" alt="Logo" style="height: 4rem;">
							</a>

							<button class="block navbar-toggler focus:outline-none md:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
							</button>

							<!-- justify-center hidden md:flex collapse navbar-collapse sub-menu-bar -->
							<div class="absolute left-0 z-30 hidden w-full px-5 py-3 duration-300 bg-white shadow md:opacity-100 md:w-auto collapse navbar-collapse md:block top-100 mt-full md:static md:bg-transparent md:shadow-none" id="navbarOne">
								<ul class="items-center content-start mr-auto lg:justify-center md:justify-end navbar-nav md:flex">
									<!-- flex flex-row mx-auto my-0 navbar-nav -->
									<!-- <li class="nav-item active">
										<a class="page-scroll" href="#home">HOME</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#service">SERVICES</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#pricing">PRICING</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#testimonial">Testimonial</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#contact">CONTACT</a>
									</li> -->
								</ul>
							</div>

							<div class="items-center justify-end hidden navbar-social lg:flex">
								<span class="mr-4 font-bold uppercase text-white">SÍGUENOS</span>
								<ul class="flex footer-social">
									<li><a href="#"><i class="lni-facebook-filled text-white"></i></a></li>
									<li><a href="#"><i class="lni-twitter-original text-white"></i></a></li>
									<li><a href="#"><i class="lni-instagram-original text-white"></i></a></li>
								</ul>
							</div>
						</nav> <!-- navbar -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- navgition -->

		<div id="home" class="relative z-10 header-hero" style="background-image: url(/images/header-bg.jpeg); background-repeat: no-repeat; background-size: cover; background-position: center center">
			<div class="container">
				<div class="justify-center row">
					<div class="w-full lg:w-5/6 xl:w-2/3">
						<div class="pt-48 pb-64 text-center header-content">
							<h3 class="mb-5 text-3xl font-semibold leading-tight text-white md:text-5xl">Autogestión de Condominio Rosal Plaza B</h3>
							<p class="px-5 mb-10 text-xl text-white">Proyecto de autogestión de la torre B, para el beneficio de nuestra comunidad</p>
							<ul class="flex flex-wrap justify-center">
								<li><a class="mx-3 main-btn gradient-btn" href="{{ route('login') }}">INGRESAR</a></li>
								<li><a class="mx-3 main-btn page-scroll" href="#service">CONOCER MÁS<i class="ml-2 lni-play"></i></a></li>
							</ul>
						</div> <!-- header content -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
			<div class="absolute bottom-0 z-20 w-full h-auto -mb-1 header-shape">
				<img src="/images/header-shape.svg" alt="shape">
			</div>
		</div> <!-- header content -->
	</header>

	<!--====== HEADER PART ENDS ======-->

	<!--====== SERVICES PART START ======-->

	<section id="service" class="relative services-area py-120">
		<div class="container">
			<div class="flex">
				<div class="w-full mx-4 lg:w-1/2">
					<div class="pb-10 section-title">
						<h4 class="title">Creado en pro</h4>
						<p class="text">de nuestra comunidad y nuestra autonomia</p>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
			<div class="flex">
				<div class="w-full lg:w-2/3">
					<div class="row">
						<div class="w-full md:w-1/2">
							<div class="block mx-4 services-content sm:flex">
								<div class="services-icon">
									<i class="lni-bolt"></i>
								</div>
								<div class="mb-8 ml-0 services-content media-body sm:ml-3">
									<h4 class="services-title">Respuesta</h4>
									<p class="text">Creado para dar respuesta rápida a nuestras necesidades.</p>
								</div>
							</div> <!-- services content -->
						</div>
						<div class="w-full md:w-1/2">
							<div class="block mx-4 services-content sm:flex">
								<div class="services-icon">
									<i class="lni-bar-chart"></i>
								</div>
								<div class="mb-8 ml-0 services-content media-body sm:ml-3">
									<h4 class="services-title">Costos</h4>
									<p class="text">Creado para disminuir nuestros costos mensuales.</p>
								</div>
							</div> <!-- services content -->
						</div>
						<div class="w-full md:w-1/2">
							<div class="block mx-4 services-content sm:flex">
								<div class="services-icon">
									<i class="lni-brush"></i>
								</div>
								<div class="mb-8 ml-0 services-content media-body sm:ml-3">
									<h4 class="services-title">Imagen</h4>
									<p class="text">Creado para mantener el valor de nuestro edificio.</p>
								</div>
							</div> <!-- services content -->
						</div>
						<div class="w-full md:w-1/2">
							<div class="block mx-4 services-content sm:flex">
								<div class="services-icon">
									<i class="lni-bulb"></i>
								</div>
								<div class="mb-8 ml-0 services-content media-body sm:ml-3">
									<h4 class="services-title">Ideas</h4>
									<p class="text">Creado para permitir crecer con nuestras propias ideas.</p>
								</div>
							</div> <!-- services content -->
						</div>
					</div> <!-- row -->
				</div> <!-- row -->
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="services-image">
			<div class="image">
				<img src="/images/torres.jpeg" alt="Services" class="rounded-2xl shadow-2xl">
			</div>
		</div> <!-- services image -->
	</section>

	<!--====== SERVICES PART ENDS ======-->

	<!--====== CONTACT PART START ======-->

	<section id="contact" class="contact-area py-120">
		<div class="container">
			<div class="justify-center row">
				<div class="w-full mx-4 lg:w-1/2">
					<div class="pb-10 text-center section-title">
						<h4 class="title">Contáctanos</h4>
						<p class="text">Si tienes dudas, quejas o sugerencias envialos usando el siguiente formulario</p>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
			<div class="justify-center row">
				<div class="w-full lg:w-2/3">
					<div class="contact-form">
						<form id="contact-form" action="/contact.php" method="post" data-toggle="validator">
							<div class="row">
								<div class="w-full md:w-1/2">
									<div class="mx-4 mb-6 single-form form-group">
										<input type="text" name="name" placeholder="Tu Nombre" data-error="El nombre es obligatorio." required="required">
										<div class="help-block with-errors"></div>
									</div> <!-- single form -->
								</div>
								<div class="w-full md:w-1/2">
									<div class="mx-4 mb-6 single-form form-group">
										<input type="email" name="email" placeholder="Tu Correo electrónico" data-error="Es necesario un correo electrónico válido." required="required">
										<div class="help-block with-errors"></div>
									</div> <!-- single form -->
								</div>
								<div class="w-full md:w-1/2">
									<div class="mx-4 mb-6 single-form form-group">
										<input type="text" name="subject" placeholder="Asunto" data-error="El asunto es requerido." required="required">
										<div class="help-block with-errors"></div>
									</div> <!-- single form -->
								</div>
								<div class="w-full md:w-1/2">
									<div class="mx-4 mb-6 single-form form-group">
										<input type="text" name="phone" placeholder="Teléfono" data-error="El teléfono es requerido." required="required">
										<div class="help-block with-errors"></div>
									</div> <!-- single form -->
								</div>
								<div class="w-full">
									<div class="mx-4 mb-6 single-form form-group">
										<textarea rows="5" placeholder="Your Mesaage" name="Mensaje" data-error="Déjanos tu mensaje." required="required"></textarea>
										<div class="help-block with-errors"></div>
									</div> <!-- single form -->
								</div>
								<p class="mx-4 form-message"></p>
								<div class="w-full">
									<div class="mx-4 mt-2 text-center single-form form-group">
										<button type="submit" class="main-btn gradient-btn focus:outline-none">Enviar mensaje</button>
									</div> <!-- single form -->
								</div>
							</div> <!-- row -->
						</form>
					</div> <!-- row -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</section>

	<!--====== CONTACT PART ENDS ======-->

	<!--====== FOOTER PART START ======-->

	<footer id="footer" class="bg-gray-100 footer-area">
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="w-full">
						<div class="items-end justify-between block mb-8 footer-logo-support md:flex">
							<div class="flex items-end footer-logo">
								<a class="mt-8" href="index.html"><img src="/images/logo_transparent_alt.png" alt="Logo" style="height: 4rem;"></a>

								<ul class="flex mt-8 ml-8 footer-social">
									<li><a href="javascript:void(0)"><i class="lni-facebook-filled"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni-twitter-original"></i></a></li>
									<li><a href="javascript:void(0)"><i class="lni-instagram-original"></i></a></li>
								</ul>
							</div> <!-- footer logo -->

						</div> <!-- footer logo support -->
					</div>
				</div> <!-- row -->
				<div class="row">
					<div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6">
						<div class="mb-8 footer-link">
							<!-- <h6 class="footer-title">Rosal Plaza Torre B</h6>
							<ul>
								<li><a href="javascript:void(0)">About</a></li>
								<li><a href="javascript:void(0)">Contact</a></li>
								<li><a href="javascript:void(0)">Career</a></li>
							</ul> -->
						</div> <!-- footer link -->
					</div>
					<div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
						<div class="mb-8 footer-link">
							<!-- <h6 class="footer-title">Product & Services</h6>
							<ul>
								<li><a href="javascript:void(0)">Products</a></li>
								<li><a href="javascript:void(0)">Business</a></li>
								<li><a href="javascript:void(0)">Developer</a></li>
							</ul> -->
						</div> <!-- footer link -->
					</div>
					<div class="w-full sm:w-5/12 md:w-1/3 lg:w-1/4">
						<div class="mb-8 footer-link">
							<!-- <h6 class="footer-title">Help & Suuport</h6>
							<ul>
								<li><a href="javascript:void(0)">Support Center</a></li>
								<li><a href="javascript:void(0)">FAQ</a></li>
								<li><a href="javascript:void(0)">Terms & Conditions</a></li>
							</ul> -->
						</div> <!-- footer link -->
					</div>
					<div class="w-full sm:w-7/12 md:w-1/2 lg:w-1/3">
						<div class="mb-8 footer-newsletter">
							<!-- <h6 class="footer-title">Subscribe Newsletter</h6>
							<div class="newsletter">
								<form action="#" class="relative mb-4">
									<input type="text" placeholder="Your Email" class="w-full py-3 pl-6 pr-12 duration-300 bg-gray-200 border border-gray-200 rounded-full focus:border-blue-600 focus:outline-none">
									<button type="submit" class="absolute top-0 right-0 mt-3 mr-6 text-xl text-blue-600">
										<i class="lni-angle-double-right"></i>
									</button>
								</form>
							</div>
							<p class="font-medium text-gray-900">Subscribe weekly newsletter to stay upto date. We don’t send spam.</p> -->
						</div> <!-- footer newsletter -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- footer widget -->

		<div class="bg-blue-900 footer-copyright">
			<div class="container">
				<div class="row">
					<div class="w-full">
						<div class="py-6 text-center">
							<p class="text-white">
								Template Crafted by
								<a class="text-blue-500 duration-300 hover:text-blue-700" rel="nofollow" href="https://tailwindtemplates.co">TailwindTemplates</a>
							</p>
						</div>
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- footer copyright -->
	</footer>

	<!--====== FOOTER PART ENDS ======-->

	<!--====== BACK TO TOP PART START ======-->

	<a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>

	<!--====== BACK TO TOP PART ENDS ======-->


	<!--====== jquery js ======-->
	<script src="/js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="/js/vendor/jquery-1.12.4.min.js"></script>

	<!--====== Ajax Contact js ======-->
	<script src="/js/ajax-contact.js"></script>

	<!--====== Scrolling Nav js ======-->
	<script src="/js/jquery.easing.min.js"></script>
	<script src="/js/scrolling-nav.js"></script>

	<!--====== Validator js ======-->
	<script src="/js/validator.min.js"></script>

	<!--====== Magnific Popup js ======-->
	<script src="/js/jquery.magnific-popup.min.js"></script>

	<!--====== Slick js ======-->
	<script src="/js/slick.min.js"></script>

	<!--====== Main js ======-->
	<script src="/js/main.js"></script>

</body>

</html>