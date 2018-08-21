<?php
require_once ('../Model/Conexion.php');
session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Target Material Design Bootstrap Admin Template</title> 
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
<!--<script type="text/javascript">

function logout() {
    var r = confirm("Do you really want to log out?");
    if (r) {    
       window.location.href = '../index.html'

    }
} 

</script> -->

    <div id="wrapper">

        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">           

            <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">track_changes</i> <strong>SCS</strong></a>   

                <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>  
        </div>

            <ul class="nav navbar-top-links navbar-right">        
          <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b><?php
                   
      echo $_SESSION["usuario"]; ?>
          </b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>

    <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<!--<li><a href="MyProfile.php"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> -->
<li><a href="logout.php" > <i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>

 
     <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="ListaCampania.php"><i class="fa fa-dashboard"></i> Gestionar campañas</a>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> Configuracion<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="MyProfile.php">Mi perfil</a>
                            </li>
                            <li>
                                <a href="#">Cambiar contraseña</a>
                            </li>                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
    <div id="page-wrapper">
      <div class="header"> 
      </br>
                        <h1 class="page-header">
                            Nueva Campaña
                        </h1>           
     </div>

            <div class="page-inner">
            


      
       
     

        <form class="form-horizontal" action="../Controller/registrarcampania.php" method="post" enctype="multipart/form-data">
        
                    
      
          <div class="form-bottom">
        <!-- Text input-->
        <div class="form-group" >
          <label class="col-md-4 control-label" for="title" style="color: #000000" ><h3>Titulo : </h3></label>
          <div class="col-md-5" >
          <input id="title" name="txtitulo" type="text" placeholder="Titulo" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="lugar" style="color: #000000" ><h3>Lugar : </h3></label>
          <div class="col-md-5">
          <input id="lugar" name="txtlugar" type="text" placeholder="Lugar" class="form-control input-md" required="">
          </div>
        </div>

          
           <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="vacante" style="color: #000000" ><h3>Vacantes : </h3></label>
          <div class="col-md-4">
          <input id="vacante" name="txtvacante" type="number" placeholder="Vacantes" class="form-control input-md"  required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="imagen" style="color: #000000" ><h3>Imagen : </h3></label>
          <div class="col-md-4">
          </br>
        <input type="file" name="imagen" id="imagen"/>
        </div>
        </div>
          
               <!-- Button -->
        <div class="form-group">
           <div class="col-md-4">
           </div>
          <div class="col-md-4">
          <input type="hidden" value="create" name="action"/>                            
            <button class="btn btn-primary" block="true" type="submit" value="create"> Guardar </button>
          </div>
        </div>

      </div>
    </form>                
                        
        
            
      
         <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">track_changes</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
    
        <footer><p>All right reserved. Template by: <a href="https://webthemez.com/admin-template/">WebThemez.com</a></p>
        
            </footer>
              </div> 
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
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

