<?php
// Start the session
session_start();
if (!isset($_SESSION["username"])){
	$_SESSION["username"] = "webuser";
	$_SESSION["password"] = "webuser";
}
?>
<html>
<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.zoom').hover(function() {
					$(this).addClass('transition');
				}, function() {
					$(this).removeClass('transition');
				});
			});
		</script>


<div id=titulo>
		<b class="b" id="b">B</b><b class="m" id="m">M</b><b class="w" id="w">W</b>

		</div>
		
		<div class="topnav" id="myTopnav">
			<a href="index.php">Inicio</a>
			<a href="historia.php">Historia</a>
			
			<div class="dropdown">
				<button class="dropbtn">BMW</button>
				<div class="dropdown-content">
				  <a href="m2.php">M2</a>
				  <a href="m3.php">M3</a>
				  <a href="m4.php">M4</a>
				  <a href="m5.php">M5</a>
				</div> 
			</div>
			
			<a href="formulario.php">Formulario</a>
			<a href="visualizar_registros.php">Ver coches</a>
			<a href="eliminar_registros.php">Eliminar coche</a>
			<div>
	  		
			 <a style="float:right" href="logout.php">Cerrar Sesión</a>
	   		 <a style="float:right" href="login.php" target="_blank">Iniciar Sesión</a>
	  		 <span style="float:right;color:#999;font-size:0.8em"><?php echo "(".$_SESSION["username"].") "; ?></span>
</div>
		</div>
</html>
