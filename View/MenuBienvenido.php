<?php

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
<!--<li><li><a href="MyProfile.php"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                            Campañas Sociales
                        </h1>
            
                  
      </div>

            <div id="page-inner">

      
        <!-- /. ROW  --> 
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-7"> 
          
            </div><!--/.row-->
            <div class="col-xs-12 col-sm-12 col-md-5"> 
                 <div class="row">
                  <div class="col-xs-12"> 
                  
                </div>
               </div>
            </div><!--/.row-->
          </div>
          
     
        <div class="row">
        <div class="col-md-5"> 
            
          </div>    
          
            <div class="col-md-7"> 
          
          </div>
          
        </div> 
       
        
        
                <div class="row">
                    <div class="col-xs-12">
            
                    </div> 

                </div>
        <div class="row">
        <div class="col-md-12">
        
          </div>    
        </div>  
                <!-- /. ROW  -->

     
        
        
        
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">          
                    </div>

                    <div class="col-md-8 col-sm-12 col-xs-12">                              
                    </div>
                </div>
                <!-- /. ROW  -->

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

