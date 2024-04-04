<?php
session_start();
if(isset($_SESSION['activa']))
{ 
include('../../conexion/conexion.php');
$ver=$_GET['mid_obra'];
/* echo $ver; */
$select="SELECT mu.nom_museo,ob.id_obra,ob.titulo,ob.autor,f_realizacion from museos mu inner join obras_arte ob on mu.id_museo = ob.id_museo where ob.id_obra = '$ver'";
$selectexe=mysqli_query($conexionBBDD,$select) or die ("la SELECT es erronea"."".mysqli_error($conexionBBDD));
$mostrarinfo=mysqli_fetch_assoc($selectexe);
/* var_dump ($mostrarinfo);
 */
$fechaordenada=date_format(date_create($mostrarinfo['f_realizacion']),'d/m/y');
?>
<!DOCTYPE html>
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
<a href="../../admin.php" id="indicevuelta">INDICE</a>
<a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
    <div class="ul_li_orden">
        <ul id="ul_libros_ver">
        <li class="lis"><?php echo $mostrarinfo['id_obra'] ?></li>

            <li class="lis"><?php echo $mostrarinfo['autor'] ?></li>

            <li class="lis"><?php echo $mostrarinfo['titulo'] ?></li>

            <li class="lis"><?php echo $fechaordenada?></li>
            <!-- RECOJO CON EL CONTADOR INICIAL EL NOMBRE DE LA EDITORIAL -->
            <li class="lis"><?php echo $mostrarinfo['nom_museo'] ?></li>
        </ul>
    </div>
</body>
</html>
<?php
} ?>