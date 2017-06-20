<?php
defined('BASEPATH') OR exit('Acceso directo no disponible');
?>
<div class="panel panel-default">
	<div class="form-group">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4 labelAdd">
					<labe for="nombreAlumno">
						Nombre de Alumno
					</labe>
				</div>
				<div class="col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control" id="nombreAlumno" placeholder="Nombre de Alumno">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4 labelAdd">
					<labe for="numeroCuenta">
						Numero de Cuenta
					</labe>
				</div>
				<div class="col-sm-8 col-md-8 col-lg-8">
					<input type="text" class="form-control" id="numeroCuenta" placeholder="Numero de Cuenta">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group center-block text-center">
		<button type="button" class="btn btn-success" id="btnBuscarAlumno">
			Buscar
		</button>
	</div>

	<script type="text/javascript" src="<?php echo base_url('assets/js/Administrador.js'); ?>"></script>

	<script type="text/javascript">
		inicio
	</script>

</div>