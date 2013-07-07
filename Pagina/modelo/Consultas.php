<?php
$mysqli = new mysqli("localhost", "user", "", "proyecto");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

public function ObtenerUsuarioLogin($user, $password)	{
	$sql = "SELECT u.idUsuarios, u.nom_usuario FROM  proyecto.usuarios u WHERE nom-usuarios =' ". $user ."' AND password = ' " . $password ." ' ";
	
	$result = $mysqli->query($sql);
	if($result) {
		return $result;
	}else {
		return FALSE;
	}
}


public function ObtenerMonumentoPorId($id_monumento) {
	$sql = "SELECT m.nombre, m.url, m.foto_monumento, m.foto_mapa FROM proyecto.monumentos m WHERE id_monumento=' ". $id_monumento  ." ' ";
	
	$result = $mysqli->query($sql);
	if($result) {
		return $result;
	}else {
		return FALSE;
	}
}


public function RegistrarUsuario($registro) {
	$sql = "INSERT INTO proyecto.usuarios SET nom_usuarios = ' " . $registro['nombre'] ." ' , password =  ' " . $registro['password'] ." '  ,  email = ' " . $registro['email'] ." ', idPreferencias=  ' " . $registro['preferencia'] ." '   ";
	$mysqli->query($sql);
}

// en caso de no encontrar  el texto en el idioma de preferencia, busca el texto  con idioma "0" que en la base de datos se deja como el castellano
public function ObtenerTexto($id_monumento, $id_preferencia) {
	$sql ="SELECT p.texto FROM proyecto.paginas p
				INNER JOIN proyecto.pagina_has_idiomas phi ON (p.idPagina_has_idiomas = phi.idPagina_has_idiomas)
				INNER JOIN proyecto.idiomas i ON (phi.idIdiomas = i.idIdiomas)
				WHERE phi.idMonumentos = '" . $id_monumento." ' AND i.idIdiomas = ' ". $id_preferencia ." ' ";
				
		$result = $mysqli->query($sql);
		
	if($result) {
		return $result;
	}else {
		$sql ="SELECT p.texto FROM proyecto.paginas p
					INNER JOIN proyecto.pagina_has_idiomas phi ON (p.idPagina_has_idiomas = phi.idPagina_has_idiomas)
					INNER JOIN proyecto.idiomas i ON (phi.idIdiomas = i.idIdiomas)
					WHERE phi.idMonumentos = '" . $id_monumento." ' AND i.idIdiomas = ' 0 ' ";
		$result = $mysqli->query($sql);
		return $result;
	}
}

//para el formulario de ingreso de una empresa primero se guarda la dirección y luego se agrega la empresa ya que se necesita la id de la dirección para relacionar
public function AgregarDireccion($formulario) {
	$sql = "INSERT INTO proyecto.direcciones d SET referencia = " . $formulario['referencia'] . ", calle = " . $formulario['calle'] . ", numero =" . $formulario['numero'] . ", block = " . $formulario['block'] . ", sector = " . $formulario['sector'] . ", piso = " . $formulario['piso'] . ", vila = " . $formulario['villa'] . ",
				 idComunas = " . $formulario['comuna'] . " ";
	$mysqli->query($sql);
}

//con esta llamada obtienes la id de la ultima dirección ingresada
public function ObtenerUltimaDireccion()  {
	$sql = "SELECT MAX(idDirecciones) FROM proyecto.direcciones ";
	
	$result = $mysqli->query($sql);
	if($result) {
		return $result;
	}else {
		return FALSE;
	}
}

// cuando se quiera agregar la empresa se utiliza la id de la ultima dirección agregada ya que es la que corresponde a esta empresa
public function AgregarEmpresa($formulario,$idDireccion) {
	$sql = "INSERT INTO proyecto.empresas e SET rut = " . $formulario['rut'] . ", nombre = " . $formulario['nombre'] . ", nombre_fantasia = " . $formulario['nombre_fantasia'] . ", foto_logo = " . $formulario['foto_logo'] . ", idDirecciones = " . $idDirecciones . ", razon_social = " . $formulario['razon_social'] . ",
				giro = " . $formulario['giro'] . ", aniversario = " . $formulario['aniversario'] . " ";
	$mysqli->query($sql);
}




?>