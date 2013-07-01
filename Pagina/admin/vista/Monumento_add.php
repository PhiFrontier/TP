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
                <li><a href="#">Adminitrador Empresas </a></li>
                <li><a href="#">Adminitrador Idiomas y tipos de usuarios </a></li>
                <li><a href="#">Adminitrador textos</a></li>
                <li><a href="#">Adminitrador usuarios </a></li>
                <li><a href="#">Adminitrador región-comuna-provicia</a></li>
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
        <div class="post">
            <h1>Edicion de Monumentos</h1>
            <div class="post-item">
           	  <form action="#" method="post" enctype="multipart/form-data">
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
									<td><input type="radio" name="idioma" id="espanol" checked="checked"/></td>
								
									<td>Ingles</td> <td><input type="radio" name="idioma" id="ingles" /></td>
									<td>Chino</td> <td><input type="radio" name="idioma" id="chino" /></td>
								</tr>
							</table>
					</div>

				<div class="post-item">
<p>Foto Monumento</p>
						<table border="1" height="100px" width="100px;" class="post-image">
							<tr>
								<td>Vista Previa</td>
							</tr>
						</table>
						<br />
						<p>Archivo: <INPUT type="file" name="Fmon" size="20"></p>
					</div>
                
                <div class="post-item">
<p>Foto QR</p>
						<table border="1" height="100px" width="100px;" class="post-image">
							<tr>
								<td>Vista Previa</td>
							</tr>
						</table>
						<br />
						<p>Archivo: <INPUT type="file" name="Fqr" size="20"></p>
					</div>
                    
                 <div class="post-item">
<p>Foto Mapa</p>
						<table border="1" height="100px" width="100px;" class="post-image">
							<tr>
								<td>Vista Previa</td>
							</tr>
						</table>
						<br />
						<p>Archivo: <INPUT type="file" name="Fmap" size="20"></p>
					</div>

				<div class="post-item">
							Texto:<br />
 							<textarea cols="90" rows="6" name="textos"  draggable="false" >
							</textarea>
					</div>

				<div class="post-item">
						Direccion:
						<br />
						<table>
							<tr>
								<td>Calle</td>
								<td><input type="text" name="calle" /></td>
								<td width="100px"></td>
								<td>Numero</td>
								<td><input type="text" name="numero" /></td>
							</tr>

							<tr>
								<td>Poblacion</td>
								<td><input type="text" name="poblacion" /></td>
                                <td width="100px"></td>
                                <td>Referencia</td>
                                <td><input type="text" name="ref" /></td>
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
