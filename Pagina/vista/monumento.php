<?php


require_once('../Connections/proyecto.php');
$idmon=$_GET["mon"];

mysql_select_db($database_proyecto, $proyecto);
$query_region = "SELECT * FROM monumentos";
mysql_query("SET NAMES 'utf8'");
$region = mysql_query($query_region, $proyecto) or die(mysql_error());
$row_region = mysql_fetch_assoc($region);
$totalRows_region = mysql_num_rows($region);


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Monumento a los caidos de Iquique</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
	<script src="../jquery/jquery-latest.js" type="text/javascript"></script></head>

<body>
<div id="wrap">
    <div class="header">
        <div class="logo">
            <a href="../index.php"><img src="../images/logo.png" alt="Playlist Mobi" /></a>
        </div>
        <div class="button" id="show">
            <a href="#">Menu</a>
        </div>
        <div class="clear-float"></div>
        <div class="nav">
            <ul>
                <li><a href="monumento.php">Inicio</a></li>
                <li><a href="signup.html">Registrarse</a></li>
                <li id="hide"><a href="#">&laquo;Ocultar menú &raquo;</a></li>
            </ul>
      </div>
    </div>
    <div class="content">
        <div class="post">
            <h2> Aqui va el titulo del monumento </h2>
            <div class="post-item">
                <div class="post-image">
                    <input type="image" name="imageField" src="../images/Monumento_a_los_Héroes_de_Iquique.jpg">
                  
                </div>
                <p>&nbsp;</p>
                <strong>Historia</strong>
              <blockquote>&nbsp;</blockquote>
                  <p>Historia del Monumento<p>
                
          </div>
            <div class="grid">
              <h2>Auspicio</h2>
              <ul>
                <li><a href="#"><img src="../images/ripley.jpg" alt="Img" width="338" height="149">
                </a></li>
                
              </ul>
              <div class="clear-float"></div>
            </div>
            <div class="list">
              	<h2>Monumentos mas Cercanos</h2>
              		<ul>
                		<li>
                  			<div class="list-title"><a href="#"><strong>Iglesia de la Matriz </strong></a></div>
                  			<div class="list-art"><a href="#"><img src="../images/matrizb.jpg" alt="Img" width="400" height="364"></a></div>
                  			<div class="list-text">
                      			<label>
                      				<p>Resumen monumento</p>
                      			</label>
                  			</div>
                  			<div class="clear-float"></div>
                		</li>
                		<li>
                        	<div class="clear-float"></div>
                		</li>
              		</ul>
              		<div class="clear-float"></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&nbsp;</p>
    </div>
    <div class="by"></div>
</div>
<script type="text/javascript">
	$('.nav').hide();
	$('#show').click(function (){
		$('.nav').show();
	});
	$('#hide').click(function (){
		$('.nav').hide();
	});
</script>
</body>
</html>