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
$query_tipo = "SELECT * FROM tipos";
mysql_query("SET NAMES 'utf8'");
$tipo = mysql_query($query_tipo, $proyecto) or die(mysql_error());
$row_tipo = mysql_fetch_assoc($tipo);
$totalRows_tipo = mysql_num_rows($tipo);


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sistema de Administracion</title>
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
                    <li><a href="../index.php">&quot;administrador&quot; cerrar </a></li>
                  </ul>
                </li>
            </ul>
            <div id="hide"> <a href="#">&laquo;Ocultar menú &raquo;</a></div>
            <ul>
              <li></li>
            </ul>
      </div>
          <h1>Mantenedor Tipos de Usuarios</h1> 
    </div>
    <div class="content">
        
        <div class="post"><form action="" method="post">
        <input type="text" name="buscar"><input type="submit" value="Buscar">
        </form>
        </div>
        <div class="post-item">
        <?php if($totalRows_tipo>0){ ?>
        		<table class="grid" border="0">
                	<tr>
                    	<th scope="col" width="40px">Nro
                        </th>
                        <th scope="col" width="100px">Tipo de Usuario
                        </th>
                        <th scope="col">Modificar
                        </th>
                      <td><div class="button" id="show">
            				<a href="tipo_add.php">Agregar Nuevo</a>
       						</div>
                        </td>
                    </tr>
                    <?
							do{
								?>
                    
                    <tr>
                    	<th scope="col" width="40px"><? echo $row_tipo['idTipos']  ?>
                        </th>
                        <th scope="col" width="100px"><? echo $row_tipo['nombre']  ?>
                        </th>
                        <th scope="col"><div class="button" id="show">
            				<a href="tipo_mod.php?id=<? echo $row_tipo['idTipos']  ?>">Editar</a>
       						</div>
                        </th>
                    </tr>
                    <? }while($row_tipo = mysql_fetch_assoc($tipo)); }else{  ?>
                    
                    <h2> No Se Han Encontrado Registros </h2>
                    <div class="button" id="show">
            				<a href="tipo_add.php">Agregar Nuevo</a>
       						</div>
                    <?    }?>
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