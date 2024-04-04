<?php
include('../../conexion/conexion.php');
$select="SELECT id_museo, nom_museo from museos order by nom_museo";
$selectexe=mysqli_query($conexionBBDD, $select) or die ("la SELECT es erronea"."".mysqli_error($conexionBBDD));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VER INFO MUSEOS</title>
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">Ver Información del Museo</h1>
    <form method="post" action="r_ver_museos.php">
        <select name="Sid_museo" id="seleccion">
        <option id="option" value="" disabled selected>ELIJA MUSEO</option>
        <?php
        while($Mostrar=mysqli_fetch_assoc($selectexe))
        {?>
        /*un select siempre tiene dos opciones, la que se muestra y la que se recoge que está en el value*/
            <option value="<?php echo $Mostrar['id_museo']?>"><?php echo $Mostrar['nom_museo']?></option>;
            <?php
        } ?>
        </select>
        <button class="boton" type="submit" value="enviar" name="Sboton">ENVIAR</button>
    </form>
</body>
</html>