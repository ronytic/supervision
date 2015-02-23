<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/empresa.php");
$empresa=new empresa;
extract($_POST);
//empieza la copia de archivos
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
				$empresa->actualizar($valores,$id);
				$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";
}

$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>