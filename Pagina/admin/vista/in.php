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
        <div class="post">
            <h2>Sistema de Administracion</h2>
            <p>Bienvenido al sistema de administración de monumentos de Chile</p>
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