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
    <link href="../css/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../css/cssCharts.css"> 


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
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> Configuracion Usuario<span class="fa arrow"></span></a>
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
                        <h1 class="page-header">
                            Mi perfil
                        </h1>
            
                  
      </div>

            <div id="page-inner">

                <?php
        conectar();
            $cod = $_SESSION["cod"];
            
            $sql = "select * from users where user_id='$cod'";
            $tabla = ejecutar($sql)or die(mysql_error());
            $r=  mysql_fetch_array($tabla)
        ?>

<form class="form-horizontal" action="../Controller/ModificarUsuario.php" method="post">


                <div class="formRow">
                <div class="formRowTitle">
                                Nombre 
                </div>                            
                <div class="col-md-5" >
                <input value="<?=$r[1]?>" id="Nombre" name="txtnom" type="text" placeholder="Nombre" class="form-control input-md " required="">
                </div>
                </div>

            </br> </br> </br>

                <div class="formRow">
                <div class="formRowTitle">
                                Apellido 
                </div>                            
                <div class="col-md-5" >
                <input value="<?=$r[2]?>" id="Apellido" name="txtape" type="text" placeholder="Apellido" class="form-control input-md " required="">
                </div>
                </div>

            </br> </br> </br>

                <div class="formRow">
                <div class="formRowTitle">
                                email 
                </div>                            
                <div class="col-md-5" >
                <input value="<?=$r[3]?>" id="Email" name="txtemail" type="text" placeholder="Email" class="form-control input-md " required="">
                </div>
                </div>

            </br> </br> </br>

                <div class="formRow">
                <div class="formRowTitle">
                                Celular
                </div>                            
                <div class="col-md-5" >
                <input value="<?=$r[5]?>" id="Celular" name="txtcel" type="text" placeholder="Celular" class="form-control input-md " required="">
                </div>
                </div>

            </br> </br> </br>


        <div class="form-group">           
          <div class="col-md-2">
                                     
            
                <a class='btn btn-info col-md-offset-1' href='ListaCampania.php'>Cancelar</a>
            

        </div>

            <div class="col-md-2">
          <input type="hidden" value="modifica" name="action"/>                            
            <button class="btn btn-success" block="true" type="submit" value="modifica"> Guardar Cambios </button>
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
    </br></br> </br> </br>
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

