<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

  <!-- Contenido -->

	<div class="container main-container">
		<div class="row encabezado-seccion" align="center">
			<h2>Cuestionario de Evaluación</h2>
		</div>

		<div class="row encabezado2-seccion" align="center">
			<h4>Seleciona un tema</h4>
		</div>

		
		<div class="row" align="center">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>
								<a data-toggle="modal" data-target="#myModal" href="" class="see-user">Operación - OP (20 preguntas) <i class="glyphicon glyphicon-chevron-right icon-option"></i></a>
							</td>
						</tr>
						<tr>
							<td>
								<a data-toggle="modal" data-target="#myModal" href="" class="see-user">Activos - AC (30 preguntas) <i class="glyphicon glyphicon-chevron-right icon-option"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>

	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h2 class="modal-title modal_textp">¡Atención!</h2>
	        </div>

	        <div class="modal-body">
	          	<div class="row" align="center">
					<div class="col-md-12 modal_textp">
						<h4>Estás a punto de iniciar la evaluación para Carlos Alberto ¿deseas continuar?</h4>
					</div>
				</div>
	        </div>

	        <div class="modal-footer modal_textp">	
        		<div class="row">
        			<div class="col-xs-6">
        				<button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">No</button>
        			</div>
        			<div class="col-xs-6">
        				<a href="evaluador-pregunta.php"><button type="button" class="btn btn-primary btn-lg btn-block">Sí</button></a>
        			</div>
        		</div>	
      		</div>

	      </div>
	      
	    </div>
 	</div>
	

  <!-- Fin contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>
	