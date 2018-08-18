<?php
//funcion para conectarnos a una bd
function conectar(){
    $con = mysql_connect("localhost","root","");
    mysql_select_db("bdcampanias",$con);
    return $con;
}
//funcion para ejecutar una consutla
function ejecutar($sql){
    $res = mysql_query($sql,conectar());
    return $res;
}
?>
