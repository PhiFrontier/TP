<?php

$path = 'C:/xampp/htdocs/proyecto/fotos/';

$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{


$rut          = $_POST["rut"];
$nombre       = $_POST["nombre"];
$razon      = $_POST["razon"];
$giro         = $_POST["giro"];

$name = $_FILES['foto_logo']['name'];
$size = $_FILES['foto_logo']['size'];

$Comuna         = $_POST["Comuna"];
$Region         = $_POST["Region"];
$provincia         = $_POST["provincia"];
$villa         = $_POST["villa"];

$calle         = $_POST["calle"];
$numero         = $_POST["numero"];
$sector         = $_POST["sector"];
$piso        = $_POST["piso"];

$fecha=date("d/n/Y");
$estado = 1;
$usuario = 1;


if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
{
if($size<(1024*1024)) // Image size max 1 MB
{
$actual_image_name = time().".".$ext;
$tmp = $_FILES['foto']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{

		mysql_connect("localhost","root",""); 
		mysql_select_db("proyecto");
                     
        $query="insert into empresas (rut, foto_logo, nombre, razon_social, giro, estado, fecha, idUsuarios) values ('$rut','$actual_image_name', '$nombre', '$razon', '$giro', '$estado', '$fecha', '$usuario')";  
		$id_empresas = mysql_insert_id($query); //guarda id de empresas

        $result=mysql_query($query); 
	//	echo "<img src='../../fotos/".$actual_image_name."'>";
}
else
echo "failed";
}
else
echo "Image file size max 1 MB"; 
}
else
echo "Invalid file format.."; 
}
else
echo "Please select image..!";
exit;
}


//direccion
mysql_connect("localhost","root",""); 
mysql_select_db("proyecto");
                     
$query="insert into direcciones (calle, numero, villa_poblacion_condominio, piso, sector, idComunas, idEmpresas, estado, fecha, idUsuarios) values ('$calle','$numero', '$villa', '$piso', '$sector', '$Comuna', '$id_empresas', '$estado', '$fecha', '$usuario')";  


$id_direcciones = mysql_insert_id($query); 

$result=mysql_query($query); 


// redirección
header("location:empresas.html");
?>