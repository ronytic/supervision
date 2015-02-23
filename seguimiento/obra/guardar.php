<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/obra.php");
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
if($_FILES['croquis_proyecto']['name']!=""){
	@copy($_FILES['croquis_proyecto']['tmp_name'],"../croquis_proyecto/".$_FILES['croquis_proyecto']['name']);	
	$croquis_proyecto=$_FILES['croquis_proyecto']['name'];
}
if($_FILES['archivos']['name']!=""){
	@copy($_FILES['archivos']['tmp_name'],"../archivos/".$_FILES['archivos']['name']);
	$archivos=$_FILES['archivos']['name'];
}
$valores=array(	"numero_hoja_ruta"=>"'$numero_hoja_ruta'",
				"nom_obra"=>"'$nom_obra'",
				"numero_invitacion"=>"'$numero_invitacion'",
				"codigo_sisin"=>"'$codigo_sisin'",
				"costo_obra"=>"'$costo_obra'",
				"superficie_m2"=>"'$superficie_m2'",
				"longitud"=>"'$longitud'",
				"plazo_ejecucion_inicial"=>"'$plazo_ejecucion_inicial'",
				"distrito"=>"'$distrito'",
				"urbanizacion"=>"'$urbanizacion'",
				"ubicacion"=>"'$ubicacion'",
				"croquis_proyecto"=>"'$croquis_proyecto'",
				"descripcion_proyecto"=>"'$descripcion_proyecto'",
				"fecha_inicio"=>"'$fecha_inicio'",
				"numero_items"=>"'$numero_items'",
				"cod_empresa"=>"'$cod_empresa'",
				"archivos"=>"'$archivos'",
				
				"observaciones"=>"'$observaciones'",
				);
				$ob=$obra->mostrarTodo("numero_hoja_ruta LIKE '$numero_hoja_ruta' and numero_invitacion LIKE '$numero_invitacion'","");
				if(count($ob)>0){
					$mensaje[]="LOS DATOS QUE SE QUIEREN GUARDAR, YA FUERON REGISTRADOS PREVIAMENTE. PARA EVITAR DUPLICIDAD NO SE GUARDARON";
				}else{
					$empresa->insertar($valores);
					$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";
				}

$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>