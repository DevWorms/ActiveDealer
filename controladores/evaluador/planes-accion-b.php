<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

  <!-- Contenido -->

    <div class="container main-container">
        <div class="row encabezado-seccion" align="center">
            <h2>Planes de Acción</h2>
        </div>

        <div class="container container-pregunta" align="center">
            <p>AC-1 ¿El concesionario cuenta con un juego de herramientas especiales (SSt) que cumpla con los lineamientos de TMEX?</p>
        </div>
      
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">General</a></li>
                <li><a data-toggle="tab" href="#menu1">Detalle</a></li>
                <li><a data-toggle="tab" href="#menu2">Gráficas</a></li>
            </ul>

            <div class="tab-content tab-content2">
                <div id="home" class="tab-pane fade in active planes-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Fecha de Hallazgo</label>
                                <p>23/09/2017</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Condición Detectada</label>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Acción a Implementar</label>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Fecha de Implementación</label>
                                <p>23/09/2017</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Impacto</label>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Costo</label>
                                <p>$ 30,000</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Responsable</label>
                                <p>Juan Pérez</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Fecha de revisión</label>
                                <p>23/09/2017</p>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-9" align="justify">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eos officia maxime numquam soluta, sint, hic ipsa excepturi ipsam eum, tenetur magni facilis repudiandae voluptatibus voluptatum neque optio possimus error fugit sunt ipsum aliquam? <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet fugit, ipsa error expedita ratione voluptas dolorum maiores blanditiis sunt, quidem impedit ab. Ea, est necessitatibus nisi, possimus error fugit sunt!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu1" class="tab-pane fade planes-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Total de Personal</label>
                                <p>300</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Total General</label>
                                <p>700</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>% de Avance</label>
                                <p>60</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Usuarios erróneos</label>
                                <p>20</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Usuario Acertados</label>
                                <p>120</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Rango</label>
                                <p>10 - 100</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>KPA 1</label>
                                <p>30</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>KPA 2</label>
                                <p>40</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu2" class="tab-pane fade planes-content">
                    <div class="row" align="center">
                        <h3 class="encabezado-tab">Gráficas</h3>
                    </div>
                    
                    <div class="container">
                        <div id="chartContainer"></div>
                    </div>
                </div>
            </div>
        </div>
    

  <!-- Fin contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>
    