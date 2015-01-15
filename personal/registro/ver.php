<?php
include_once("../../impresion/pdf.php");
$titulo="Datos del Personal";
$id=$_GET['id'];
class PDF extends PPDF{
	
}

include_once("../../class/personal.php");
$personal=new personal;
$pers=array_shift($personal->mostrar($id));


$pdf=new PDF("P","mm","letter");

$pdf->AddPage();
mostrarI(array("Nombres"=>$pers['nombre'],
				"Apellido Paterno"=>$pers['paterno'],
				"Apellido Materno"=>$pers['materno'],
				"Fecha de Nacimiento"=>fecha2Str($pers['fecha_nacimiento']),
				"C.I."=>$pers['ci'],
				"Teléfono"=>$pers['telefono'],
				"Teléfono Corporativo"=>$pers['telefono_corporativo'],
				"Dirección"=>$pers['direccion'],
				"Cargo"=>$pers['cargo'],
			));

/*$foto="../foto/".$emp['foto'];
if(!empty($emp['foto']) && file_exists($foto)){
	$pdf->Image($foto,140,50,40,40);	
}
*/
$pdf->Output();
?>