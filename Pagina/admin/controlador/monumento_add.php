<?php

$path = 'C:/xampp/htdocs/proyecto/fotos/';

$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$titulo = $_POST['titulo'];
$idioma = $_POST['idioma']
$name_foto_monumento = $_FILES['foto_monumento']['name'];
$size_name_monumento = $_FILES['foto_monumento']['size'];
$name_foto_qr = $_FILES['foto_qr']['name'];
$size_name_qr = $_FILES['foto_qr']['size'];
$name_foto_mapa = $_FILES['foto_mapa']['name'];
$size_name_mapa = $_FILES['foto_mapa']['size'];
$texto = $_POST['texto'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$poblacion = $_POST['poblacion'];
$referencia = $_POST['referencia'];
$region = $_POST['region'];
$provincia = $_POST['provincia'];
$comuna = $_-POST['comuna'];			//para direcciones solo usa idcomunas


$id11111 = mysql_insert_id($query); //devuelve id de query




mysql_connect("localhost","root",""); 
mysql_select_db("proyecto");
                      
$query="insert into direcciones (referencia, calle, numero, villa_poblacion_condominio, idComunas) values ('$referencia','$calle','numero','poblacion','comuna')";
&id_direcciones = mysql_insert_id($query);					//id_direcciones
$result=mysql_query($query);


//monumentos
if(strlen($name_foto_monumento))
{
list($txt, $ext) = explode(".", $name_foto_monumento);
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
        $query="insert into monumentos (nombre, idDirecciones, ) values ('$titulo','id_direcciones','$actual_image_name')";  //faltan foto qr, foto mapa!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
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
                      
$query="insert into paginas (idIdiomas, idMOnumentos) values ('$id_idiomas','$id_monumentos')";	
$id_pagina_has_idiomas = mysql_insert_id($query);	
$result=mysql_query($query);	



//paginas
mysql_connect("localhost","root",""); 
mysql_select_db("proyecto");
                      
$query="insert into paginas (idPaginas_has_idiomas, variable, texto) values ('$id_pagina_has_idiomas','$titulo','$texto')";	
$id_paginas = mysql_insert_id($query);	
$result=mysql_query($query);	

header("location: ../vista/monumentos.php");
?>
