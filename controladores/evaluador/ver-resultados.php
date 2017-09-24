<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

  <!-- Contenido -->

	<div class="container main-container">
		<div class="row encabezado-seccion" align="center">
			<h2>Selecciona un usuario</h2>
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
						<tr>
							<td>
								<a href="ver-resultados-usuario.php" class="see-user">Nuevo Usuario <i class="glyphicon glyphicon-plus-sign icon-option"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
	

  <!-- Fin contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>
	