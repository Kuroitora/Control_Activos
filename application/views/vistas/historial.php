<html>
<?php $this->load->view("vistas/header");?>
<body>
	<div class="container">
		<center>
			<h1>Historial</h1>
		</center>
<div class="panel panel-primary">
    <div class="panel-heading">
        Activos
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive">
            <table id="tbActivos" class="display">
                <thead>
					<tr>
						<th>Activos</th>
						<th>Fecha</th>
						<th>Sede</th>
						<th>Edificio</th>
						<th>Piso</th>
						<th>Sala</th>
						<th>Estado</th>
					</tr>
                </thead>
                <tbody>
                    <?php for ($i=1; $i <= 20; $i++): ?>
                    <tr>
                        
                        <td>
                        	Activo <?php echo $i; ?>
                        </td>
                        
                        <td>
							a 
                        </td>

                        <td>
							a
                        </td>

                        <td>
							a
                        </td>

                        <td>
							a
                        </td>

                        <td>
							a
                        </td>

                        <td>
							a
                        </td>
                    </tr>
                         
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
</div>
</div>
</body>
</html>