<?php
include('../../conexion/conexion.php');
/* NUEVOS DATOS */
$id=$_POST['Sid'];
/* echo $id; */
$nom_museo=$_POST['Snombre'];
/* echo $nom_museo; */
$ubicacion=$_POST['Subicacion'];
/* echo $ubicacion;
die(); */
/*-----DATOS ANTERIORES PARA COMPARAR------ */
$select="SELECT ubicacion from museos where nom_museo='$nom_museo'";
$selectexe=mysqli_query($conexionBBDD,$select) or die ("la SELECT es erronea"."".mysqli_error($conexionBBDD));
$antiguo=mysqli_fetch_row($selectexe);
/* echo $antiguo[0]; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar datos de museos</title>
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title" >DATOS MODIFICADOS DEL MUSEO</h1>
    <?php
    if($ubicacion!=$antiguo[0])
    {
        $update="UPDATE museos set ubicacion='$ubicacion' where nom_museo = '$nom_museo'";
        $updateexe=mysqli_query($conexionBBDD,$update);
    ?>
    <h2 id="title2"> La nueva ubicacion es <?php echo $ubicacion ?></h2>
    <?php
    }
    else
    { ?>
    <h2 id="title2"> No se ha modificado ningún valor</h2>
    <?php
    } ?>
</body>
</html>