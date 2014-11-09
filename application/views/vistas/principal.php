<html>

<?php $this->load->view("vistas/header");?>

  <script type="text/javascript">
        /*$(document).ready(function() {
            $("#slSedes").change(function() {
            	alert(":P");
                $("#slSedes option:selected").each(function() {
                    sede = $('#slSedes').val();
                    $.post("http://localhost/Control_Activos/index.php/auditoria/obtenerEdificios/", {
                        sede : sede
                    }, function(data) {
                        $("#slEdificios").html(data);
                    });
                });
            })*/
	function obtEdificio(){
  		sede = $('#slSedes').val();
        $.post("http://localhost/Control_Activos/index.php/auditoria/obtenerEdificios/", {
             sede : sede
         }, function(data) {
               $("#slEdificios").html(data);
            });
	}

	function obtPiso(){
  		edificio = $('#slEdificios').val();
        $.post("http://localhost/Control_Activos/index.php/auditoria/obtenerPisos/", {
             edificio : edificio
         }, function(data) {
               $("#slPisos").html(data);
            });
	}

	function obtSala(){
  		piso = $('#slPisos').val();
        $.post("http://localhost/Control_Activos/index.php/auditoria/obtenerSalas/", {
             piso : piso
         }, function(data) {
               $("#slSalas").html(data);  
            });

	}

	function enable(){
		 $("#btnAudtoria").disabled = false;
	}

    </script>

    <script>

	</script>

<body>


	<div class="row">
		<div class="container">
			<button id="bt"> erwrwe</button>
			<!-- Search box Start -->
			<form action="<?php echo base_url();?>index.php/auditoria/crear/" method="POST">
			    <div class="well carousel-search hidden-sm">
			    	<center>
			    		<div id="example2" class="bs-docs-example">
							<h4>Selección de auditoría</h4>
							<div class="form-group">
								<div class="btn-group">
									<select class="form-control" id="slSedes" name="slSedes" onchange="obtEdificio()">	
										<option value="">Seleccione una sede</option>
										 <?php 
									        foreach($sede as $fila)
									        {
									        ?>
									            <option value="<?=$fila->id?>"><?=$fila->nombre?></option>
									        <?php
									        }
								        ?>     
									</select>	
									
									
								</div>
							</div>
							<div class="form-group">
								<div class="btn-group">								
									<select class="form-control" id="slEdificios" name="slEdificios" onchange="obtPiso()">
										<option value="">Seleccione un edificio</option>
									</select>

								</div>
							</div>
							<div class="form-group">
								<div class="btn-group">
									<h3></h3>
									<select class="form-control" id="slPisos" name="storage" onchange="obtSala()"><!-- disabled="" -->
										<option value="">Seleccione un piso</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="btn-group">
									<h3></h3>
									<select class="form-control" id="slSalas" name="storage" onchange="enable()">
										<option value="">Seleccione una sala</option>
									</select>
								</div>
							</div>

							<div class="btn-group">
					        	<h3></h3>
					            <button type="submit" id="btnAudtoria" class="btn btn-primary" disabled="true">Crear Auditoría</button>

					        </div>
						</div>
			    	 <!--<div>

			    		<div class="btn-group">  <h3>Sede: <a id="ddl_1" class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Seleccione una sede<span class="caret"></span></a>
				            <ul class="dropdown-menu">
				                <li><a href="#">Alajuela</a></li>
				                <li><a href="#">Cartago</a></li>
								<li><a href="#">San Carlos</a></li>
								<li><a href="#">San José</a></li>
								<li><a href="#">Limón</a></li>
				            </ul>
				            </h3>
			        	</div>

			    	</div>
			    	<br>
			    	<br>
			        
			        <div>
				        <div class="btn-group"> <h3>Edificio: <a id="ddl_2" class="btn btn-default dropdown-toggle btn-select2 disabled" data-toggle="dropdown" href="#">Seleccione un edificio<span class="caret"></span></a>
				            
				            <ul class="dropdown-menu">
				                <li><a href="#">Edificio 1</a></li>
				                <li><a href="#">Edificio 2</a></li>
				                <li><a href="#">Edificio 3</a></li>
				            </ul>
				            </h3>
				        </div>	

			        </div>
					<br>
       				<br>
			        <div>
				        <div class="btn-group"> <h3>Piso: <a id="ddl_3" class="btn btn-default dropdown-toggle btn-select3 disabled" data-toggle="dropdown" href="#">Seleccione un piso <span class="caret"></span></a>
				            
				            <ul class="dropdown-menu">
				                <li><a href="#">Piso 1</a></li>
				                <li><a href="#">Piso 2</a></li>
				                <li><a href="#">Piso 3</a></li>
				            </ul>
				            </h3>
				        </div>	

			        </div>
			        <br>
       				<br>

			        <div>
				        <div class="btn-group disabled"> <h3>Sala: <a id="ddl_4" class="btn btn-default dropdown-toggle btn-select4 disabled" data-toggle="dropdown"  href="#">Seleccione una sala<span class="caret"></span></a>
				            
				            <ul class="dropdown-menu">
				                <li><a href="#">Sala 1</a></li>
				                <li><a href="#">Sala 2</a></li>
				                <li><a href="#">Sala 3</a></li>
				            </ul>
				            </h3>
				        </div>	

			        </div>
			        <br>
    			    <br>
			        
			        <div class="btn-group">
			        	<h3></h3>
			            <button type="submit" id="btnAudtoria" class="btn btn-primary">Crear Auditoría</button>

			        </div>-->

			    	</center>
			    	
			    </div>
			</form>

			
			<!-- Search box End -->
	
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	 
</body>
</html>