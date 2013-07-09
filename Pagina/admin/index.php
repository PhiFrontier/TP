<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sistema de Administracion</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
	<script src="../jquery/jquery-latest.js" type="text/javascript">
    </script>
</head>

<body>
<div id="wrap">
    <div class="header">
        <div class="logo">
            <a href="index.php"><img src="../images/logo.png" alt="Playlist Mobi" /></a>
        </div>
        <div class="button" id="show">
            <a href="#">Menu</a>
        </div>
        <div class="clear-float"></div>
        <div class="nav">
            <ul>
                <li><a href="index.php">Inicio</a></li>
           </ul>
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
            <form action="vista/in.php" id="log" method="post">
<table>
<tr>
<td>
Usuario: 
</td>

<td>
<input type="text" name="user" id="user" />
</td>
</tr>
<tr>
<td>
Password: </td>
<td>
<input type="password" name="pass" id="pass" />
</td>
</tr>
</table>
<br />
<input type="submit" value="Entrar" id="entrar" />
<input type="reset" Value="Reestablecer" id="borrar" />
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