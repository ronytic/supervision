<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Modificar Datos de Empresa";
$id=$_GET['id'];
include_once '../../class/empresa.php';
$empresa=new empresa;
$emp=array_shift($empresa->mostrar($id));
/*include_once("../../class/proveedor.php");
$proveedor=new proveedor;
$prov=todolista($proveedor->mostrarTodo(),"codproveedor","nombre","");*/

include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class=" imagenfondo">
    	<div class="prefix_2 grid_4 alpha">
			<fieldset  class="contenido">
				<div class="titulo"><?php echo $titulo?></div>
                <form action="actualizar.php" method="post" enctype="multipart/form-data">
                <?php campos("","id","hidden",$id);?>
				<table class="tablareg">
                	<tr>
                    	<td><?php campos("Nit","nit","text",$emp['nit'],1,array("required"=>"required"));?></td>
                        <td><?php campos("Matricula","matricula","text",$emp['matricula'],1,array(""=>""));?></td>
                    </tr>
					<tr>
						<td><?php campos("Nombre","nombre","text",$emp['nombre'],1,array("required"=>"required"));?></td>
					
						<td><?php campos("Dirección","direccion","text",$emp['direccion'],1,array("required"=>"required"));?></td>
                        
					</tr>
                    <tr>
                    	<td><?php campos("Teléfono 1","telefono1","text",$emp['telefono1'],1,array(""=>""));?></td>
                        <td><?php campos("Teléfono 2","telefono2","text",$emp['telefono2'],1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	<td><?php campos("Número de Cuenta","numero_cuenta","text",$emp['numero_cuenta'],1,array(""=>""));?></td>
                        <td><?php campos("Email","email","text",$emp['email'],1,array(""=>""));?></td>
                    </tr>
                    <tr>
                    	
                    </tr>
                    <tr>
                    	<td colspan="2"><?php campos("Observaciones","observaciones","textarea",$emp['observaciones'],1,array("cols"=>75,"rows"=>5));?></td>
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