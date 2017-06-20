<?php
defined('BASEPATH') OR exit('Acceso directo no disponible');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido Generador Actas</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/LoginGenAct.css'); ?>">
</head>
<body>

	<div class="container">
		<nav class="navbar navbar-default ">
			<div class="container-flow">
				<div class="navbar-header">
					<a class="navbar-brand">Generador de Actas Login</a>
				</div>
			</div>
		</nav>
		<div class="panel panel-default">
			<div class="row panel-body">
				<div class="col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
					<form action="">
						<div class="form-group">
							<label for="nombreUsuario">
								Nombre de Usuario
							</label>
							<input type="text" class="form-control" id="nombreUsuario" placeholder="Nombre de Usuario">
						</div>
						<div class="form-group">
							<label for="">
								Contraseña
							</label>
							<input type="password" id="pass" class="form-control" placeholder="Contraseña">
						</div>
						<div class="form-group center-block text-center">
							<button type="button" class="btn btn-success" id="btnIngresar">
								Ingresar
							</button>
						</div>
					</form>

					<form style="display: hidden" id="loginData" action="" method="POST">
						<input type="hidden" id="nombreUsuarioData" name="nombreUsuarioData">
						<input type="hidden" id="nombreIngresoData" name="nombreIngresoData">
						<input type="hidden" id="privilegiosData" name="privilegiosData">
					</form>

				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/LoginGenAct.js'); ?>"></script>

	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
		$(document).ready(function(){
			var base_url = '<?php echo base_url(); ?>';
			inicio();

		});
	</script>

</body>
</html>