<?php
    include dirname(__FILE__) . '/../layouts/header.php';
    include dirname(__FILE__) . '/../layouts/navbar.php';
?>

<!-- Contenido -->

<div class="container main-container">
		<div class="row encabezado-seccion" align="center">
			<h2>Contenido de la Guía de Evaluación</h2>
		</div>

        <br/>

        <div class="row grupo-botones-inline btn btn-lg btn-default" align="center">
			<h4>Herramientas</h4>
		</div>

        <br/>

        <div class="row grupo-botones-inline btn btn-lg btn-default" align="center">
            <a data-toggle="modal" data-target="#myModal" href="" class="see-user">
                <h4>Documentos</h4>
            </a>
		</div>

        <br/>

        <div class="row grupo-botones-inline btn btn-lg btn-default" align="center">
			<h4>Guía de Implementación</h4>
		</div>


        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
    
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>          
            </div>
            <div class="modal-body">
                <div class="row" align="left">
                    <div class="col-md-6-offset-2">
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
                
                </div>

            </div>
        
        </div>

<!-- Fin del contenido -->

<?php
    include dirname(__FILE__) . '/../layouts/footer.php';
?>