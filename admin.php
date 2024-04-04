<?php
session_start();
if(isset($_SESSION['activa']))
{ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estiloformularios.css">
</head>
<body>
    <h1 id="title">BBDD</h1>
    <h2 id="title">MUSEOS</h2>
    <br>
    <a href="BBDD/museos/p_alta_museos.php" class="indexopcion">peticion ALTA MUSEO</a>
    <br>
    <!-- <a href="BBDD/museos/r_alta_museos.php">respuesta ALTA MUSEO</a>
    <br> -->
    <br>
    <a href="BBDD/museos/p_baja_museos.php" class="indexopcion">peticion BAJA MUSEO</a>
    <br>
   <!--  <a href="BBDD/museos/r_baja_museos.php">respuesta BAJA MUSEO</a>
    <br> -->
    <br>
    <a href="BBDD/museos/p_ver_museos.php" class="indexopcion">peticion VER MUSEO</a>
    <br>
    <!-- <a href="BBDD/museos/r_ver_museos.php">respuesta VER MUSEO</a>
    <br> -->
    <br>
    <a href="BBDD/museos/p_modificar_museos.php" class="indexopcion">peticion MODIFICAR MUSEO</a>
    <br>
    <!-- <a href="BBDD/museos/r_modificar_museos.php">respuesta MODIFICAR MUSEO</a>
    <br>
    <a href="BBDD/museos/r2_modificar_museos.php">respuesta MODIFICAR MUSEO FINAL</a> -->
    <br>
    <h2 id="title">OBRAS DE ARTE</h2>
    <br>
    <a href="BBDD/obras_arte/p_id_alta_obra.php" class="indexopcion">peticion ALTA OBRA</a>
    <br>
    <!-- <a href="BBDD/obras_arte/r_id_alta_obra.php">respuesta ALTA OBRA</a> -->
    <!-- <br>
    <a href="BBDD/obras_arte/r_id_alta_obra_final.php">respuesta FINAL ALTA OBRA</a>
    <br> -->
    <br>
    <a href="BBDD/obras_arte/p_id_baja_obra.php" class="indexopcion">peticion BAJA OBRA</a>
    <br>
    <!-- <a href="BBDD/obras_arte/r_id_baja_obra.php">respuesta BAJA OBRA</a>
    <br>
    <a href="BBDD/obras_arte/r_id_baja_obra_final.php">respuesta FINAL BAJA OBRA</a>
    <br> -->
    <br>
    <a href="BBDD/obras_arte/p_modificacion_obras.php" class="indexopcion">peticion MODIFICACION OBRA</a>
    <br>
    <!-- <a href="BBDD/obras_arte/r_modificacion_obras.php">respuesta MODIFICACION OBRA</a>
    <br> -->
    <br>
    <a href="BBDD/obras_arte/p_visualizacion_obra.php" class="indexopcion">peticion VISUALIZACION OBRA</a>
    <br>
    <!-- <a href="BBDD/obras_arte/r_visualizacion_obra.php">respuesta VISUALIZACION OBRA</a>
    <br>
    <br> -->
    <!-- <br>
    <a href="BBDD/ajax/p_buscar_ajax.html">peticion AJAX VISUALIZACION OBRAS</a> -->
    <!-- <a href="BBDD/ajax/r_click_buscar_ajax.php">CLICK AJAX VISUALIZACION OBRAS</a> -->
   <!--  <a href="BBDD/obras_arte/r_modificacion_obras.php">respuesta FINAL BAJA OBRA</a> -->
</body>
</html>
<?php
}?>