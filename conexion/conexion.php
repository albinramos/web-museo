<?php
$servidor="localhost";
$usuario="root";
$password="";
$bbdd="proyecto_final";

$conexionBBDD=mysqli_connect($servidor,$usuario,$password,$bbdd);
/* $conexionBBDD=mysqli_connect($servidor,$usuario,$password,$bbdd) or die ("la CONEXION no es correcta"."".mysqli_error($conexionBBDD)); */

mysqli_query($conexionBBDD, "SET NAMES'UTF8'");
?>