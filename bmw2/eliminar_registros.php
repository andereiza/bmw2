<?php
		include 'cab.htmlcode.php';
		?>
<html>
	<head>
		<title>Coches</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body background="fotos\image5.jpg">
		
		

<?php
if ( !isset($_POST['CodCoche']) ) {
?>    

    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" id="letra1">
        CodCoche: <input type="text" name="CodCoche" size="5"/><br/>
        <input type="submit" name="env" value="Eliminar registro"/>
    </form>	   
<?php
}
else{
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $servername = localhost;
    $database = coches;
    $table = bmw; 
try {
    //Conexión con una base de datos del servidor
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión con la base de datos '".$database."' del servidor '".$servername."' realizada.<br/>";
    echo "CodCoche: ".$_POST['CodCoche']."<br/>";
   
    
    $sql = "Delete From bmw Where CodCoche=".$_POST['CodCoche'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Coche eliminado correctamente.<br/>";
?>	
<input type="submit" value="eliminar otro coche" onclick = "location='eliminar_registros.php'"/>
<?php
    }
catch(PDOException $e) {
    if ($e->getCode() == "23000")
        echo "Imposible insertar el registro porque el codigo del coche ya existe."."<br/>";
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
