<?php
include('../../conexion/conexion.php');
$id_museo=$_POST['Sid_museo'];
$select="SELECT nom_museo,ubicacion from museos where id_museo='$id_museo'";
$selectexe=mysqli_query($conexionBBDD,$select) or die ("la SELECT es errones"."".mysqli_error($conexionBBDD));
/* var_dump ($selectexe); */
$mostrar=mysqli_fetch_assoc($selectexe);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISUALIZAR INFO MUSEO</title>
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">VISUALIZAR DATOS DE MUSEOS</h1>    
    <ul class="bloquerespuesta">
            <li>ID: <?php echo $id_museo ?></li>
            <li>NOMBRE: <?php echo $mostrar['nom_museo'] ?></li>
            <li>UBICACION: <?php echo $mostrar['ubicacion'] ?></li>
        </ul>
</body>
</html>