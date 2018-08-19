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
  <link rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />
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
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> 
<li><a href="logout.php" > <i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>

 
     <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="CampaniaSocial.php"><i class="fa fa-dashboard"></i> Campañas Sociales</a>
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
                           <div class="table-responsive">        
                  <table class="table table-bordered table-dark" width="500" border="3" >
                <tr><th>N°</th><th>title</th><th>place</th><th>vacant</th><th>fecha</th></th><th>Editar</th></th><th>Eliminar</th></tr>
                <?php
                
                
                $a=$_SESSION["cod"];
                $sql = "select * from campaigns where user_id='$a'";
                $result = ejecutar($sql);
                $numeracion=1;

if(empty($_GET['idcamp'])){

}else {

    echo "<form action='../Controller/modicampania.php?idcamp=".$_GET['idcamp']."' method='post'>
    <div class='form-group row'>";

}



                while ($row = mysql_fetch_array($result)) {

                echo "<tr><td align='center'>".$numeracion."</td>";
//titulo
if(empty($_GET['idcamp'])){
echo "<td align='center'>".$row["1"]."</td>";
}else {
  if ($_GET['idcamp']==$row["0"]) {
    echo "<td align='center'>
<div class='container col-sm-6 col-md-offset-3'>
        <input type='text' class='form-control' id='txtitle' name='txtitle' placeholder='".$row["1"]."'>

    </td>";
  }else {
    echo "<td align='center'>".$row["1"]."</td>";
  }

}
//lugar
if(empty($_GET['idcamp'])){
echo "<td align='center'>".$row["2"]."</td>";
}else {
  if ($_GET['idcamp']==$row["0"]) {
    echo "<td align='center'>
<div class='container col-sm-6 col-md-offset-3'>
        <input type='text' class='form-control' id='txtplace' name='txtplace' placeholder='".$row["2"]."'>

    </td>";
  }else {
    echo "<td align='center'>".$row["2"]."</td>";
  }

}
//vacantes
if(empty($_GET['idcamp'])){
echo "<td align='center'>".$row["3"]."</td>";
}else {
  if ($_GET['idcamp']==$row["0"]) {
    echo "<td align='center'>
<div class='container col-sm-6 col-md-offset-3'>
        <input type='text' class='form-control' id='txtvacant' name='txtvacant' placeholder='".$row["3"]."'>

    </td>";
  }else {
    echo "<td align='center'>".$row["3"]."</td>";
  }

}
//Fecha
echo "<td align='center'>".$row["4"]."</td>";
//Modificar
if(empty($_GET['idcamp'])){
echo "<td align='center'>
<a class='btn btn-success' href='CampaniaSocial.php?idcamp=".$row["0"]."'>Modificar</a></td>";
}else {
  if ($_GET['idcamp']==$row["0"]) {
    echo "<div class='form-group row'><td align='center'><input class='btn btn-warning' id='Guardar' type='submit' value='Guardar' name='btnenviar'><a class='btn btn-info col-md-offset-1' href='CampaniaSocial.php'>Cancelar</a></td></div>";
  }else {
    echo "<td align='center'><a class='btn btn-success' href='CampaniaSocial.php?idcamp=".$row["0"]."'>Modificar</a></td>";
  }

}

//Eliminar
echo "<td align='center'><a class='btn btn-danger' href='operaciones/eliminarcampania.php?idcamp=".$row["0"]."'>Eliminar</a></td></tr>";




                
                $numeracion++;
            }

            if(empty($_GET['idprodmod'])){

}else {

echo "</div></form>";
}
                ?>


                
                
                </table>                  
               </div>
              
            </div><!--/.row-->
          
          
     
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
 

  <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>

</body>

</html>

