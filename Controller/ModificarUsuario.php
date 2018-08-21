<?php

require_once ('../Model/Conexion.php');

conectar();
session_start();

$cod = $_SESSION["cod"];
$nom = $_REQUEST["txtnom"];
$ape = $_REQUEST["txtape"];
$cor = $_REQUEST["txtemail"];

$cel = $_REQUEST["txtcel"];

$sql="update users set firstname='$nom',lastname='$ape',email='$cor',cellphone='$cel' where user_id='$cod'";
mysql_query($sql) or die(mysql_error());
header("location:../View/MyProfile.php");
?>