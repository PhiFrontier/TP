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
$query_Region = "SELECT * FROM region";
mysql_query("SET NAMES 'utf8'");
$Region = mysql_query($query_Region, $proyecto) or die(mysql_error());
$row_Region = mysql_fetch_assoc($Region);
$totalRows_Region = mysql_num_rows($Region);

mysql_select_db($database_proyecto, $proyecto);
$query_Provincia = "SELECT * FROM provincia";
mysql_query("SET NAMES 'utf8'");
$Provincia = mysql_query($query_Provincia, $proyecto) or die(mysql_error());
$row_Provincia = mysql_fetch_assoc($Provincia);
$totalRows_Provincia = mysql_num_rows($Provincia);

mysql_select_db($database_proyecto, $proyecto);
$query_Comuna = "SELECT * FROM comuna";
mysql_query("SET NAMES 'utf8'");
$Comuna = mysql_query($query_Comuna, $proyecto) or die(mysql_error());
$row_Comuna = mysql_fetch_assoc($Comuna);
$totalRows_Comuna = mysql_num_rows($Comuna);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sistema de Administracion</title>
    <link href="../../css/style.css" type="text/css" rel="stylesheet">
	<script src="../../jquery/jquery-latest.js" type="text/javascript">
    </script>
</head>

<body>
<div id="wrap">
    <div class="header">
        <div class="logo">
            <a href="in.php"><img src="../images/logo.png" alt="Playlist Mobi" /></a>
        </div>
        <div class="button" id="show">
            <a href="#">Menu</a>
        </div>
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
           </ul>
                  <ul>
                    <li><a href="../index.php">&quot;administrador&quot; cerrar </a></li>
                  </ul>
                </li>
                <li id="hide"><a href="#">&laquo;Ocultar menú &raquo;</a></li>
            </ul>
            <ul>
              <li></li>
            </ul>
            <ul>
              <li></li>
            </ul>
      </div>
    </div>
    <div class="content">


<table>
<tr>
<td>
Region &nbsp; <input type="submit" value="agregar" /> 

</td>
</tr>

<tr>

	<td><ul>
    	<? if($totalRows_Region>0){ 
		do{?>
        <li>
            <? echo $row_Region['REGION_NOMBRE'] ?>
            <div class="button" id="show">
            				<a href="tipo_mod.php?id=<? echo $row_Region['REGION_ID'] ?>">Editar</a>
       						</div>
    	</li>
                <? } while ($row_Region = mysql_fetch_assoc($Region));
  $rows = mysql_num_rows($Region);
  if($rows > 0) {
      mysql_data_seek($Region, 0);
	  $row_Region = mysql_fetch_assoc($Region);
  } }else{
			echo "Sin Registros";
		}?></ul>
    </td>

	</tr>
    </table>
    
    
    
   <table> 
    
    
    
    <tr><td>
Provincia &nbsp; <input type="submit" value="agregar" /> 

</td></tr>
    <td>
    
    	<? if($totalRows_Provincia>0){ 
		do{?>
    	<tr>
            <td><? echo $row_Provincia['PROVINCIA_NOMBRE'] ?></td>
            <td><div class="button" id="show">
            				<a href="tipo_mod.php?id=<? echo $row_Region['PROVINCIA_ID'] ?>">Editar</a>
       						</div></td>
    	</tr>
        <? } while ($row_Provincia = mysql_fetch_assoc($Provincia));
  $rows = mysql_num_rows($Provincia);
  if($rows > 0) {
      mysql_data_seek($Provincia, 0);
	  $row_Provincia = mysql_fetch_assoc($Provincia);
  } }else{
			echo "Sin Registros";
		}?>
    </table>
    </td>
<table>
<tr>
Comuna &nbsp; <input type="submit" value="agregar" /> 
</tr>
<tr>
	<td>
    
    	<? if($totalRows_Comuna>0){ 
		do{?>
    	<tr>
            <td><? echo $row_Comuna['COMUNA_NOMBRE'] ?></td>
            <td><div class="button" id="show">
            				<a href="tipo_mod.php?id=<? echo $row_Comuna['COMUNA_ID'] ?>">Editar</a>
       						</div></td>
    	</tr>
        <? } while ($row_Comuna = mysql_fetch_assoc($Comuna));
  $rows = mysql_num_rows($Comuna);
  if($rows > 0) {
      mysql_data_seek($Comuna, 0);
	  $row_Comuna = mysql_fetch_assoc($Comuna);
  } }else{
			echo "Sin Registros";
		}?>
    </table>
    </td>


</tr>              
                   
</table>
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