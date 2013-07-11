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
$query_region = "SELECT * FROM region";
mysql_query("SET NAMES 'utf8'");
$region = mysql_query($query_region, $proyecto) or die(mysql_error());
$row_region = mysql_fetch_assoc($region);
$totalRows_region = mysql_num_rows($region);

mysql_select_db($database_proyecto, $proyecto);
$query_provincia = "SELECT * FROM provincia";mysql_query("SET NAMES 'utf8'");
$provincia = mysql_query($query_provincia, $proyecto) or die(mysql_error());
$row_provincia = mysql_fetch_assoc($provincia);
$totalRows_provincia = mysql_num_rows($provincia);

mysql_select_db($database_proyecto, $proyecto);
$query_comuna = "SELECT * FROM comuna";
mysql_query("SET NAMES 'utf8'");
$comuna = mysql_query($query_comuna, $proyecto) or die(mysql_error());
$row_comuna = mysql_fetch_assoc($comuna);
$totalRows_comuna = mysql_num_rows($comuna);

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
            <a href="../index.php"><img src="../images/logo.png" alt="Playlist Mobi" /></a>
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
                <li>
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
        <div class="post">
            <h1>Agregar Monumento</h1>
            <div class="post-item">
           	  <form action="../controlador/monumento_add.php" enctype="multipart/form-data" method="post">
				<div class="post-item">
						Titulo: <input type="text" name="titulo" id="titulo"  width="200px"/>

				</div>

				<div class="post-item">
							Seleccione Idioma:
							<br />
							<br />
							<table>
								<tr>
									<td>Español</td> 
									<td><input type="radio" name="idioma" id="2" checked="checked"/></td>
								
									<td>Ingles</td> <td><input type="radio" name="idioma" id="1" /></td>
									<td>Chino</td> <td><input type="radio" name="idioma" id="3" /></td>
								</tr>
							</table>
				</div>

				<div class="post-item">
<p>Foto Monumento</p>
						<br />
						<p>Archivo: 
						  <input type="file" name="foto_monumento" id="foto_monumento"></div>
				
                
                <div class="post-item">
							Texto:<br />
 							<textarea cols="90" rows="6" name="texto"  id="texto" draggable="false" >
							</textarea>
				</div>

				<div class="post-item">
						Direccion:
						<br />
						<table>
							<tr>
								<td>Calle</td>
								<td><input type="text" name="calle" id="calle"/></td>
								<td width="100px"></td>
								<td>Numero</td>
								<td><input type="text" name="numero" id="numero"/></td>
							</tr>

							<tr>
								<td>Poblacion</td>
								<td><input type="text" name="poblacion" id="poblacion"/></td>
                                <td width="100px"></td>
                                <td>Referencia</td>
                                <td><input type="text" name="referencia" id="referencia"/></td>
                            </tr>
                            
                            <tr>
                                <td>Region</td>
                              <td><select id="region" name="region">
                                <option value="0">Seleccione</option>
                                <?php
do {  
?>
                                <option value="<?php echo $row_region['REGION_ID']?>"><?php echo $row_region['REGION_NOMBRE']?></option>
                                <?php
} while ($row_region = mysql_fetch_assoc($region));
  $rows = mysql_num_rows($region);
  if($rows > 0) {
      mysql_data_seek($region, 0);
	  $row_region = mysql_fetch_assoc($region);
  }
?>
                              </select></td>
                                <td width="100px"></td>
                                <td>Provincia</td>
                                <td><select id="provincia" name="provincia">
                                  <option value="0">Seleccione</option>
                                  <?php
do {  
?>
                                  <option value="<?php echo $row_provincia['PROVINCIA_ID']?>"><?php echo $row_provincia['PROVINCIA_NOMBRE']?></option>
                                  <?php
} while ($row_provincia = mysql_fetch_assoc($provincia));
  $rows = mysql_num_rows($provincia);
  if($rows > 0) {
      mysql_data_seek($provincia, 0);
	  $row_provincia = mysql_fetch_assoc($provincia);
  }
?>
                              </select></td>
                                <td width="100px"></td>
                                <td>Comuna</td>
                              <td><select id="comuna" name="comuna">
                                <option value="0">Seleccione</option>
                                <?php
do {  
?>
                                <option value="<?php echo $row_comuna['COMUNA_ID']?>"><?php echo $row_comuna['COMUNA_NOMBRE']?></option>
                                <?php
} while ($row_comuna = mysql_fetch_assoc($comuna));
  $rows = mysql_num_rows($comuna);
  if($rows > 0) {
      mysql_data_seek($comuna, 0);
	  $row_comuna = mysql_fetch_assoc($comuna);
  }
?>
                              </select></td>
							</tr>

						</table>
                        <br />
                        <br />
                        <input type="submit" value="Guardar" />
                        <input type="reset" value="Borrar" />


                </div>

              </form>
            	
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
<?php
mysql_free_result($region);

mysql_free_result($provincia);

mysql_free_result($comuna);
?>
