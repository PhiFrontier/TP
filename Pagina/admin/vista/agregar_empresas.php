<?php
include("php/Conexion.php");
$con = new Conexion();

$rut          = $_POST["rut"];
//$foto         = $_POST["foto"];
$nombre       = $_POST["nombre"];
$rsocial      = $_POST["rsocial"];
$giro         = $_POST["giro"];


$sSql = "INSERT INTO empresas(rut,nombre,rsocial,giro) VALUES('$rut','$nombre','$rsocial','$giro')";



$con->query($sSql);

// redirección
header("location:empresas.html");
?>