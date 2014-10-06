<html>

<?php $this->load->view("vistas/header");?>
<body>
<div class="container">
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
						<th>Existentes</th>
						<th>Activos</th>
						<th>Valor cuantitativo</th>
						<th>Valor cualitativo</th>
						<th>Comentario</th>
					</tr>
                </thead>
                <tbody>
                    <?php for ($i=1; $i <= 20; $i++): ?>
                    <tr>
                        <td>
                            <div class="col-lg-6">
                            <div class="input-group">
                                <input type="checkbox" checked>
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->

                        </td>
                        
                        <td>Activo <?php echo $i; ?></td>
                        
                        <td>
                            <select class="form-control">
                                <div class="col-lg-6">
                                <option value="one">1</option>
                                <option value="two">2</option>
                                <option value="three">3</option>
                                <option value="four">4</option>
                                <option value="five">5</option>
                                <option value="six">6</option>
                                <option value="seven">7</option>
                                <option value="eight">8</option>
                                <option value="nine">9</option>
                                <option value="ten">10</option>
                            </div>
                            </select>    
                        </td>

                        <td>
                            <div class="col-lg-9">
                            <div class="input-group">
                                <input type="checkbox">
                                Buen estado
                                
                                <input type="checkbox">
                                Mal estado
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->

                        </td>
                        <td>
                            <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text">
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->
                        </td>
                    </tr>
                         
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
    <div class="form-group">
        <span>
            Comentario de la auditoría:
            <textarea class="form-control" rows="3"></textarea>
        </span>
    
    </div>
     
    <div class="form-group">
        <div align="right">
        <span>
            <button class="btn btn-primary">Guardar</button> 
            <button class="btn btn-primary">Finalizar</button>
            <button class="btn btn-primary">Cancelar</button>
        </span>
    </div>
    </div>
   
    
</div>
</div>
<!--Container-->
</body>
</html>