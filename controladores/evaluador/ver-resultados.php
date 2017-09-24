<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

  <!-- Contenido -->

	<div class="container main-container">
		<div class="row encabezado-seccion" align="center">
			<h2>Ver resultados</h2>
		</div>

		<div class="row encabezado2-seccion" align="center">
			<h4>Selecciona un usuario</h4>
		</div>

		
		<div class="row" align="center">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>
								<a href="ver-resultados-usuario.php" class="see-user"><span class="user-highlight">Pablo Loyola</span> - Citas de Servicio <i class="glyphicon glyphicon-chevron-right icon-option"></i></a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="ver-resultados-usuario.php" class="see-user"><span class="user-highlight">Carlos Alberto</span> - Jefe de Taller <i class="glyphicon glyphicon-chevron-right icon-option"></i></a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="ver-resultados-usuario.php" class="see-user"><span class="user-highlight">Gabriel Fuentes</span> - Gerente de Servicio <i class="glyphicon glyphicon-chevron-right icon-option"></i></a>
							</td>
						</tr>
						<!-- Apartado con modal para agregar nuevo usuario-->
						<tr>
							<td>
								<a data-toggle="modal" data-target="#Modal_NewUser" href="" class="see-user">Nuevo Usuario <i class="glyphicon glyphicon-plus-sign icon-option"></i></a>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>

		<div class="modal fade" id="Modal_NewUser" role="dialog">
		    <div class="modal-dialog">
		    
		      	<!-- Modal content-->
		      	<div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title modal_texto">Nuevo Usuario</h4>
			        </div>
			        <div class="modal-body">
	          			<div class="row">
	            			<div class="col-md-6 modal_texto">
	              				Left
	            			</div>
	            			<div class="col-md-6 modal_texto">
	              				Right
	            			</div>
	          			</div>
	    			</div>
		        </div>
		        <!-- Final Modal-->

		      </div>
		      
		    </div>
		 </div>
		
	</div>
	

  <!-- Fin contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>
	