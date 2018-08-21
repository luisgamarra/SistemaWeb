<?php
require_once ('../Model/Conexion.php');
session_start();
//capturar valores enviados
$titulo = $_REQUEST["txtitulo"];
$lugar = $_REQUEST["txtlugar"];
$vacante = $_REQUEST["txtvacante"];
//$fecha = getdate();




$id = $_SESSION["cod"];

$foto = $_FILES['imagen']['name'];


conectar();



$sql="insert into campaigns values(null,'$titulo', '$lugar', '$vacante', CURDATE(), '$foto', '$id')";

	
	if(ejecutar($sql)){
		$imagen = $_FILES['imagen']['tmp_name'];
$thumb_db = $_FILES['imagen']['name'];

$ruta = '../Imagenes/' . $thumb_db;

move_uploaded_file($imagen, $ruta);
echo "<script>alert('Registro Grabado')</script>
";
	}

?>