<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- contenido -->
		<div id="sidebar">
			<ul>
				<li>
					<div id="buscar" class="contenido" >
                            <span class="pequenol">Nombre:</span> <?php echo $us['nombre'];?> <?php echo $us['paterno'];?><br>
                            <span class="pequenol">Usuario:</span> <?php echo $us['usuario'];?><br>
                            <span class="pequenol">Hora Acceso:</span> <?php echo $_SESSION['horasesion'];?><br>
                            <a href="<?php echo $folder?>usuarios/cambiarp.php?id=<?php echo $_SESSION['idusuario']?>" class="enlaceusuario">Cambiar Contraseña</a>
                            <a href="<?php echo $folder ?>login/logout.php" class="botonplomo">Salir del Sistema</a>

					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>Noticias</h2>
					<p>ingreso de noticias actuales o pasadas</p>
				</li>
				<li>
					<h2>Categorias</h2>
					<ul>
						<li><a href="#">categoria 1</a></li>
						<li><a href="#">categoria 2</a></li>
						<li><a href="#">categoria 3</a></li>
						<li><a href="#">categoria 4</a></li>
						<li><a href="#">categoria 5</a></li>
						<li><a href="#">categoria 6</a></li>
					</ul>
				</li>
				<li>
					<h2>Previus</h2>
					<ul>
						<li><a href="#">Comunicados pasados  1</a></li>
						<li><a href="#">Comunicados pasados  2</a></li>
						<li><a href="#">Comunicados pasados  3</a></li>
						<li><a href="#">Comunicados pasados  4</a></li>
						<li><a href="#">Comunicados pasados  5</a></li>
						<li><a href="#">Comunicados pasados  6</a></li>
					</ul>
				</li>
				<li>
					<h2>Marketing</h2>
					<ul>
						<li><a href="#">mercado 1</a></li>
						<li><a href="#">mercado 2</a></li>
						<li><a href="#">mercado 3</a></li>
					
					</ul>
				</li>
			</ul>
		</div>
		<!-- barra lateral -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- pagina -->
</div>
	<div id="footer">
		<footer>
				<h5>
			
					<span class="name">Copyright © Olibert M. Mamani Uruña</span> <span class="region">La paz</span>-<span class="country-name">bolivia</span>
					<span class="tel">cel:68122136</span>-<span class="email">oliber.02@gmail.com</span>			
				</h5>
				<script type="text/javascript">
					alert(LocalStorage);
					if (window.LocalStorage.pagecount){window.LocalStorage.pagecount = Number(window.LocalStorage.pagecount)+1;}else{window.LocalStorage.pagecount = 1;}
					document.write("has visitado mi portal" + window.LocalStorage.pagecount + "veces");
				</script>
				<script type="text/javascript">
					if (sessionStorage.pagecount){sessionStorage.pagecount = Number(sessionStorage.pagecount)+1;}else{sessionStorage.pagecount = 1;}
					document.write("has visitado mi sitio "  +  sessionStorage.pagecount  + "  veces");
				</script>
		</footer>	
	</div>
	
</body>
</html>
<?php php_start();?>