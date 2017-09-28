<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

<!-- Contenido -->

<div class="container main-container">
		<div class="row encabezado-seccion" align="center">
			<h2 class="h2-res-sm">Contenido de la Guía de Evaluación</h2>
		</div>

        <br/>

        <div class="row" align="center">
			<div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                <a href="#" class="btn btn-lg btn-default btn-block">Herramientas</a>
                <br><br>
                <a href="#" class="btn btn-lg btn-default btn-block" data-toggle="modal" data-target="#myModal">Documentos</a>
                <br><br>
                <a href="#" class="btn btn-lg btn-default btn-block">Guía de Implementación</a>
            </div>
		</div>


        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>          
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    A <B>paragraph</B> of text with on
                                    <u>unassigned link</u>
                                    A second row of text with a <a href="http://www.google.com"><u>web link</u></a>
                                </p>
                                <br/>
                                <p>
                                    A <B>paragraph</B> of text with on
                                    <u>unassigned link</u>
                                    A second row of text with a <a href="http://www.google.com"><u>web link</u></a>
                                </p>
                                <br/>
                                <p>
                                    A <B>paragraph</B> of text with on
                                    <u>unassigned link</u>
                                    A second row of text with a <a href="http://www.google.com"><u>web link</u></a>
                                </p>
                                <br/>
                                <p>
                                    A <B>paragraph</B> of text with on
                                    <u>unassigned link</u>
                                    A second row of text with a <a href="http://www.google.com"><u>web link</u></a>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <img src="http://via.placeholder.com/500?text=imgPreview" class="img-preview" alt="image preview">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Fin del contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>