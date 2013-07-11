<?php
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$nombre = $_POST['usuario'];
$pass = $_POST['pass1'];
$fecha=date("d/n/Y");
$estado = 1;
$usuario = 1;

		mysql_connect("localhost","root",""); 
		mysql_select_db("proyecto");
                       // echo "insert into usuarios (nom_usuario, password) values ('$nombre','$pass')";
        $query="insert into usuarios (nom_usuario, password, estado, fecha, idUsuarios) values ('$nombre','$pass', '$estado', '$fecha', '$usuario')";  

        $result=mysql_query($query); 
		
}
header("location:../vista/usuarios.php");
?>