<?php
session_start();
if(isset($_SESSION['activa']))
{ 
include('../../conexion/conexion.php');
$_POST;
$id_obra=$_POST['Sid_obra'];
/* echo $id_obra;
die(); */
$selectid="SELECT id_obra from obras_arte where id_obra='$id_obra'";
$selectidexe=mysqli_query($conexionBBDD,$selectid);
$numfilas=mysqli_num_rows($selectidexe);
/* echo $numfilas; */
$selectruta="SELECT id_obra, ruta from obras_arte where id_obra='$id_obra'";
$selectrutaexe=mysqli_query($conexionBBDD,$selectruta) or die ("la SELECT RUTA está mal"."".mysqli_error($conexionBBDD));
$mostrar=mysqli_fetch_assoc($selectrutaexe);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISUALIZACION OBRAS</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">VISUALIZADOR OBRA</h1>
    <a href="../../admin.php" id="indicevuelta">INDICE</a>
    <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
    <?php
    if($numfilas==1)
    { ?>
        <div id="envolverimg">
                <a href="r2_visualizacion_obra.php?mid_obra=<?php echo $mostrar['id_obra'] ?>">
                <div id="envolverimg">
                    <img id="foto" src="<?php echo $mostrar['ruta']?>">
                </div>
                </a>
        <?php
        }
        else
        { ?>
        <h2 class="h3respuesta2"> La ID no <?php echo $id_obra ?> está registrada</h2>
        <?php
        } ?>
</body>
</html>
<?php
} ?>