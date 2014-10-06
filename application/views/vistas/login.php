<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Control de Activos</title>
	   
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-theme.css" type="text/css" rel="stylesheet" >
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" >
  <div class="page-header">
     <h1>Tecnológico de Costa Rica
        <small>Control de Activos</small>
     </h1>
  </div>
  
</head>
<body>
  <div class="row">
    <div class="container">
      <center>
        <img src="<?php echo base_url();?>resources/images/tec.jpg">
      </center>
  
      <form class="form-signin col-md-12" action="<?php echo base_url();?>index.php/ctrLogin/principal/" method="POST">
        <div class="form-group">
          <input type="text" class="form-control input-lg" placeholder="Usuario">
        </div>
        <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Contraseña">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar sesión</button>
            <span class="pull-right"><a href="#">Registrarse</a></span>
        </div>
    </form>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!--  <script src="../../dist/js/bootstrap.min.js"></script>-->
    </div> <!-- /container -->
  </div>
  
</body>
</html>