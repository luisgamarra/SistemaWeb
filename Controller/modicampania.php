<?php

require_once ('../Model/Conexion.php');

$idcamp = $_REQUEST["idcamp"];
$title = $_REQUEST["txtitle"];
$place = $_REQUEST["txtplace"];
$vacante = $_REQUEST["txtvacant"];

conectar();
$sql="update campaigns set title='$title',place='$place',vacant='$vacante' where campaign_id='$idcamp'";
ejecutar($sql) or die(mysql_error());
mysql_free_result($sql);


echo "<script>alert('Modificado')
	document.location=('../View/CampaniaSocial.php')</script>";






 ?>
