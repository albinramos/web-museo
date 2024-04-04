<?php
include('../../conexion/conexion.php');
$id_museo=$_POST['Sid_museo'];
/* echo $nom_museo; */
$select="SELECT nom_museo,ubicacion from museos where id_museo = '$id_museo'";
$selectexe=mysqli_query($conexionBBDD, $select) or die ("la SELECT es erronea"."".mysqli_error($conexionBBDD));
$mostrar=mysqli_fetch_assoc($selectexe);
/* var_dump ($mostrar); */
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
    <h1 id="title" >DATOS DEL MUSEO</h1>
    <form method="post" action="r2_modificar_museos.php">
        <label class="field" for="id_museo">ID:</label>
        <input class="inputs" type="text" id="id_museo" readonly name="Sid" value="<?php echo $id_museo?>">
        <br>
        <label class="field" for="nom_museo">NOMBRE:</label>
        <input class="inputs" type="text" id="nom_museo" readonly name="Snombre" value="<?php echo $mostrar['nom_museo']?>">
            <!-- LOS PLACEHOLDER SOLO SON EN ALTAS Y CON REQUIRED -->
        <br>
        <label class="field" for="ubicacion">UBICACION:</label>
        <input class="inputs" type="text" id="ubicacion"  name="Subicacion" value="<?php echo $mostrar['ubicacion']?>">
        <br>
        <button class="boton" id="botonancho" type="submit" value="enviar" name="Sboton">ENVIAR MODIFICACIÓN</button>
</body>
</html>