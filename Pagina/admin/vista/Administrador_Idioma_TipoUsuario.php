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
        <blockquote>
          <p>Agregar Idioma : </p>
        </blockquote>
    </div>
    <div class="content">
        <div class="post">
            <form action="#">
            	<label>Idioma :</label>
                <br>
                <label>
                <select name="select2">
                </select>
                </label>
                <label><br>
                <br>
                Bandera:<br>
                <br>
                <input type="image" name="imageField2" src="../images/español.jpg">
                <br>
                <input name="submit222" type="submit" class="submit" value="Modificar">
                <input name="submit232" type="submit" class="submit" value="Eliminar">
                </label>
                <label><br>
                <br>
            	<br>
            	Agregar Idioma  :</label>
            	<br>
                <input type="text" class="text">
                <label>Bandera  :</label>
                <br>
                <label>
                <input type="image" name="imageField" src="../images/chino.jpg">
                </label>
                <label></label>
                <label></label>
                <br>
                <input name="submit" type="submit" class="submit" value="Agregar">
            </form>
        </div>
        <p>&nbsp;</p>
        <p>Tipo Usuario : </p>
        <div class="post">
          <form action="#">
            <label></label>
            <label>Tipo :</label>
            <br>
            <label>
            <select name="select">
            </select>
            </label>
            <label><br>
            <input name="submit22" type="submit" class="submit" value="Modificar">
            <input name="submit23" type="submit" class="submit" value="Eliminar">
            <br>
            <br>
            </label>
            <label>Tipo agregar    :</label>
            <br>
            <input name="text522" type="text" class="text">
            <label></label>
            <input name="submit2" type="submit" class="submit" value="Agregar">
          </form>
        </div>
    </div>
    <div class="footer">
        <p>&nbsp;</p>
    </div>
    <div class="by"></div>
</div>
</body>
</html>
