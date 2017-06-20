<?php
defined('BASEPATH') OR exit('Acceso directo no disponible');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Administrador.css'); ?>">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-flow">
				<div class="navbar-header">
					<a class="navbar-brand">
						Administrador
					</a>
				</div>
				<div class="navbar-text navbar-right">
					<?php  echo "Identificado como: ".$nombreUsuario; ?>
				</div>
			</div>
		</nav>
		<div class="panel panel-default">
			<div class="tab-content">
				<ul class="nav nav-tabs nav-justified"  role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#buscarAlumno" role="tab" data-toggle="tab">
							Buscar Alumno
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#solicitudes" role="tab" data-toggle="tab">
							Solicitudes
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#agregarNotas" role="tab" data-toggle="tab">
							Subir Calificaciones
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#perfil" role="tab" data-toggle="tab">
							Perfil
						</a>
					</li>
				</ul>
				<div class="tab-pane" id="buscarAlumno" role="tabpanel">
					<div class="container">
						<?php echo $buscarAlumno; ?>
					</div>
					<div class="container">
						
					</div>
				</div>
				<div class="tab-pane" id="solicitudes" role="tabpanel">
					<div class="container">
						Solicitudes
					</div>
				</div>
				<div class="tab-pane" id="agregarNotas" role="tabpanel">
					<div class="container">
						Subir Calificaciones
					</div>
				</div>
				<div class="tab-pane" id="perfil" role="tabpanel">
					<div class="container">
						Perfil
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
		$(document).ready(function(){
			var base_url = '<?php echo base_url(); ?>';
		});
	</script>

</body>
</html>
