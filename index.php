<?php
include_once("login/check.php");
$titulo="Inicio";
$_SESSION['idmenu']=0;
$_SESSION['subm']=0;
?>
<?php include_once("cabecerahtml.php"); ?>
<link href="css/default/default.css" type="text/css" rel="stylesheet" />
<link href="css/light/light.css" type="text/css" rel="stylesheet" />
<link href="css/nivo-slider.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>
<?php include_once("cabecera.php");?>
<div class="post">
				<h2 class="title"><a href="#">Bienvenidos   </a></h2>
				<p class="meta"><span class="date">Julio 10, 2014</span><span class="posted">Publicado por <a href="#">Supervision</a></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">					
					<p>Ingresar comunicado 1 referente a supervision de obras</p>
					<p class="links"><a href="#">Leer mas</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comentarios</a></p>
				</div>
			</div>
			<div class="post">
				<h2 class="title"><a href="#">Comunicado 1</a></h2>
				<p class="meta"><span class="date">Julio 20, 2014</span><span class="posted">Publicado por <a href="#">Supervision</a></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>Ingresar comunicado 2 referente a supervision de obras</p>
					<p class="links"><a href="#">Leer mas</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comentarios</a></p>
				</div>
			</div>
			<div class="post">
				<h2 class="title"><a href="#">Comunicado2</a></h2>
				<p class="meta"><span class="date">Agosto 10, 2014</span><span class="posted">Publicado por <a href="#">Supervision</a></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>Ingresar comunicado 3 referente a supervision de obras</p>
					<p class="links"><a href="#">Leer mas</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comentarios</a></p>
				</div>
			
			</div>
<?php include_once("piepagina.php");?>