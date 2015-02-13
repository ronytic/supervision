<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/empresa.php");
$empresa=new empresa;

extract($_POST);
//empieza la copia de archivos
/*
if(($_FILES['curriculum']['type']=="application/pdf" || $_FILES['curriculum']['type']=="application/msword" || $_FILES['curriculum']['type']=="application/vnd.openxmlformats-officedocument.wordprocessingml.document") && $_FILES['curriculum']['size']<="500000000"){
	@$curriculum=$_FILES['curriculum']['name'];
	@copy($_FILES['curriculum']['tmp_name'],"../curriculum/".$_FILES['curriculum']['name']);
}else{
	//mensaje que no es valido el tipo de archivo	
	$mensaje[]="Archivo no válido del curriculum. Verifique e intente nuevamente";
}
*/
$valores=array(	"nit"=>"'$nit'",
				"matricula"=>"'$matricula'",
				"nombre"=>"'$nombre'",
				"direccion"=>"'$direccion'",
				"telefono1"=>"'$telefono1'",
				"telefono2"=>"'$telefono2'",
				"numero_cuenta"=>"'$numero_cuenta'",
				"email"=>"'$email'",
				"observaciones"=>"'$observaciones'",
				);
				$emp=$empresa->mostrarTodo("nit LIKE '$nit' and numero_matricula LIKE '$numero_matricula'","nombre");
				if(count($emp)>0){
					$mensaje[]="LOS DATOS QUE SE QUIEREN GUARDAR, YA FUERON REGISTRADOS PREVIAMENTE. PARA EVITAR DUPLICIDAD NO SE GUARDARON";
				}else{
					$empresa->insertar($valores);
					$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";
				}

$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>