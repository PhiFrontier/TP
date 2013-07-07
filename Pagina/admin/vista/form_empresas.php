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
$Region = mysql_query($query_Region, $proyecto) or die(mysql_error());
$row_Region = mysql_fetch_assoc($Region);
$totalRows_Region = mysql_num_rows($Region);

mysql_select_db($database_proyecto, $proyecto);
$query_provincia = "SELECT * FROM provincia";
$provincia = mysql_query($query_provincia, $proyecto) or die(mysql_error());
$row_provincia = mysql_fetch_assoc($provincia);
$totalRows_provincia = mysql_num_rows($provincia);

mysql_select_db($database_proyecto, $proyecto);
$query_Comuna = "SELECT * FROM comuna";
$Comuna = mysql_query($query_Comuna, $proyecto) or die(mysql_error());
$row_Comuna = mysql_fetch_assoc($Comuna);
$totalRows_Comuna = mysql_num_rows($Comuna);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ingresar</title>
    <link href="../../css/style.css" type="text/css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript" src="../../jquery/elements.js"></script>
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
        <blockquote>
          <h1>Agregar Empresa</h1> 
        </blockquote>
    </div>
   	<div class="content">
				<legend>Datos</legend>
				<div class="post-item">
					<table>
						<tr>
							<td>RUT</td>
                          <td>Foto logo</td>
						</tr>
						<tr>
						  <td> <input type="text" name=""/> - <input type="text" size="2"/> </td>
                            <td><input type="file" name="logo"/></td>
					  </tr>
					  <tr>
						<td>Nombre</td>
                        <td>Nombre Fantasia</td>
                        <td>Razon social</td>
                        <td>Giro</td>
					  </tr>
						<tr>
							<td><input type="text" /></td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
						</tr>
				  </table>
	  </div>

	  <div class="post-item">
		<legend>Direccion</legend>
		<table>
					<tr>
						<td>Region</td>
                        <td>Provincia</td>
                        <td>Comuna</td>
                        <td>Villa-Población-Condominio</td>
					</tr>
		  <tr>
                        <td><select><option value="">Seleccione</option>
                          <?php
do {  
?>
                          <option value="<?php echo $row_Region['REGION_ID']?>"><?php echo $row_Region['REGION_NOMBRE']?></option>
                          <?php
} while ($row_Region = mysql_fetch_assoc($Region));
  $rows = mysql_num_rows($Region);
  if($rows > 0) {
      mysql_data_seek($Region, 0);
	  $row_Region = mysql_fetch_assoc($Region);
  }
?>
                        </select></td>
                        <td><select><option value="">Seleccione</option>
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
                        <td><select><option value="">Seleccione</option>
                          <?php
do {  
?>
                          <option value="<?php echo $row_Comuna['COMUNA_ID']?>"><?php echo $row_Comuna['COMUNA_NOMBRE']?></option>
                          <?php
} while ($row_Comuna = mysql_fetch_assoc($Comuna));
  $rows = mysql_num_rows($Comuna);
  if($rows > 0) {
      mysql_data_seek($Comuna, 0);
	  $row_Comuna = mysql_fetch_assoc($Comuna);
  }
?>
                        </select></td>
            <td><input type="text" name="villa"/></td>
		  </tr>
                    <tr>
                    	<td>Calle</td>
                    	<td>Numero</td>
                        <td>Block</td>
                        <td>Sector</td>
                        <td>Piso</td>
					</tr>
					<tr>
						<td><input type="text" name="calle"/></td>
                        <td><input type="text" name="numero"/></td>
                        <td><input type="text" name="block"/></td>
                        <td><input type="text" name="sector"/></td>
                        <td><input type="text" name="piso"/></td>
					</tr>
		</table>
	  </div>

	  <div class="post-item">
		<legend>Correo Electronico</legend>
		<table>
		  <tr>
           	<td>Email:</td><td><input type="text" name="email"/></td>
		  </tr>
		</table>
	  </div>

	  <div class="post-item">
		<legend>Telefono</legend>
        <table>
					<tr>
                		<td>Codigo:</td>
						<td><input type="text" name="codFono" size="4"/></td>
    					<td>Numero:</td>
    					<td><input type="text" name="NumFono" /></td>
					</tr>
		</table>
	  </div>
      
      <div class="post-item">
      <form id="myForm">
<div id="input1" class="clonedInput" style="margin-bottom: 4px;">Name: <input id="name1" type="text" name="name1" /></div>
<div><input id="btnAdd" type="button" value="add another name" /><br />
<input id="btnDel" type="button" value="remove name" disabled="disabled" /></div>
</form>
      </div>
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
mysql_free_result($Region);

mysql_free_result($provincia);

mysql_free_result($Comuna);
?>
