<?php
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$nombre = $_POST['tipo'];
$fecha=date("d/n/Y");
$estado = 1;
$usuario = 1;
		mysql_connect("localhost","root",""); 
		mysql_select_db("proyecto");
                       // echo "insert into tipos (nombre) values ('$nombre')";
        $query="insert into tipos (nombre, estado, fecha, idUsuarios) values ('$nombre', '$estado', '$fecha', '$usuario')";  

        $result=mysql_query($query); 
		
}
header("location:../vista/tiposUser.php");
?>