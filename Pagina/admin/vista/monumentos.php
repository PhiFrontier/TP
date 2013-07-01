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
            <a href="../index.php"><img src="../images/logo.png" alt="Playlist Mobi" /></a>
        </div>
        <div class="button" id="show">
            <a href="#">Menu</a>
        </div>
        <div class="clear-float"></div>
        <div class="nav">
            <ul>
                <li><a href="in.php">Inicio</a></li>
                <li><a href="#">Adminitrador Monumento </a></li>
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
            <h1>Mantenedor de Monumentos</h1>
            <div class="post-item">
           	  <form action="#" method="get">
           	  		
                 Buscar <input value="" type="text" name="buscar"> <input type="submit" value="buscar">   
              </form>
            </div>
            <div class="post-item">
            	<table class="grid">
                	<tr>
                    	<th scope="col">Nro
                        </th>
                        <th scope="col">Nombre
                        </th>
                        <th scope="col">Comuna
                        </th>
                        <th scope="col">Estado
                        </th>
                        <th scope="col">Modificar
                        </th>
                      <td><div class="button" id="show">
            				<a href="monumento_add.php">Agregar Nuevo</a>
       						</div>
                        </td>
                    </tr>
                    

                </table>
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