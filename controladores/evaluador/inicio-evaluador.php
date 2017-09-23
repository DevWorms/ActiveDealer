<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

  <!-- Contenido -->

  <div class="container main-container">
	  <div class="row encabezado-seccion" align="center">
	  	<h2>¡Bienvenido @usuario!</h2>
	  </div>
	  
	  <div class="container menu-evaluador" align="center">
	  	<h3>¿Qué desea realizar?</h3>

	  	<div class="row grupo-botones-inline">
	  		<div class="col-md-offset-3 col-md-3">
	  			<button class="btn btn-lg btn-default btn-block">Nueva Prueba</button>
	  		</div>
	  		<div class="col-md-3">
	  			<button class="btn btn-lg btn-default btn-block">Ver resultador por Usuario</button>
	  		</div>
	  	</div>
		
	  	<div class="row grupo-botones-inline">
	  		<div class="col-md-offset-3 col-md-3">
	  			<button class="btn btn-lg btn-default btn-block">Añadir Plan de Acción</button>
	  		</div>
	  		<div class="col-md-3">
	  			<button class="btn btn-lg btn-default btn-block">Planes de Acción</button>
	  		</div>
	  	</div>
	  	
	  	<div class="row grupo-botones-inline">
			<div class="col-md-offset-4 col-md-4">
				<button class="btn btn-lg btn-default">Contenido de la guia</button>
			</div>
	  	</div>

	  </div>
	</div>
	

  <!-- Fin contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>
	