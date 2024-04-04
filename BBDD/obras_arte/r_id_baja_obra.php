<?php
session_start();
if(isset($_SESSION['activa']))
{
include('../../conexion/conexion.php');
$id=$_POST['Sid_obra'];
/* echo $id; */
/* primera select para sacar el ISBN */
$selectid="SELECT id_obra from obras_arte where id_obra='$id'";
$selectidexe=mysqli_query($conexionBBDD,$selectid) or die ("la SELECT no es correcta"."".mysqli_error($conexionBBDD));
$numFilas=mysqli_num_rows($selectidexe);
/* echo $numFilas;
die(); */
/* LA SEGUNDA SELECT ES PARA SACAR LOS NOMBRES DE LOS MUSEOS Y RECOGER SUS ID */
$select="SELECT oa.id_museo,oa.titulo,oa.autor,oa.f_realizacion,oa.ruta, mu.nom_museo from obras_arte oa inner join museos mu on oa.id_museo = mu.id_museo where oa.id_obra = '$id'";
$selectexe=mysqli_query($conexionBBDD,$select) or die ("la SELECT es erronea"."".mysqli_error($conexionBBDD));
$mostrarinfo=mysqli_fetch_assoc($selectexe);
/* var_dump ($selectexe); */
$fechaordenada=date_format(date_create($mostrarinfo['f_realizacion']),'d/m/y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAJA OBRA DE ARTE</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">Formulario de baja de obras de arte</h1>
    <a href="../../admin.php" id="indicevuelta">INDICE</a>
    <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
    <?php
        if($numFilas==1)
        { ?>
            <div class="ul_li_orden">
        <ul id="ul_libros_ver">
            <li class="lis"><?php echo $mostrarinfo['autor'] ?></li>

            <li class="lis"><?php echo $mostrarinfo['titulo'] ?></li>

            <li class="lis"><?php echo $fechaordenada?></li>
            <!-- RECOJO CON EL CONTADOR INICIAL EL NOMBRE DE LA EDITORIAL -->
            <li class="lis"><?php echo $mostrarinfo['nom_museo'] ?></li>
            <li class="lis"><?php echo $mostrarinfo['id_museo'] ?></li>
            <img src="<?php echo $mostrarinfo['ruta']?>">
        </ul>
    </div>
    <div id="botonfichero">
        <!-- ENVIO POR LINK EL ISBN Y LA RUTA PARA RECOGER EN LA SIGUIENTE PAGINA PORQUE NO TENGO FORMULARIOS -->
    <a href="r_id_baja_obra_final.php?mid_obra=<?php echo $id?>&mruta=<?php echo $mostrarinfo['ruta']?>" id="borrado">CONFIRMAR BORRADO</a>
    </div>

    <?php
    }
    else
    { ?>
        <h2 class="h3respuesta2"> La ID no <?php echo $id ?> está registrada</h2>
    <?php
    } ?>

</body>
</html>
<?php
} ?>
