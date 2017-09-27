<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

  <!-- Contenido -->

	<div class="container main-container">
		<div class="row encabezado-seccion" align="center">
			<h2>Nueva Prueba</h2>
		</div>

		<div class="row encabezado2-seccion" align="center">
			<h4>Selecciona Usuario</h4>
		</div>

		
		<div class="row" align="center">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>
								<a href="seleccion-tema.php" class="see-user"><span class="user-highlight">Pablo Loyola</span> - Citas de Servicio <i class="glyphicon glyphicon-chevron-right icon-option"></i></a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="seleccion-tema.php" class="see-user"><span class="user-highlight">Carlos Alberto</span> - Jefe de Taller <i class="glyphicon glyphicon-chevron-right icon-option"></i></a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="seleccion-tema.php" class="see-user"><span class="user-highlight">Gabriel Fuentes</span> - Gerente de Servicio <i class="glyphicon glyphicon-chevron-right icon-option"></i></a>
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
						<h4 class="modal-title modal_texto modal_textp">Nuevo Usuario</h4>
			        </div>
			        
			        <div class="modal-body modal_textp">
			        	<form action="" method="">
		          			<div class="row">
		            			<div class="col-md-6 modal_texto">
		              				<label for="nombre">Nombre</label>
	    							<input type="text" class="form-control" id="nombre_NewUser">
	    							<br>

	    							<label for="telefono">Teléfono</label>
	    							<input type="text" class="form-control" id="telefono_NewUser">
	    							<br>

	    							<label for="telefono">Número de empleado</label>
	    							<input type="text" class="form-control" id="telefono_NewUser">
	    							<br>

	    							<label for="observaciones">Observaciones</label>
    								<textarea class="form-control" id="obv_NewUser"></textarea>
		            			</div>

		            			<div class="col-md-6 modal_texto">
		              				<label for="apellidos">Apellidos</label>
	    							<input type="text" class="form-control" id="apellido_NewUser">
	    							<br>

	    							<label for="direccion">Dirección</label>
    								<textarea class="form-control modal_nivel_tipo" id="dir_NewUser"></textarea>
    								<br>

    								<select class="form-control" id="inlineFormCustomSelect">
									    <option selected>Tipo de persona</option>
									    <option value="1">Gerente de Servicio</option>
									    <option value="2">Citas de Servicio</option>
									    <option value="3">Jefe de Taller</option>
									</select>
									<br>
									<div class="row" id="res_Lap"">
										<div class="col-md-4 funcionaplease" id="div_file">
											<!--<button type="submit" class="btn btn-primary modal_boton_altura">Cargar foto</button>-->
											<p id="text_foto" class="funcionaplease">Cargar foto</p>
											<input type="file" id="foto_newUser" class="funcionaplease">
										</div>
										<div class="col-md-1">
										</div>
										<div class="col-md-4">
											<button type="submit" class="btn btn-default modal_boton_crear modal_boton_altura">Crear Usuario</button>
										</div>
									</div>

									<div class="row" id="res_Tab">
										<div class="col-md-4">
											<div id="div_fileDos">
											<!--<button type="submit" class="btn btn-primary modal_boton_altura">Cargar foto</button>-->
											<p id="text_foto">Cargar foto</p>
											<input type="file" id="foto_newUserDos">
										</div>
										<br>
										<button type="submit" class="btn btn-default">Crear Usuario</button>
										</div>
									</div>
		            			</div>
		          			</div>
		          		</form>
	    			</div>
		        </div>
		        <!-- Final Modal-->
		    </div>
		</div>
		
	</div>
	

  <!-- Fin contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>
	