
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
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="#">Adminitrador Monumento </a></li>
                <li><a href="#">Adminitrador Empresas </a></li>
                <li><a href="#">Adminitrador Idiomas y tipos de usuarios </a></li>
                <li><a href="#">Adminitrador textos paginas </a></li>
                <li><a href="#">Adminitrador usuarios </a><a href="#">Adminitrador región-comuna-provicia</a></li>
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
          <h1>Agregar Idioma</h1> 
        </blockquote>
    </div>
    <div class="content">
        
        <div class="post">
          <form action="../controlador/idioma_add.php" enctype="multipart/form-data" method="post">
          		<div class="post-item">Nombre: <input type="text" name="idioma" id="idioma"></div>
              	<div class="post-item" >Imagen: <input type="file" name="foto" id="foto"></div>
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