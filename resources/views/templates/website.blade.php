<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grupo Colima, COP 13</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/website.css"/>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse"
			            data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Desplegar navegación</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
		  	</div>
		  	<div class="container">
		  		<div class="row">
		  			<div class="col-xs-12 col-lg-9">
			  			<div class="collapse navbar-collapse navbar-ex1-collapse">
						    <ul class="nav navbar-nav">
						    	<li><a href="/">Inicio</a></li>
						    	<li class="dropdown">
						    		<a href="#!" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quiénes somos</a>
						    		<ul class="dropdown-menu">
							            <li><a href="/quienes-somos">Quiénes somos</a></li>
							            <li><a href="#!">Grupos participantes</a></li>
							            <li><a href="#!">Organigrama</a></li>
						      			<li><a href="#!">Directorio</a></li>
							        </ul>
						    	</li>
						      	<li><a href="/blog">Blog</a></li>
						    	<li class="dropdown">
						    		<a href="#!" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COP13</a>
						    		<ul class="dropdown-menu">
							            <li><a href="/sobre-cop13">Sobre la COP13</a></li>
							            <li><a href="#!">Programa de la COP13</a></li>
							            <li><a href="#!">Eventos PreCOP13</a></li>
							            <li><a href="#!">Documentos</a></li>
							            <li><a href="/sitios-de-interes">Sitios de interés</a></li>
							            <li><a href="#!">Videos</a></li>
							            <li><a href="#!">Recursos</a></li>
							        </ul>
						    	</li>
						      	<li><a href="#">Propuestas</a></li>
						      	<li><a href="#">Red de jovenes</a></li>
						      	<li><a href="/contacto">Contacto</a></li>
						    </ul>
						</div>
		  			</div>
		  			<div class="col-xs-12 col-lg-3 hidden-xs hidden-sm hidden-md redes">
		  				<a id="red1" href="https://www.facebook.com/groups/943190169062873/?fref=ts" target="_blank"><img src="/img/logo1.png"></a>
		  				<a id="red2" href=""><img src="/img/logo2.png"></a>
		  			</div>
		  		</div>
		  	</div>
		</nav>
	</header>
	<section class="container">
		<div id="logos" class="row">
			<!--Resolucion pc-->
			<div class="col-xs-12 col-lg-3 hidden-xs hidden-sm hidden-md">
				<img src="/img/semarnat.png" class="img-responsive logos-lg">
			</div>
			<div class="col-xs-12 col-lg-3 hidden-xs hidden-sm hidden-md">
				<img src="/img/cop.png" class="img-responsive logos-lg">
			</div>
			<!--Resolucion celular-->
			<div class="col-xs-12 col-lg-3 hidden-lg">
				<center>
					<img src="/img/semarnat.png" class="img-responsive logos-lg">
				</center>
			</div>
			<div class="col-xs-12 col-lg-3 hidden-lg">
				<center>
					<img src="/img/cop.png" class="img-responsive logos-lg">
				</center>
			</div>
		</div>
	</section>
	@yield('content')
	<footer>
		<center>
			<p>&copy; 2016 Grupo Colima, COP 13</p>
		</center>
	</footer>
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	@yield('scripts')
</body>
</html>