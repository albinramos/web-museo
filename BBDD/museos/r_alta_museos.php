<?php
include('../../conexion/conexion.php');
$_POST;
/* var_dump ($_POST); */
$nom_museo=$_POST['Snom_museo'];
$ubicacion=$_POST['Subicacion'];
$select="SELECT nom_museo from museos where nom_museo='$nom_museo'";
$selectexe=mysqli_query($conexionBBDD,$select) or die ("La SELECT es erronea"."".mysqli_error($conexionBBDD));
$numfilas=mysqli_num_rows($selectexe);
/* echo $numfilas; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>respuesta alta museo</title>
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">DATOS ALTA MUSEO</h1>
    <?php
    if($numfilas==1)
    { ?>
        <h2 class="titulo"> El museo <?php echo $nom_museo ?> ya está dado de alta</h2>
    <?php
    } 
    else
    {
        $insert="INSERT INTO museos (nom_museo,ubicacion) values ('$nom_museo','$ubicacion')";
        $insertexe=mysqli_query($conexionBBDD, $insert) or die ("la INSERT es erronea"."".mysqli_error($conexionBBDD));
        ?>
                <h2 class="titulo">Los datos del <span><?php echo $nom_museo?></span> se han integrado correctamente</h2>
        <section class=bloquerespuesta>
            <h3 class="h3respuesta">Los datos son:</h3>
            <ul id="listadorespuesta">
                <li>NOMBRE DEL MUSEO: <?php echo $nom_museo?></li>
                <li>CIUDAD: <?php echo $ubicacion?></li>
            </ul>
        </section>
    <?php
    } ?>
</body>
</html>