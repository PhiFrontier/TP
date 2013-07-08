<?php require_once('../../Connections/proyecto.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_proyecto, $proyecto);
$query_idioma = "SELECT * FROM idiomas";
mysql_query("SET NAMES 'utf8'");
$idioma = mysql_query($query_idioma, $proyecto) or die(mysql_error());
$row_idioma = mysql_fetch_assoc($idioma);
$totalRows_idioma = mysql_num_rows($idioma);


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ingresar</title>
    <link href="../../css/style.css" type="text/css" rel="stylesheet">
	<script src="../../jquery/jquery-latest.js" type="text/javascript"></script>
</head>

<body>
<div id="wrap">
    <div class="header">
        <div class="logo">
            <a href="../index.php"><img src="../images/logo.png" alt="Playlist Mobi" /></a>        </div>
        <div class="button" id="show">
            <a href="#">Menu</a>        </div>
        <div class="clear-float"></div>
        <div class="nav">
            <ul>
                 <li><a href="in.php">Inicio</a></li>
                <li><a href="monumentos.php">Adminitrador Monumento </a></li>
                <li><a href="empresas.php">Adminitrador Empresas</a></li>
                <li><a href="idiomas.php">Adminitrador Idiomas</a></li>
                <li><a href="tiposUser.php">Adminitrador Tipos de Usuarios </a></li>
                <li><a href="usuarios.php">Adminitrador usuarios </a></li>
                <li><a href="pais.php">Adminitrador región-comuna-provicia</a></li>
                <li>
                  <ul>
                    <li><a href="../signup.html">&quot;administrador&quot; cerrar </a></li>
                  </ul>
                </li>
            </ul>
            <div id="hide"> <a href="#">&laquo;Ocultar menú &raquo;</a></div>
            <ul>
              <li></li>
            </ul>
      </div>
          <h1>Mantenedor Empresas</h1> 
    </div>
    <div class="content">
        
        <div class="post"><form action="" method="post">
        <input type="text" name="buscar"><input type="submit" value="Buscar">
        </form>
        </div>
        <div class="post-item">
        		<table class="grid" border="0">
                	<tr>
                    	<th scope="col" width="40px">Nro
                        </th>
                        <th scope="col" width="100px">Nombre
                        </th>
                        <th scope="col" width="80px">Bandera
                        </th>
                        <th scope="col">Modificar
                        </th>
                      <td><div class="button" id="show">
            				<a href="idioma_add.php">Agregar Nuevo</a>
       						</div>
                        </td>
                    </tr>
                    <?php if($totalRows_idioma>0){
							do{
								?>
                    
                    <tr>
                    	<th scope="col" width="40px"><? echo $row_idioma['idIdiomas']  ?>
                        </th>
                        <th scope="col" width="100px"><? echo $row_idioma['nombre']  ?>
                        </th>
                        <th scope="col" width="80px"><img src="../../fotos/<? echo $row_idioma['fotobandera']  ?>" width="10" height="5"> 
                        </th>
                        <th scope="col"><div class="button" id="show">
            				<a href="idioma_mod.php?id=<? echo $row_idioma['idIdiomas']  ?>">Editar</a>
       						</div>
                        </th>
                    </tr>
                    <? }while($row_idioma = mysql_fetch_assoc($idioma)); }  ?>

                </table>
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