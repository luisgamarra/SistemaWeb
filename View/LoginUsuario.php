<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Target Material Design Bootstrap Admin Template</title> 

    <!-- CSS -->
        
  
    <link rel="stylesheet" href="../css/font-awesome.min.css">
   
    <link rel="stylesheet" href="../css/style.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="../js/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../js/cssCharts.css"> 
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
            <li><a href="login.php">Iniciar Sesión</a></li>
            <li class="active"><a href="RegistroUsuario.php">Regístrate</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


<div class="container">
    <form class="form-horizontal" action="../Controller/UsuarioController.php/login()" method="post">
        <div class="container">
          <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Login to our site</h3>
                                <p>Enter your username and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-key"></i>
                            </div>
                            </div>
                            <div class="form-bottom">
                         
                            <div class="form-group">
                              
                                <input type="email" name="txtusu" placeholder="Correo Electrónico" class="form-control input-md" id="email" required="">
                              </div>
                              <div class="form-group">
                                
                                <input type="password" name="txtpass" placeholder="Contraseña" class="form-control input-md" id="password" required="">
                              </div>
                              <input type="hidden" value="login" name="action"/>
                              <button type="submit" class="btn btn-success" value="login">Sign in!</button>
                         
                        </div>
                        </div>
                    </div>
                   
        </div>
    </form>
</div>

 <script src="../js/jquery-1.10.2.js"></script>
  
  <!-- Bootstrap Js -->
    <script src="../js/bootstrap.min.js"></script>
  
  <script src="../js/materialize.min.js"></script>
  
    <!-- Metis Menu Js -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="../js/raphael-2.1.0.min.js"></script>
    <script src="../js/morris.js"></script>
  
  
  <script src="../js/easypiechart.js"></script>
  <script src="../js/easypiechart-data.js"></script>
  
   <script src="../js/jquery.chart.js"></script>
  
    <!-- Custom Js -->
    <script src="../js/custom-scripts.js"></script> 
</body>
</html>
