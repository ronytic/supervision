<?php
include_once '../login/check.php';
$folder="../";
$titulo="Modificar Usuario";
$narchivo="usuarios";
include_once("../class/usuarios.php");
$usuarios1=new usuarios;
$cod=$_GET['id'];
$usu=array_shift($usuarios1->mostrar($cod));
include_once '../funciones/funciones.php';
include_once '../cabecerahtml.php';
?>
<?php include_once '../cabecera.php';?>
    	<div class="prefix_3 grid_4 suffix_3 imagenfondo">
			<fieldset class="contenido">
				<div class="titulo"><?php echo $titulo;?></div>
                <form action="actualizar.php" method="post" enctype="multipart/form-data">
                <?php campos("","cod","hidden",$cod)?>
				<table class="tablareg">
                	<tr>
						<td><?php campos("Usuario","usuario","text",$usu['usuario'],1,array("required"=>"required","size"=>30));?></td>
						<td><?php campos("Contraseña","password","text","",0,array(""=>"","size"=>30));?></td>
					</tr>
                    <tr>
						<td><?php campos("Nombres","nombres","text",$usu['nombre'],0,array("required"=>"required","size"=>30));?></td>
						<td><?php campos("Apellido Paterno","paterno","text",$usu['paterno'],0,array("required"=>"required","size"=>30));?></td>
					</tr>
                    <tr>
                    	<td><?php campos("Apellido Materno","materno","text",$usu['materno'],0,array("required"=>"required","size"=>30));?></td>
                        <td><?php campos("CI","ci","text",$usu['ci'],0,array("size"=>30));?></td>
                    </tr>
                    <tr>
                        <td><?php campos("Dirección","direccion","text",$usu['direccion'],0,array("required"=>"required","size"=>30));?></td>
                        <td><?php campos("Teléfono","telefono","text",$usu['telefono'],0,array("size"=>30));?></td>
                    </tr>

                    <tr>
            	<td><?php campos("Celular","celular","text",$usu['celular'],0,array("required"=>"required","size"=>30));?></td>
                <td><?php campos("Cargo","cargo","text",$usu['cargo'],0,array("size"=>30));?></td>
            </tr>
<tr>
            	<td colspan="2"><?php campos("Foto","foto","file","",0,array("size"=>30));?>
                <?php if($usu['foto']!=""){?>
                <br>
                <a href="../imagenes/usuarios/<?php echo $usu['foto']?>" target="_blank">
                <img src="../imagenes/usuarios/<?php echo $usu['foto']?>" height="150">
                </a>
                <?php }?>
                </td>
            </tr>
                    <tr>
						<td><?php campos("Email","email","text",$usu['email'],0,array("size"=>30));?></td>
						<td><?php campos("Nivel","nivel","select",array("2"=>"Director","3"=>"Jefe de Unidad","4"=>"Supervisor","5"=>"Gestión","6"=>"Ventanilla","7"=>"Correspondencia"),"","",$usu['nivel']);?></td>
					</tr>
                    <tr>
                    	<td><?php campos("Jefatura","jefatura","select",array("Norte"=>"Norte","Sur"=>"Sur","Upre"=>"Upre","Cierre"=>"Cierre"),"","",$usu['jefatura']);?></td>
                    </tr>
					<tr>
						<td colspan="2"><?php campos("Observación","observacion","textarea",$usu['obs'],"",array("rows"=>5,"cols"=>50,"size"=>30));?></td>
					</tr>
					<tr><td><?php campos("Guardar Usuario","guardar","submit");?></td><td></td></tr>
				</table>
                </form>
			</fieldset>
		</div>

<?php include_once '../piepagina.php';?>