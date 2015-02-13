<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Nueva Empresa";

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
                    	<td><?php campos("Nit","nit","text","",1,array("required"=>"required"));?></td>
                        <td><?php campos("Matricula","matricula","text","",1,array(""=>""));?></td>
                    </tr>
					<tr>
						<td><?php campos("Nombre","nombre","text","",1,array("required"=>"required"));?></td>
					
						<td><?php campos("Dirección","direccion","text","",1,array("required"=>"required"));?></td>
                        
					</tr>
                    <tr>
                    	<td><?php campos("Teléfono 1","telefono1","text","",1,array(""=>""));?></td>
                        <td><?php campos("Teléfono 2","telefono2","text","",1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	<td><?php campos("Número de Cuenta","numero_cuenta","text","",1,array(""=>""));?></td>
                        <td><?php campos("Email","email","text","",1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	
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