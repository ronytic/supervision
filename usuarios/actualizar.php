<?php
include_once("../login/check.php");
if(!empty($_POST)):
$narchivo="usuarios";
include_once("../class/".$narchivo.".php");
${$narchivo}=new $narchivo;
extract($_POST);
$valores=array("usuario"=>"'$usuario'",
			
			"nombre"=>"'$nombres'",
			"paterno"=>"'$paterno'",
			"materno"=>"'$materno'",
			"nivel"=>"'$nivel'",
			"ci"=>"'$ci'",
			"direccion"=>"'$direccion'",
			"telefono"=>"'$telefono'",
			"celular"=>"'$celular'",
			"cargo"=>"'$cargo'",
			"email"=>"'$email'",
			"jefatura"=>"'$jefatura'",
			"obs"=>"'$observacion'"
			);
			
if($_FILES['foto']['name']!=""){
	@copy($_FILES['foto']['tmp_name'],"../imagenes/usuarios/".$_FILES['foto']['name']);	
	$valores["foto"]="'".$_FILES['foto']['name']."'";
}			
if($password!=""){$valores=array_merge($valores,array("password"=>"MD5('$password')"));}
${$narchivo}->actualizar($valores,$cod);
$codinsercion=$cod;
$mensaje[]="EL USUARIO SE GUARDO CORRECTAMENTE";
$titulo="Confirmación de Guardado";
$folder="../";
include_once '../mensajeresultado.php';
endif;?>