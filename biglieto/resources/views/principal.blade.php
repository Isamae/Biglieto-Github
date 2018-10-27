<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Biglieto">
		<meta name="author" content="Diego Montesdeoca">
		<meta name="keyword" content="Biglieto">
		<link rel="icon" href="img/icono.png">
		<title>Biglieto</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Bootstrap  CSS -->
		<link href="css/biglicss.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	
		
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

				
	</head>
	<body>
		<div id="app">
			<!-- Navegador -->
			<nav>
				<div class="navbar-default navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="logo">
								<a  href="index.html"><img src="img/logo_pagina.png" alt="Biglieto"/></a>
							</div>
							
						</div>
						<div class="navbar-collapse collapse ">
							<ul class="nav navbar-nav navbar-left">
								<li>
									<a href="#about">Nosotros</a>
								</li>
								<li>
									<a href="#services">Servicios</a>
								</li>
								<li>
									<a href="#portfolio">Portafolio</a>
								</li>
								<li>
									<a href="#team">Equipo</a>
								</li>
								<li>
									<a href="#contact">Contactos</a>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
			</nav>
			<!--// Navegador-->
			@yield('recorrido')											
			<!-- Informacion de Biglieto -->
			<section id="about" class="light-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="section-title">
								<h1>¿QUE ES BIGLIETO? </h1>
								<p>Somos una empresa tecnológica que optimiza, automatiza y moderniza el transporte terrestre, mediante una plataforma ágil  y segura. </h2>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- about module -->
						<div class="col-md-3 text-center">
							<div class="mz-module-about">
								
								<h3>VISIÓN</h3>
								<p>Ser un referente tecnológico para innovación y progreso de los sistemas y procesos de transporte.</p>
							</div>
						</div>
						<!-- end about module -->
						<!-- about module -->
						<div class="col-md-3 text-center">
							<div class="mz-module-about">
								
								<h3>PROPÓSITO</h3>
								<p>Ayudar a las personas a ahorrar su tiempo.</p>
							</div>
						</div>
						<!-- end about module -->
						<!-- about module -->
						<div class="col-md-3 text-center">
							<div class="mz-module-about">
								
								<h3>SLOGAN</h3>
								<p>Perder tu tiempo no es una opción.</p>
							</div>
						</div>
						<!-- end about module -->
						<!-- about module -->
						<div class="col-md-3 text-center">
							<div class="mz-module-about">
								
								<h3>VALORES</h3>
								<p> Somos honestos, responsables, sinceros, altruistas, colaborativos, respetuosos, y procuramos el trabajo en equipo.</p>
							</div>
						</div>
						<!-- end about module -->
					</div>
				</div>
				<!-- /.container -->
			</section>
			<section class="overlay-dark bg-img1 dark-bg short-section">
				<div class="container text-center">
					<div class="row">
						<div class="col-md-3 mb-sm-30">
							<div class="counter-item">
								<h2 data-count="59">1</h2>
								<h6>Premios</h6>
							</div>
						</div>
						<div class="col-md-3 mb-sm-30">
							<div class="counter-item">
								<h2 data-count="1054">20</h2>
								<h6>Clientes</h6>
							</div>
						</div>
						<div class="col-md-3 mb-sm-30">
							<div class="counter-item">
								<h2 data-count="34">2</h2>
								<h6>Miembros</h6>
							</div>
						</div>
						<div class="col-md-3 mb-sm-30">
							<div class="counter-item">
								<h2 data-count="154">1</h2>
								<h6>Proyectos</h6>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- //Informacion de Biglieto -->

			<!-- Portafolio -->
			<section id="portfolio" class="light-bg">
				<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Portafolio</h2>
							<p>Nuestro portafolio es la mejor manera de mostrar nuestro trabajo, aquí puede ver una gran variedad de nuestro trabajo. Compruébalos y encontrarás lo que estás buscando.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Item de portafolio -->
					<div class="col-md-4">
						<div class="ot-portfolio-item">
							<figure class="effect-bubba">
								<img src="img/demo/chimborazo.png" alt="img02" class="img-responsive" />
								<figcaption>
									<h2>Pichincha</h2>
									<p>Chimborazo</p>
									<a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<!--// Item de portafolio -->
					<!-- Item de portafolio -->
					<div class="col-md-4">
						<div class="ot-portfolio-item">
							<figure class="effect-bubba">
								<img src="img/demo/cuatro-Mundos.png" alt="img02" class="img-responsive" />
								<figcaption>
									<h2>Ecuador</h2>
									<p>Cuatro Mundos</p>
									<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<!--// Item de portafolio -->
					<!--Item de portafolio -->
					<div class="col-md-4">
						<div class="ot-portfolio-item">
							<figure class="effect-bubba">
								<img src="img/demo/Costa-Sieraa-Ori-Gala.png" alt="img02" class="img-responsive" />
								<figcaption>
									<h2>Ecuador</h2>
									<p>Costa Sierra Oriente y Galapagos</p>
									<a href="#" data-toggle="modal" data-target="#Modal-3">View more</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<!--// Item de portafolio -->
				</div>
				<div class="row">
					<!-- Item de portafolio -->
					<div class="col-md-4">
						<div class="ot-portfolio-item">
							<figure class="effect-bubba">
								<img src="img/demo/Malecon.png" alt="img02" class="img-responsive" />
								<figcaption>
									<h2>Guayaquil</h2>
									<p>Malecón 2000</p>
									<a href="#" data-toggle="modal" data-target="#Modal-4">View more</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<!-- //Item de portafolio -->
					<!-- Item de portafolio -->
					<div class="col-md-4">
						<div class="ot-portfolio-item">
							<figure class="effect-bubba">
								<img src="img/demo/Quito-Unesco.png" alt="img02" class="img-responsive" />
								<figcaption>
									<h2>Quito</h2>
									<p>Patrimonio de la Unesco</p>
									<a href="#" data-toggle="modal" data-target="#Modal-5">View more</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<!-- //Item de portafolio -->
					<!-- Item de portafolio -->
					<div class="col-md-4">
						<div class="ot-portfolio-item">
							<figure class="effect-bubba">
								<img src="img/demo/volcanes-Ecuador.png" alt="img02" class="img-responsive" />
								<figcaption>
									<h2>Volcanes</h2>
									<p>sorprendetes y maravillosos</p>
									<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<!--// Item de portafolio -->
				</div>
				</div>
			</section>

			<!-- //Portafolio -->
			<!-- Mienbros-->	
			<section id="team" class="light-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="section-title">
								<h2>Equipo</h2>
								<p>Una Startup, lista para impulsar un cambio positivo en sociedad. Biglieto es la mejor de la ciudad a la hora de conseguir tu boleto</p>
							</div>
						</div>
					</div>
					<div class="row">
						
						<!-- Item Mienbro Equipo -->
						<div class="col-md-3 col-md-offset-3">
							<div class="team-item">
								<div class="team-image">
									<img src="img/demo/IMG1.jpg" class="img-responsive img-circle center-block" alt="author">
								</div>
								<div class="team-text">
									<h3>Brenda Arias</h3>
									<div class="team-location">Azuay, Cuenca</div>
									<div class="team-position">– Disenadora –</div>
									<p> Worsa dona namet, cons uectetur dipiscing adon elit. Aliquam vitae fringilla unda mir.</p>
								</div>
							</div>
						</div>
						<!-- //Item Mienbro Equipo -->
						
						<!--Item Mienbro Equipo-->
						<div class="col-md-3">
							<div class="team-item ">
								<div class="team-image">
									<img src="img/demo/IMG2.jpg" class="img-responsive  img-circle center-block" alt="author">
								</div>
								<div class="team-text">
									<h3>Diego Montesdeoca</h3>
									<div class="team-location">Azuay, Cuenca</div>
									<div class="team-position">– Programador –</div>
									<p>Dolor sit don namet, cons uectetur beriscing adon elit. Aliquam vitae fringilla unda.</p>
								</div>
							</div>
						</div>
						<!--// Item Mienbro Equipo -->
					</div>
				</div>
			</section>
			<!--// Mienbros-->

			<!--Contactos-->							
			<section id="contact">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="section-title">
								<h2>Contactos</h2>
								<p>Si tiene alguna pregunta o necesita ayuda! Póngase en contacto con nosotros! <br>Tienes una empresa de transporte integrate y brinda tus servicios</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h3>Nuestra oficina</h3>
							<p>Cuenca, tres puentes 3-12</p>
							<p><i class="fa fa-phone"></i>0962548726</p>
							<p><i class="fa fa-envelope"></i> biglietot@gmail.com</p>
						</div>
						<div class="col-md-3">
							<h3>Horario de Atención</h3>
							<p><i class="fa fa-clock-o"></i> <span class="day">Lunes a Domingo</span><span> 9am - 7pm</span></p>
						</div>
						<div class="col-md-6">
							<form name="sentMessage" id="contactForm" novalidate="">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Nombre*" id="name" required="" data-validation-required-message="Por favor ingrese su nombre.">
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Correo *" id="email" required="" data-validation-required-message="Por favor ingrese su correo">
											<p class="help-block text-danger"></p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" placeholder="Su Mensaje*" id="message" required="" data-validation-required-message="Por favor ingrese su mensaje."></textarea>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="row">
									<div class="col-lg-12 text-center">
										<div id="success"></div>
										<button type="submit" class="btn">Enviar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!--//Contactos-->

			<!--Regresar Top-->
			<p id="back-top">
				<a href="#top"><i class="fa fa-angle-up"></i></a>
			</p>
			<!--//Regresar Top-->
		</div>
		<footer>
			<div class="container text-center">
				<p>Diseñado Por:<a href="http://Biglieto"><span>Biglieto.com</span></a></p>
			</div>
		</footer>
		
		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/app.js"></script>
		<script src="js/biglicss.js"></script>
		
		
		

	</body>
</html>