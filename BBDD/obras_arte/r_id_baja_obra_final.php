<?php
session_start();
if(isset($_SESSION['activa']))
{
include('../../conexion/conexion.php');
$id_obra_final=$_GET['mid_obra'];
/* echo $id_obra_final; */
$ruta=$_GET['mruta'];
/* echo $ruta; */
/* DELETE PARA BORRADO DE DATOS GENERALES */
$delete="DELETE from obras_arte where id_obra='$id_obra_final'";
$deleteexe=mysqli_query($conexionBBDD,$delete) or die ("el DELETE está mal"."".mysqli_error($conexionBBDD));
/* UNLINK PARA BORRAR LA IMAGEN DE LA CARPETA, TIENE QUE IR DESPUES DEL DELETE GENERAL */
unlink($ruta);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">Confirmación datos borrados</h1>
    <a href="../../admin.php" id="indicevuelta">INDICE</a>
    <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
    <section class="seccionrespuesta">
        <h2 class="h3respuesta2">Los datos de la obra con ID <span><?php echo $id_obra_final ?></span> han sido eliminados</h2>
    </section>
</body>
</html>
<?php
} ?>