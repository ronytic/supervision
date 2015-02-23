<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Inicio de Obra (Ventanilla Única)";

include_once("../../class/empresa.php");
$empresa=new empresa;
$emp=todolista($empresa->mostrarTodo("","nombre"),"cod_empresa","nombre,nit","-");

include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class=" imagenfondo">
    	<div class="prefix_2 grid_4 alpha">
			<fieldset class="contenido">
				<div class="titulo"><?php echo $titulo?></div>
                <form action="guardar.php" method="post" enctype="multipart/form-data">
				<table class="tablareg">
                	<tr>
                    	<td><?php campos("Nº Hoja de Ruta","numero_hoja_ruta","text","",1,array("required"=>"required"));?></td>
                        <td><?php campos("Nombre Obra","nom_obra","text","",1,array(""=>""));?></td>
                    </tr>
					<tr>
						<td><?php campos("Número de Invitación","numero_invitacion","text","",1,array("required"=>"required"));?></td>
					
						<td><?php campos("Codigo SISIN","codigo_sisin","text","",1,array("required"=>"required"));?></td>
                        
					</tr>
                    <tr>
                    	<td><?php campos("Costo de Obra","costo_obra","text","",1,array(""=>""));?></td>
                        <td><?php campos("Superficie","superficie_m2","text","",1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	<td><?php campos("Longitud","longitud","text","",1,array(""=>""));?></td>
                        <td><?php campos("Plazo Inicial de Ejecucion","plazo_ejecucion_inicial","text","",1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	<td><?php campos("Distrito","distrito","text","",1,array(""=>""));?></td>
                        <td><?php campos("Urbanización","urbanizacion","text","",1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	<td colspan="2"><?php campos("Ubicación","ubicacion","text","",1,array("size"=>"70"));?></td>
                        
                    </tr>
                    <tr>
                    	<td colspan="2"><?php campos("Foto Inicial","croquis_proyecto","file","",1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	<td><?php campos("Descripcion","descripcion_proyecto","text","",1,array(""=>""));?></td>
                        <td><?php campos("Fecha de Inicio","fecha_inicio","text","",1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	<td><?php campos("Numero de items","numero_items","number","",1,array(""=>""));?></td>
                        <td><?php campos("Empresa","cod_empresa","select",$emp,1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	
                        <td colspan="2"><?php campos("Archivo B-1","archivos","file","",1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	<td colspan="2"><?php campos("Observaciones","observaciones","textarea","",1,array("cols"=>75,"rows"=>5));?></td>
					</tr>
					<tr><td><?php campos("Guardar","guardar","submit");?></td></tr>
				</table>
                </form>
			</fieldset>
		</div>
    	<div class="clear"></div>
    </div>
</div>
<?php include_once '../../piepagina.php';?>