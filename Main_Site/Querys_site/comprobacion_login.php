<?php 


try{
	$base = new PDO("mysql:host=""; dbname=", "", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM usuarios WHERE correo_electronico= :correo_electronico AND password= :password";
	$resultado=$base->prepare($sql);
	
	$correo_electronico=htmlentities(addslashes($_POST["correo_electronico"]));
	$password=htmlentities(addslashes($_POST["password"]));

	$resultado->bindValue(":correo_electronico",$correo_electronico);
	$resultado->bindValue(":password",$password);
	$resultado->execute();

	$numero_registro=$resultado->rowCount();

	if($numero_registro!=0){
		/*echo "<h1>Bienvenidos<h1>";*/

		session_start();

		$_SESSION["usuario"]=$_POST["correo_electronico"];

		header("location:../main_index.php");
	}else{
		header("location:../../login.php");
	}
}catch(Exception $e){
	die("Error:" . $e->getMessage());
}












?>