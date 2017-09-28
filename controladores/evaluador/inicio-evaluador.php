<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

  <!-- Contenido -->

	<div class="container main-container">

		<div class="container encabezado-seccion" align="center">
			<h2 class="h2-res-sm">¡Bienvenido @usuario!</h2>
		</div>
		  
		<div class="container menu-evaluador" align="center">
		  	<h3 class="h3-res-sm">¿Qué desea realizar?</h3>

		  	<div class="row grupo-botones-inline">
		  		<div class="col-sm-offset-1 col-sm-5 col-md-offset-3 col-md-3">
		  			<a href="nueva-prueba.php" class="btn btn-lg btn-default btn-block">Nueva Prueba</a>
		  		</div>
		  		<div class="col-sm-5 col-md-3">
		  			<a href="ver-resultados.php" class="btn btn-lg btn-default btn-block btn-res-sm2">Ver resultados por Usuario</a>
		  		</div>
		  	</div>
			
		  	<div class="row grupo-botones-inline">
		  		<div class="col-sm-offset-1 col-sm-5 col-md-offset-3 col-md-3">
		  			<a href="add-planes.php" class="btn btn-lg btn-default btn-block">Añadir Plan de Acción</a>
		  		</div>
		  		<div class="col-sm-5 col-md-3">
		  			<a href="planes-accion.php" class="btn btn-lg btn-default btn-block btn-res-sm2">Planes de Acción</a>
		  		</div>
		  	</div>
		  	
		  	<div class="row grupo-botones-inline">
				<div class="col-md-offset-4 col-md-4">
					<a href="contenido-guia.php" class="btn btn-lg btn-default">Contenido de la guia</a>
				</div>
		  	</div>
		</div>

	</div>
	

  <!-- Fin contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>
	