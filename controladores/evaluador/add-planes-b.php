<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

  <!-- Contenido -->

	<div class="container main-container">
		<div class="row encabezado-seccion" align="center">
			<h2>Añadir Plan de Acción</h2>
		</div>

		<div class="container container-pregunta" align="center">
			<p>AC-1 ¿El concesionario cuenta con un juego de herramientas especiales (SSt) que cumpla con los lineamientos de TMEX?</p>
		</div>

		<div class="container" align="center">
			<form action="">
				<div class="row" align="center">
					<div class="col-md-3">
						<div class="form-group">
					      	<label for="fecha-hallazgo">Fecha de Hallazgo</label>
							<div class="input-group">
								<input type="text" class="search-query form-control" id="fecha-hallazgo" name="fecha-hallazgo" placeholder="aaaa / mm / dd" required>
								<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
								    <i class="fa fa-calendar" aria-hidden="true"></i>
								</button>
								</span>
							</div>
					    </div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="condicion">Condición Detectada</label>
							<input type="text" class="form-control" id="condicion" name="condicion">
					    </div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="accion-implementar">Acción a Implementar</label>
							<input type="text" class="form-control" id="accion-implementar" name="accion-implementar">
					    </div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="fecha-implementacion">Fecha de Implementación</label>
							<div class="input-group">
								<input type="text" class="search-query form-control" id="fecha-implementacion" name="fecha-implementacion" placeholder="aaaa / mm / dd" required>
								<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
								    <i class="fa fa-calendar" aria-hidden="true"></i>
								</button>
								</span>
							</div>
					    </div>
					</div>
				</div>

				<br>

				<div class="row" align="center">
					<div class="col-md-3">
						<div class="form-group">
							<label for="impacto">Impacto</label>
							<input type="text" class="form-control" id="impacto" name="impacto">
					    </div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="costo">Costo</label>
							<input type="text" class="form-control" id="costo" name="costo">
					    </div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="resposable">Responsable</label>
							<select class="form-control" id="resposable" name="resposable">
							    <option>Juan Pérez</option>
							    <option>Ana Valdez</option>
							    <option>Carlos Zarco</option>
							  </select>
					    </div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="fecha-revision">Fecha de revisión</label>
							<div class="input-group">
								<input type="text" class="search-query form-control" id="fecha-revision" name="fecha-revision" placeholder="aaaa / mm / dd" required>
								<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
								    <i class="fa fa-calendar" aria-hidden="true"></i>
								</button>
								</span>
							</div>
					    </div>
					</div>
				</div>

				<br>

				<div class="row" align="center">
					<div class="col-md-4">
						<div class="form-group">
							<label for="observaciones">Observaciones</label>
							<textarea class="form-control" rows="5" id="observaciones" name="observaciones"></textarea>
					    </div>
					</div>
					<div class="col-sm-6 col-md-offset-2 col-md-2">
						<button class="btn btn-default btn-block btn-pregunta"><i class="fa fa-camera" aria-hidden="true"></i>Añadir Evidencia</button>
					</div>
					<div class="col-sm-6 col-md-offset-1 col-md-2">
						<button class="btn btn-default btn-block btn-pregunta">Añadir Plan</button>
					</div>
				</div>
			</form>
		</div>

	</div>
	
  <!-- Fin contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>
	