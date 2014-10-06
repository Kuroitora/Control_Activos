<html>

<?php $this->load->view("vistas/header");?>

<body>
	<div class="row">
		<div class="container">
			<!-- Search box Start -->
			<form action="<?php echo base_url();?>index.php/auditoria/crear/" method="POST">
			    <div class="well carousel-search hidden-sm">
			    	<center>
			    		<div>

			    		<div class="btn-group">  <h3>Sede: </h3><a id="ddl_1" class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Seleccione una sede<span class="caret"></span></a>
				            <ul class="dropdown-menu">
				                <li><a href="#">Alajuela</a></li>
				                <li><a href="#">Cartago</a></li>
								<li><a href="#">San Carlos</a></li>
								<li><a href="#">San José</a></li>
								<li><a href="#">Limón</a></li>
				            </ul>
			        	</div>
			    	</div>
			        
			        <div>
				        <div class="btn-group"> <h3>Edificio: </h3><a id="ddl_2" class="btn btn-default dropdown-toggle btn-select2 disabled" data-toggle="dropdown" href="#">Seleccione un edificio<span class="caret"></span></a>
				            
				            <ul class="dropdown-menu">
				                <li><a href="#">Edificio 1</a></li>
				                <li><a href="#">Edificio 2</a></li>
				                <li><a href="#">Edificio 3</a></li>
				            </ul>
				        </div>	

			        </div>

			        <div>
				        <div class="btn-group"> <h3>Piso: </h3><a id="ddl_3" class="btn btn-default dropdown-toggle btn-select3 disabled" data-toggle="dropdown" href="#">Seleccione un piso <span class="caret"></span></a>
				            
				            <ul class="dropdown-menu">
				                <li><a href="#">Piso 1</a></li>
				                <li><a href="#">Piso 2</a></li>
				                <li><a href="#">Piso 3</a></li>
				            </ul>
				        </div>	

			        </div>

			        <div>
				        <div class="btn-group disabled"> <h3>Sala: </h3><a id="ddl_4" class="btn btn-default dropdown-toggle btn-select4 disabled" data-toggle="dropdown"  href="#">Seleccione una sala<span class="caret"></span></a>
				            
				            <ul class="dropdown-menu">
				                <li><a href="#">Sala 1</a></li>
				                <li><a href="#">Sala 2</a></li>
				                <li><a href="#">Sala 3</a></li>
				            </ul>
				        </div>	

			        </div>
			        
			        <div class="btn-group">
			        	<h3></h3>
			            <button type="submit" id="btnAudtoria" class="btn btn-primary">Crear Auditoría</button>
			        </div>

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