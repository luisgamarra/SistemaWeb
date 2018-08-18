<?php

require_once ('../Model/Conexion.php');


 $action = '';
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        switch ($action) {
            case 'create' :
                create();
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
    header("location:../../Login.php");
}


}





 ?>
