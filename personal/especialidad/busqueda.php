<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/especialidad.php';
	extract($_POST);

	$especialidad=new especialidad;
	$esp=$especialidad->mostrarTodo("nombre LIKE '%$nombre%' and descripcion LIKE '%$descripcion%'");
	$titulo=array("nombre"=>"Nombre","descripcion"=>"Descripción","observaciones"=>"Observaciones");
	listadoTabla($titulo,$esp,1,"modificar.php","eliminar.php","ver.php");
}
?>