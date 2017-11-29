<html>
	<head>
		<title>Coches</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body background="fotos\image5.jpg">
		<?php
		include 'cab.htmlcode.php';
		?>
		

<?php
if ( !isset($_POST['usuario']) ) {
?>    

    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" id="letra1">

        Usuario: <input type="text" name="usuario" size="5" /><br/>
        Contraseña: <input type="password" name="pass" size="20" /><br/>
        <input type="submit" name="env" value="Crear usuario"/>
    </form>	   
<?php
}
else{
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $servername = localhost;
    $database = coches;
    $table = clientes; 
try {
    //Conexión con una base de datos del servidor
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión con la base de datos '".$database."' del servidor '".$servername."' realizada.<br/>";
    echo "Usuario : ".$_POST['usuario']."<br/>";
        

    $sql = "INSERT INTO ".$table." VALUES ('".$_POST['usuario']."','".$_POST['pass']."')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Usuario agregado.<br/>";
?>	
<input type="submit" value="Crear otro usuario" onclick = "location='insertar_usuarios.php'"/>
<?php
    }
catch(PDOException $e) {
    if ($e->getCode() == "23000")
        echo "Imposible insertar el registro porque el usuario ya existe."."<br/>";
    else
        echo $e->getMessage();
}
}  
 //print "<br/><br/><br/>sql: ".$sql;
?>

		<div>
		        <?php
			include 'pie.htmlcode.php';
		        ?>
		</div>
		
	</body>
</html>
