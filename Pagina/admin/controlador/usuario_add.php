<?php
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$nombre = $_POST['usuario'];
$pass = $_POST['pass1'];
		mysql_connect("localhost","root",""); 
		mysql_select_db("proyecto");
                       // echo "insert into usuarios (nom_usuario, password) values ('$nombre','$pass')";
        $query="insert into usuarios (nom_usuario, password) values ('$nombre','$pass')";  

        $result=mysql_query($query); 
		
}
header("location:../vista/usuarios.php");
?>