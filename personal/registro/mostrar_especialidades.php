<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/personal_especialidad.php';
	include_once '../../class/especialidad.php';
	extract($_POST);

	$personal_especialidad=new personal_especialidad;
	$especialidad=new especialidad;
	$per_esp=$personal_especialidad->mostrarTodo("cod_personal LIKE '$cod_personal' ","");
	$i=0;
	foreach($per_esp as $p_e){$i++;
		$esp=array_shift($especialidad->mostrar($p_e['cod_especialidad']));
		$datos[$i]['cod_personal_especialidad']=$p_e['cod_personal_especialidad'];
		$datos[$i]['nombre']=$esp['nombre'];
	}
	$titulo=array("nombre"=>"Especialidad");
	listadoTabla($titulo,$datos,1,"","eliminar_especialidad.php","");
}
?>