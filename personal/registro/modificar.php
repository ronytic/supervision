<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Modificar Datos de Personal";
$id=$_GET['id'];
include_once '../../class/personal.php';
$personal=new personal;
$pers=array_shift($personal->mostrar($id));
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
						<td><?php campos("Nombres","nombre","text",$pers['nombre'],1,array("required"=>"required"));?></td>
					
						<td><?php campos("Apellido Paterno","paterno","text",$pers['paterno'],1,array("required"=>"required"));?></td>
                        <td><?php campos("Apellido Materno","materno","text",$pers['materno'],1,array("required"=>"required"));?></td>
					</tr>
                    <tr>
                    	<td><?php campos("C.I.","ci","text",$pers['ci']);?></td>
						<td><?php campos("Fecha de Nacimiento","fecha_nacimiento","date",$pers['fecha_nacimiento']);?></td>
                        <td><?php campos("Dirección","direccion","text",$pers['direccion']);?></td>
					</tr>
                    <tr>
                    	<td><?php campos("Teléfono Corporativo","telefono_corporativo","text",$pers['telefono_corporativo']);?></td>
						<td><?php campos("Teléfono","telefono","text",$pers['telefono']);?></td>
					
						<td><?php campos("Cargo","cargo","text",$pers['cargo']);?></td>
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