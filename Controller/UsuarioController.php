<?php 

require_once ('../Model/Conexion.php');


 $action = '';
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        switch ($action) {
            case 'create' : 
                create();
                break;
            case 'login' :
                login();
                break;
            case 'logout' :
                logout();
                break;
            
        }
    }
	

function create(){

conectar();
//capturar valores enviados
$nom = $_REQUEST["txtnom"];
$ape = $_REQUEST["txtape"];
$cor = $_REQUEST["txtcorreo"];
$cla = $_REQUEST["txtclave"];
$rc = $_REQUEST["txtrc"];
$cel = $_REQUEST["txtcel"];
$tipo = $_REQUEST["txtipo"];


$sql = "select * from users where email='$cor'";
$tabla = ejecutar($sql) or die(mysql_error());
if(mysql_num_rows($tabla)>0){
	echo "<script>alert('EL CORREO YA EXITE, VUELVA INTENTAR CON OTRO CORREO')
	document.location=('../../View/RegistroUsuario.php')</script>";
	
	//header("location:../../View/RegistroUsuario.php");
    
}else if ( $cla != $rc){
    echo "<script>alert('REPITA LA MISMA CONTRASEÑA')
	document.location=('../../View/RegistroUsuario.php')</script>";
}else{
	$sql1="insert into users values(null,'$nom','$ape','$cor','$cla','$cel',$tipo)";
    ejecutar($sql1) or die(mysql_error());
    header("location:../../LoginUsuario.php");
}


}


function login(){
session_start();
conectar();
//capturar valores enviados
$cor = $_REQUEST["txtusu"];
$pass = $_REQUEST["txtpass"];

$sql = "select * from users where email='$cor' and password='$pass'";
$tabla = ejecutar($sql) or die (mysql_error());
$row = mysql_fetch_array($tabla);
if($row){
	$_SESSION["cod"]=$row[0];
	$_SESSION["usuario"]=$row[1]." ".$row[2];
	echo "<script>alert('Bienvenido')
	document.location=('../../View/MenuBienvenido.php')</script>";
	

}else{

	echo "<script>alert('EMAIL y/o CONTRASEÑA INCORRECTOS')
	document.location=('../../View/LoginUsuario.php')</script>";
}

}

function logout(){

   session_start();
   session_destroy();
   echo "<script>alert('SALISTE DEL SISTEMA')
	document.location=('../index.html')</script>";

  
}



 ?>