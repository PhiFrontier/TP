<?php require_once('../../Connections/proyecto.php'); ?>
<?php
$id=$_GET["id"];

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
$query_usuario = "SELECT * FROM usuarios where idUsuarios = $id";
mysql_query("SET NAMES 'utf8'");
$usuario = mysql_query($query_usuario, $proyecto) or die(mysql_error());
$row_usuario = mysql_fetch_assoc($usuario);
$totalRows_usuario = mysql_num_rows($usuario);
if($totalRows_usuario==0){ header("location:error_no.html");}

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
        <blockquote>
          <h1>Agregar Usuario</h1> 
        </blockquote>
    </div>
    <div class="content">
        
        <div class="post">
          <form action="../controlador/usuario_mod.php" method="post">
          	<div class="post-item">
            	<table>
                <tr>
                    	<td>ID:</td> 
                        <td><input name="id" type="text" readonly="readonly" value="<? echo $row_usuario['idUsuarios'] ?>"></td>
                  </tr>
            		<tr>
                    	<td>Nombre Usuario:</td> 
                        <td><input type="text" name="usuario" value="<? echo $row_usuario['nom_usuario'] ?>"></td>
                    </tr>
            		<tr>
                    	<td>Password:</td>
                        <td><input type="password" name="pass" value="<? echo $row_usuario['password'] ?>"></td>
                    </tr>
                    <tr>
                    	<td>Ingresar Nueva Password:</td>
                        <td><input type="password" name="pass1"></td>
                    </tr>
            		<tr>
                    	<td>Vuelva a Ingresar Nueva Password:</td>
                        <td><input type="password" name="pass2"></td>
                    </tr>
            	</table>
            </div>
                <input type="submit" value="Guardar">
                <input type="reset" value="Borrar">
          </form>
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