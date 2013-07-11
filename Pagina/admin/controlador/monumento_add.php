<?php

$path = 'C:/xampp/htdocs/proyecto/fotos/';

$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$titulo = $_POST['titulo'];
$idioma = $_POST['idioma'];
$name = $_FILES['foto_monumento']['name'];
$size = $_FILES['foto_monumento']['size'];
$texto = $_POST['texto'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$poblacion = $_POST['poblacion'];
$referencia = $_POST['referencia'];
$region = $_POST['region'];
$provincia = $_POST['provincia'];
$comuna = $_POST['comuna'];		

$fecha=date("d/n/Y");
$estado = 1;
$usuario = 1;



$id11111 = mysql_insert_id($query); //devuelve id de query




mysql_connect("localhost","root",""); 
mysql_select_db("proyecto");
                      
$query="insert into direcciones (referencia, calle, numero, villa_poblacion_condominio, idComunas, estado, fecha, idUsuarios) values ('$referencia','$calle','$numero','$poblacion','$comuna', '$estado', '$fecha', '$usuario')";
$id_direcciones = mysql_insert_id($query);					//id_direcciones
$result=mysql_query($query);


//monumentos
if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
{
if($size_name_monumento<(1024*1024)) // Image size max 1 MB
{
$actual_image_name = time().".".$ext;
$tmp = $_FILES['foto_monumento']['tmp_name']; 

if(move_uploaded_file($tmp, $path.$actual_image_name))
{

		mysql_connect("localhost","root",""); 
		mysql_select_db("proyecto");
        $query="insert into monumentos (nombre, idDirecciones, foto_monumento, estado, fecha, idUsuarios) values ('$titulo','id_direcciones','$actual_image_name', '$estado', '$fecha', '$usuario')";  //**********
		$id_monumentos = mysql_insert_id($query);
		$result=mysql_query($query); 

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
}
// paginas_has_idioma
mysql_connect("localhost","root",""); 
mysql_select_db("proyecto");
                      
$query="insert into paginas (idIdiomas, idMOnumentos, estado, fecha, idUsuarios) values ('$id_idiomas','$id_monumentos', '$estado', '$fecha', '$usuario')";	
$id_pagina_has_idiomas = mysql_insert_id($query);	
$result=mysql_query($query);	



//paginas
mysql_connect("localhost","root",""); 
mysql_select_db("proyecto");
                      
$query="insert into paginas (idPaginas_has_idiomas, variable, texto, estado, fecha, idUsuarios) values ('$id_pagina_has_idiomas','$titulo','$texto', '$estado', '$fecha', '$usuario')";	
$id_paginas = mysql_insert_id($query);	
$result=mysql_query($query);	

header("location: ../vista/monumentos.php");
?>
