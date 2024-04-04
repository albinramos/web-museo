<?php
include('../../conexion/conexion.php');
$nom_museo=$_POST['Snom_museo'];
/* echo $nom_museo; */
/* die(); */
$select="SELECT nom_museo from museos where nom_museo = '$nom_museo'";
$selectexe=mysqli_query($conexionBBDD,$select) or die ("la SELECT es erronea"."".mysqli_error($conexionBBDD));
$numfilas=mysqli_num_rows($selectexe);
/* echo $numfilas;
die(); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAJA DE MUSEOS</title>
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">BORRADO DE DATOS DE MUSEOS</h1>
    <?php
    if($numfilas==1)
    {
        $delete="DELETE from museos where nom_museo = '$nom_museo'";
        $deletexe=mysqli_query($conexionBBDD,$delete) or die ("el DELETE es erroneo"."".mysqli_error($conexionBBDD));

    ?>
        <h2 class="titulo">Los datos del <span><?php echo $nom_museo?></span> se han borrado correctamente</h2>
    <?php    
    } 
    else
    { ?>
        <h2 class="titulo">El museo <span><?php echo $nom_museo?></span> no está registrado</h2>
    <?php
    } ?>
</body>
</html>