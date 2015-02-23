<?php
include_once("../../impresion/pdf.php");
$titulo="Datos de Empresa";
$id=$_GET['id'];
class PDF extends PPDF{
	
}

include_once("../../class/empresa.php");
$empresa=new empresa;
$emp=array_shift($empresa->mostrar($id));


$pdf=new PDF("P","mm","letter");

$pdf->AddPage();
mostrarI(array("Nit"=>$emp['nit'],
				"Matricula"=>$emp['matricula'],
				"Nombre"=>$emp['nombre'],
				"Dirección"=>$emp['direccion'],
				"Teléfono 1"=>$emp['telefono1'],
				"Teléfono 2"=>$emp['telefono2'],
				"Número de Cuenta"=>$emp['numero_cuenta'],
				"Email"=>$emp['email'],
				"Observaciones"=>$emp['observaciones'],
				
			));

/*$foto="../foto/".$emp['foto'];
if(!empty($emp['foto']) && file_exists($foto)){
	$pdf->Image($foto,140,50,40,40);	
}
*/
$pdf->Output();
?>