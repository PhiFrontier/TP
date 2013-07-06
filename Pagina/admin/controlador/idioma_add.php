<?php

$path = 'C:/xampp/htdocs/proyecto/fotos/';

$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['foto']['name'];
$size = $_FILES['foto']['size'];
$nombre = $_POST['idioma'];
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
                        // echo "insert into idiomas (nombre, fotobandera) values ('$nombre','$actual_image_name')";
        $query="insert into idiomas (nombre, fotobandera) values ('$nombre','$actual_image_name')";  

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
?>




