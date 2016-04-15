@extends('templates.website')
@section('content')
<section class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="jumbotron">
				<div class="container">
			    	<h2><strong>Contacto</strong></h2>
			    	<p class="p-contacto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			    	<br/>
			    	<p class="p-contacto"><b>Dirección: </b>Tecnológico No. 1 <br>
			    	<b>Colonia: </b>Liberación <br>
			    	<b>Teléfono: </b>+52 (312) 123 4567</p>
			  	</div>
			</div>
		</div>
	</div>
	<div class="row">
		<form action="" role="form">
			<div class="col-xs-12 col-lg-6">
				<div class="form-group">
				    <label for="nombre">Nombre: <span class="required">*</span></label>
				    <input type="text" class="form-control input-lg" id="nombre" name="nombre" />
				</div>
				<div class="form-group">
				    <label for="email">Email: <span class="required">*</span></label>
				    <input type="email" class="form-control input-lg" id="email" name="email" />
				</div>
				<div class="form-group">
				    <label for="sitio_web">Sitio web: </label>
				    <input type="text" class="form-control input-lg" id="sitio_web" name="" />
				</div>
			</div>
			<div class="col-xs-12 col-lg-6">
				<label for="mensaje">Mensaje: <span class="required">*</span></label>
				<textarea class="form-control" rows="10" name="" ></textarea>
				<br/>
				<p>
					<i>Campos obligatorios</i> <span class="required">*</span>
					<button class="btn btn-success btn-lg pull-right" disabled="disabled">Enviar</button>
				</p>

			</div>	
		</form>
	</div>
</section>
@stop