<?php
include_once("../../impresion/pdf.php");
$titulo="Datos de Especialidad";
$id=$_GET['id'];
class PDF extends PPDF{
	
}

include_once("../../class/especialidad.php");
$especialidad=new especialidad;
$esp=array_shift($especialidad->mostrar($id));


$pdf=new PDF("P","mm","letter");

$pdf->AddPage();
mostrarI(array("Nombre"=>$esp['nombre'],
				"Descripción"=>$esp['descripcion'],
				"Observaciones"=>$esp['observaciones'],
				
			));

/*$foto="../foto/".$emp['foto'];
if(!empty($emp['foto']) && file_exists($foto)){
	$pdf->Image($foto,140,50,40,40);	
}
*/
$pdf->Output();
?>