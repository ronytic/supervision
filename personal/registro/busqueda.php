<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/personal.php';
	extract($_POST);

	$personal=new personal;
	$per=$personal->mostrarTodo("nombre LIKE '%$nombre%' and paterno LIKE '%$paterno%' and materno LIKE '%$materno%'");
	$titulo=array("nombre"=>"Nombre","paterno"=>"Ap. Paterno","materno"=>"Ap. Materno","cargo"=>"Cargo","telefono"=>"Teléfono","telefono_corporativo"=>"Teléfono Corporativo");
	listadoTabla($titulo,$per,1,"modificar.php","eliminar.php","ver.php");
}
?>