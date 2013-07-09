<?php
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$nombre = $_POST['tipo'];
		mysql_connect("localhost","root",""); 
		mysql_select_db("proyecto");
                       // echo "insert into tipos (nombre) values ('$nombre')";
        $query="insert into tipos (nombre) values ('$nombre')";  

        $result=mysql_query($query); 
		
}
header("location:../vista/tiposUser.php");
?>