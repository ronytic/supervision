<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Nuevo Personal";

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
						<td><?php campos("Nombres","nombre","text","",1,array("required"=>"required"));?></td>
					
						<td><?php campos("Apellido Paterno","paterno","text","",1,array("required"=>"required"));?></td>
                        <td><?php campos("Apellido Materno","materno","text","",1,array("required"=>"required"));?></td>
					</tr>
                    <tr>
                    	<td><?php campos("C.I.","ci","text");?></td>
						<td><?php campos("Fecha de Nacimiento","fecha_nacimiento","date");?></td>
                        <td><?php campos("Dirección","direccion","text");?></td>
					</tr>
                    <tr>
                    	<td><?php campos("Teléfono Corporativo","telefono_corporativo","text");?></td>
						<td><?php campos("Teléfono","telefono","text");?></td>
					
						<td><?php campos("Cargo","cargo","text");?></td>
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