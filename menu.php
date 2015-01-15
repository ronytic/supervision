<?php 
include_once 'class/menu.php';
include_once 'class/submenu.php';
$menu=new menu;
$submenu=new submenu;
?>
<ul id="nav">
	<li><a href="<?php echo $folder; ?>index.php" class="selected active">Inicio</a></li>
    <?php 
    $i=1;
    foreach ($menu->mostrarMenu($nivel) as $m) {$i++;?>
        <li  class='has-sub'><a href="#" rel="tab<?php echo $i;?>"><?php echo mayuscula($m['nombre']) ?></a>
        <?php if($m['submenu']){?>
            <ul>
              <?php foreach ($submenu->mostrarSubMenu($nivel,$m['idmenu']) as $sb): ?>
                <li><a href="<?php echo $folder?><?php echo $m['url'] ?><?php echo $sb['url'] ?>"><?php echo $sb['nombre'] ?></a></li>	
              <?php endforeach ?>
            </ul>
        <?php }?>
        </li>
    <?php }?>
				  </ul>
			<!-- codigo java script -->
 			
	<div id="wrapper">
	<!-- menu de opciones -->
	<div id="pagina">
	<div id="pagina-bgtop">
	<div id="pagina-bgbtm">
		<div id="contenido">