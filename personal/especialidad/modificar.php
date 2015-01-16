<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Modificar Datos de Especialidad";
$id=$_GET['id'];
include_once '../../class/especialidad.php';
$especialidad=new especialidad;
$esp=array_shift($especialidad->mostrar($id));
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
						<td><?php campos("nombre","nombre","text",$esp['nombre'],1,array("required"=>"required"));?></td>
					
						<td><?php campos("Descripción","descripcion","text",$esp['descripcion'],1,array("required"=>"required"));?></td>

					</tr>
                    <tr>
                    	<td colspan="2"><?php campos("Observaciones","observaciones","textarea",$esp['observaciones'],1,array("cols"=>75,"rows"=>5));?></td>
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