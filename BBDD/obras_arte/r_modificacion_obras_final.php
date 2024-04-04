<?php
session_start();
if(isset($_SESSION['activa']))
{ 
include('../../conexion/conexion.php');
$fecha=$_POST['Sf_realizacion'];
/* echo "<br>";
echo $fecha;
echo "<br>"; */
$idfinal=$_POST['Sid_obra'];
/* echo $isbnfinal; */
/* CON ESTA SELECT RECOJO LOS DATOS DEL PRINCIPIO */
$selectult="SELECT titulo,autor,f_realizacion,ruta from obras_arte where id_obra='$idfinal'";
$selectultexe=mysqli_query($conexionBBDD,$selectult) or die ("la SELECT INFO es erronea"."".mysqli_error($conexionBBDD));
$mostrar=mysqli_fetch_assoc($selectultexe);
/* echo $mostrar['autor'];
die(); */
/* AQUI RECOJO LOS DATOS NUEVOS DE FICHERO Y DE FECHA DE REALIZACION */
/* para ver como recojo si he pinchado o no */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
<?php
/* MARCO EL FLAG 0 */
$flag=0;
if(isset($_POST['Scheck']))
{
    /* echo "has chequeado"; */
    /* si has saleccionado hay un fichero que sacas al info por var_dump */
    /* var_dump($_FILES);
    die(); */
    $img_nombre=$_FILES['Sfichero']['name'];
    $img_ruta_temp=$_FILES['Sfichero']['tmp_name'];
    $img_tipo=$_FILES['Sfichero']['type'];
    $img_tamano=$_FILES['Sfichero']['size'];
    $img_error=$_FILES['Sfichero']['error'];
    $flag=1;
   /* FLAG1 PARA SABER QUE PASO POR AQUI Y RECOJO TODOS LOS DATOS DEL FICHERO */
}

/* SI EL PRECIO ES DIFERENTE Y RECOJO LOS DATOS DE FLAG 1, LO QUE SIGNIFICA QUE SON DIFERENTES LOS DATOS A LOS ANTERIORES */
    if($fecha!=$mostrar['f_realizacion'] and $flag==1)
    {
        $rutafichero="../../imgs_subidas/".$img_nombre;
        move_uploaded_file($img_ruta_temp,$rutafichero);
        unlink($mostrar['ruta']);
        $updatefechafichero="UPDATE obras_arte set f_realizacion='$fecha', ruta='$rutafichero',tipo='$img_tipo',tamano='$img_tamano' where id_obra= '$idfinal'";
        $updatefechaficheroexe=mysqli_query($conexionBBDD,$updatefechafichero) or die ("la UPDATE 2 CAMPOS es erronea"."".mysqli_error($conexionBBDD));
        ?>
        <a href="../../admin.php" id="indicevuelta">INDICE</a>
        <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
        <h2 class="h3respuesta2"> Se han modificado los dos valores</h2>
        <h3 class="h3respuesta2">El nuevo precio es <?php echo $fecha ?> y la nueva ruta de fichero es <?php echo $rutafichero?></h3>
        <?php
    }
        /* SIGNIFICA QUE LOS DATOS SON DIFERENTES A LOS ANTERIORES, FLAG=0 ME MARCA QUE LOS DATOS SON LOS ANTERIORES Y FLAG=1 HA RECOGIDO LOS DATOS NUEVOS */
    elseif($flag==1)
    { 
        $rutafichero="../../imgs_subidas/".$img_nombre;
        move_uploaded_file($img_ruta_temp,$rutafichero);
        unlink($mostrar['ruta']);
        $updatefichero="UPDATE obras_arte set ruta='$rutafichero',tipo='$img_tipo',tamano='$img_tamano' where id_obra= '$idfinal'";
        $updateficheroexe=mysqli_query($conexionBBDD,$updatefichero) or die ("la UPDATE FICHERO es erronea"."".mysqli_error($conexionBBDD));
        ?>
        <a href="../../admin.php" id="indicevuelta">INDICE</a>
        <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
        <h2 class="h3respuesta2"> Se ha modificado el fichero</h2>
        <h3 class="h3respuesta2">La nueva ruta de fichero es <?php echo $rutafichero?></h3>
    <?php
    } 
    elseif($fecha!=$mostrar['f_realizacion'])
    { 
        
        $updatefecha="UPDATE obras_arte set f_realizacion='$fecha' where id_obra= '$idfinal'";
        $updatefechaexe=mysqli_query($conexionBBDD,$updatefecha) or die ("la UPDATE PRECIO es erronea"."".mysqli_error($conexionBBDD));
        ?>
            <a href="../../admin.php" id="indicevuelta">INDICE</a>
            <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
            <h2 class="h3respuesta2"> Se ha modificado la fecha</h2>
            <h3 class="h3respuesta2">La nueva fecha es <?php echo $fecha?></h3>
        <?php
        } 
        else
        { ?>
            <a href="../../admin.php" id="indicevuelta">INDICE</a>
            <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
            <h2 class="h3respuesta2">No se ha modificado ningún valor</h2>
        <?php
        }
} ?>