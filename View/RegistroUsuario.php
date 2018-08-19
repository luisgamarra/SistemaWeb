<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Target Material Design Bootstrap Admin Template</title> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../js/Lightweight-Chart/cssCharts.css"> 
</head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CAMPAÑAS SOCIALES</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          

          <ul class="nav navbar-nav navbar-right">
            <li><a href="LoginUsuario.php">Iniciar Sesión</a></li>
            <li class="active"><a href="RegistroUsuario.php">Regístrate</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


<div class="container">
    <form class="form-horizontal" action="../Controller/UsuarioController.php/create()" method="post">
        <div class="container">
          <fieldset>
           <!-- Form Name -->
          <legend  style="color: #F0FFFF">Regístrate</legend>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Nombre" style="color: #F0FFFF">Nombre</label>
          <div class="col-md-5">
          <input id="Nombre" name="txtnom" type="text" placeholder="Nombre" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Apellido" style="color: #F0FFFF">Apellidos</label>
          <div class="col-md-5">
          <input id="Apellido" name="txtape" type="text" placeholder="Apellido" class="form-control input-md" required="">
          </div>
        </div>

          <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Email" style="color: #F0FFFF">Correo Electrónico</label>
          <div class="col-md-4">
          <input id="Email" name="txtcorreo" type="email" placeholder="Correo Electrónico" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Contrasena" style="color: #F0FFFF">Contraseña</label>
          <div class="col-md-5">
          <input id="Contrasena" name="txtclave" type="password" placeholder="Contraseña" class="form-control input-md" data-minlength="6" required="">
          <span class="help-block">Mínimo de seis (6) digitos</span>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="RC" style="color: #F0FFFF">Repite Contraseña</label>
          <div class="col-md-5">
          <input id="RC" name="txtrc" type="password" placeholder="Repite contraseña" class="form-control input-md" 
          data-match="#Contraseña" data-match-error="Atenção! As senhas não estão iguais." required="">
          </div>
        </div>

           <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Celular" style="color: #F0FFFF">Celular</label>
          <div class="col-md-4">
          <input id="Celular" name="txtcel" type="number" placeholder="Celular" class="form-control input-md" maxlength="9" required="">
          </div>
        </div>

           <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" for="Tipo" style="color: #F0FFFF">Tipo de usuario</label>
          <div class="col-md-4">          
        <select class="form-control" id="Tipo" name="txtipo">
         <option value="1">Organizador</option>
         <option value="2">Voluntario</option>         
        </select>
          </div>
        </div>
      
               <!-- Button -->
        <div class="form-group">
           <div class="col-md-4">
           </div>
          <div class="col-md-4">
          <input type="hidden" value="create" name="action"/>                            
            <button class="btn btn-primary" block="true" type="submit" value="create"> Aceptar </button>
          </div>
        </div>
    </form>
</div>

 <script src="../js/jquery-1.10.2.js"></script>
  
  <!-- Bootstrap Js -->
    <script src="../js/bootstrap.min.js"></script>
  
  <script src="../materialize/js/materialize.min.js"></script>
  
    <!-- Metis Menu Js -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="../js/morris/raphael-2.1.0.min.js"></script>
    <script src="../js/morris/morris.js"></script>
  
  
  <script src="../js/easypiechart.js"></script>
  <script src="../js/easypiechart-data.js"></script>
  
   <script src="../js/Lightweight-Chart/jquery.chart.js"></script>
  
    <!-- Custom Js -->
    <script src="../js/custom-scripts.js"></script> 
</body>
</html>
