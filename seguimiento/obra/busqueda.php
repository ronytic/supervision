<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/empresa.php';
	extract($_POST);

	$empresa=new empresa;
	$emp=$empresa->mostrarTodo("nombre LIKE '%$nombre%' and nit LIKE '%$nit%' and numero_matricula LIKE '%$numero_matricula%'","nombre");
	$titulo=array("nombre"=>"Nombre","nit"=>"Nit","numero_cuenta"=>"Número de Cuenta","telefono1"=>"Teléfono 1","telefono2"=>"Teléfono 2");
	listadoTabla($titulo,$emp,1,"modificar.php","eliminar.php","ver.php");
}
?>