<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

  <!-- Contenido -->

	<div class="container main-container">
	  <div class="row encabezado-seccion" align="center">
	  	<h2 class="h2-res-sm">Resumen Usuario</h2>
	  </div>
	  
	  <ul class="nav nav-tabs">
	    <li class="active"><a data-toggle="tab" href="#home">Resumen</a></li>
	    <li><a data-toggle="tab" href="#menu1">Gráficos</a></li>
	  </ul>

	  <div class="tab-content">
	    <div id="home" class="tab-pane fade in active">
	      <div class="row" align="center">
  				<h3 class="encabezado-tab h3-res-sm">Resumen</h3>
	      </div>
	      	      
	      <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Sección</th>
			        <th>Criterios</th>
			        <th>Preguntas</th>
			        <th>Resultado</th>
			        <th># Preguntas</th>
			        <th>Obligatoria vs No Obligatoria</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>Total de activos</td>
			        <td>96</td>
			        <td>43</td>
			        <td></td>
			        <td>25</td>
			        <td>36 No Obligatoria</td>
			      </tr>
			      <tr>
			        <td>% Avance Activos</td>
			        <td>91%</td>
			        <td>93%</td>
			        <td></td>
			        <td>83</td>
			        <td>103 No Obligatoria</td>
			      </tr>
			      <tr>
			        <td>Total de Operaciones</td>
			        <td>121</td>
			        <td>56</td>
			        <td></td>
			        <td>108</td>
			        <td>139 Total</td>
			      </tr>
			      <tr>
			        <td>% Avance de Operaciones</td>
			        <td>83%</td>
			        <td>75%</td>
			        <td></td>
			        <td></td>
			        <td></td>
			      </tr>
			      <tr>
			        <td>Total de Personal</td>
			        <td>24</td>
			        <td>9</td>
			        <td></td>
			        <td></td>
			        <td></td>
			      </tr>
			      <tr>
			        <td>% Avance de Personal</td>
			        <td>69%</td>
			        <td>50%</td>
			        <td></td>
			        <td></td>
			        <td></td>
			      </tr>
			      <tr>
			        <td>Total General</td>
			        <td>241</td>
			        <td>108</td>
			        <td></td>
			        <td></td>
			        <td></td>
			      </tr>
			      <tr>
			        <td>% Avance General</td>
			        <td>84.6%</td>
			        <td>77.7%</td>
			        <td></td>
			        <td></td>
			        <td></td>
			      </tr>
			    </tbody>
			  </table>
	    </div>

	    <div id="menu1" class="tab-pane fade">
	      <div class="row" align="center">
  				<h3 class="encabezado-tab">Gráficas de Avance</h3>
	      </div>
				<div class="container">
	      	<div id="chartContainer"></div>
	      </div>
	  </div>
	</div>
	

  <!-- Fin contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>
	