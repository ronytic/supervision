<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/personal.php");
$personal=new personal;
extract($_POST);
//empieza la copia de archivos
$valores=array(	"nombre"=>"'$nombre'",
				"paterno"=>"'$paterno'",
				"materno"=>"'$materno'",
				
				"fecha_nacimiento"=>"'$fecha_nacimiento'",
				"ci"=>"'$ci'",
				"direccion"=>"'$direccion'",
				"telefono_corporativo"=>"'$telefono_corporativo'",
				"telefono"=>"'$telefono'",
				"cargo"=>"'$cargo'",
				
				);
				$personal->actualizar($valores,$id);
				$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";


$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>