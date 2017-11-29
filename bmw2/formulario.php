<?php
		include 'cab.htmlcode.php';
?>
<html>
	<head>
		<title>Coches</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body background="fotos\image5.jpg">

	
<?php echo $_SESSION['nombredelcampo']; ?>
<?php
if ( !isset($_POST['CodCoche']) ) {
?>    

    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" id="letra1">
        CodCoche: <input type="text" name="CodCoche" size="5" /><br/>
        Modelo: <input type="text" name="Modelo" size="20" /><br/>
        Año: <input type="text" name="Año" size="20" /><br/>
        <input type="submit" name="env" value="Insertar Registro"/>
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
    echo "Modelo: ".$_POST['Modelo']."<br/>";
    echo "Año: ".$_POST['Año']."<br/>";    
    
    $sql = "INSERT INTO ".$table." VALUES (".$_POST['CodCoche'].",'".$_POST['Modelo']."',".$_POST['Año'].")";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Coche insertado correctamente.<br/>";
?>	
<input type="submit" value="Otro formulario" onclick = "location='formulario.php'"/>
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
