<style type="text/css">
	.panel-body{
		height: 300px;
		overflow: hidden;
		overflow-x: hidden;
	}
</style>

<div class="container">
	<hr>
		<h3 class="title">Consultas?</br>
			<small>Complete el siguiente formulario y nos comunicaremos con Ud. a la brevedad.</small>
		 </h3> 
 	<hr>
	<form class="form-horizontal" role="form" method="post" action="index.php">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" placeholder="Nombre y Apellido" value="" required>
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="email" value="" required email>
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Consulta</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="4" name="message" required></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>	