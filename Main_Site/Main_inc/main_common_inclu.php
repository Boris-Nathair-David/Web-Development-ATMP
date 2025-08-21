<?php 
session_start();
if(!isset($_SESSION["usuario"])){

    header("location:../login.php");
}
    
    require('../BaseDeDatos/conexion.php');

    $query = "SELECT * FROM temporadas ORDER BY anios DESC";
    $resultado= $mysqli->query($query); 

    include('../Funciones/Funciones.php');
    $mainHeaderNav = mainHeaderNav();
    $mainMensa = mainMensa();
    $mainIniRank = mainIniRank();
    $mascRank = mascRank();
    $womanRank = womanRank();
    $showVids = showVids();
    $mainGal = mainGal();
    $mainSubGal = mainSubGal();
    $mainPerf = mainPerf();
    $editPerf = editPerf();
    $mainIniNoti = mainIniNoti();
    $mainEntRank = mainEntRank();
    $mainArtRank = mainArtRank();
?>