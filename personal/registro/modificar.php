<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Modificar Datos de Personal";
$id=$_GET['id'];
include_once '../../class/personal.php';
$personal=new personal;
$pers=array_shift($personal->mostrar($id));
include_once("../../class/especialidad.php");
$especialidad=new especialidad;
$esp=todolista($especialidad->mostrarTodo("","nombre"),"cod_especialidad","nombre","");

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
<div class="clear"></div>
<div class="grid_12">
    <div class="prefix_2 grid_4 alpha">
			<fieldset  class="contenido">
            	<div class="titulo">Especialidades</div>
                <table>
                <tr>
                	<td>
                    <td><?php campos("Especialidad","cod_especialidad","select",$esp);?></td>
                    </td>
                    <td><?php campos("Asignar","asignar","submit");?></td>
                </tr>
                </table>
                <div class="respuestaformulario"></div>
            </fieldset>
            
	</div>
</div>
<script language="javascript">
var cod_personal=<?php echo $id?>;
$(document).on("ready",function(){
	listar();
	$("#asignar").click(function(e) {
        var cod_especialidad=$("#cod_especialidad").val();
		if(cod_especialidad!=""){
		$.post("guardar_especialidad.php",{"cod_personal":cod_personal,"cod_especialidad":cod_especialidad},function(data){
		listar();
		
		});
		}
    });
	$(".respuestaformulario").on("click",".eliminar",function(e){
		e.preventDefault();
		var h=$(this).attr("href");
		if(confirm("¿Desea eliminar esta Especialidad?")){
			$.post(h,{"cod_personal":cod_personal},function(data){
				listar();
			
			});
		}
	});
});

function listar(){
	
	var cod_especialidad=$("#cod_especialidad").val();
	$.post("mostrar_especialidades.php",{"cod_personal":cod_personal},function(data){
		$(".respuestaformulario").html(data);	
	});
}
</script>
<?php include_once '../../piepagina.php';?>