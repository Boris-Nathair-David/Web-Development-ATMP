<?php

 $id_usuario = $_GET["id_usuario"];    
 $nombre = $_GET["nombre"];
 $apellido = $_GET["apellido"];
 $pais = $_GET["pais"];
 $edad = $_GET["edad"];
 $correo_electronico = $_GET["correo_electronico"];
 $password = $_GET["password"];

    require('../../BaseDeDatos/conexion.php');

    $query = "UPDATE usuarios SET id_usuario='$id_usuario',nombre='$nombre', apellido='$apellido', pais='$pais', edad='$edad', correo_electronico='$correo_electronico', password='$password' WHERE id_usuario = '$id_usuario'";

    $valor = $mysqli->query($query);

    header("Location:../../login.php");
    session_start();
?>