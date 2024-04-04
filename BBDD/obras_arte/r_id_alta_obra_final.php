<?php
session_start();
if(isset($_SESSION['activa']))
{
include('../../conexion/conexion.php');
$_FILES;
/* var_dump($_FILES);
echo"<br>";
die(); */
$img_nombre=$_FILES['Simg']['name'];
/* echo $img_nombre;
echo"<br>"; */
$img_tipo=$_FILES['Simg']['type'];
/* echo $img_tipo;
echo"<br>"; */
$img_ruta_temp=$_FILES['Simg']['tmp_name'];
/* echo $img_ruta_temp;
echo"<br>"; */
$img_tamano=$_FILES['Simg']['size'];
/* echo $img_tamano;
echo"<br>"; */
$img_error=$_FILES['Simg']['error'];
/* echo $img_error; */
$rutabbdd="../../imgs_subidas/".$img_nombre;
/* echo"<br>";
echo $rutabbdd; */
/* die(); */
/* MUEVE EL FICHERO DE TEMPORAL A TU CARPETA */
move_uploaded_file($img_ruta_temp,$rutabbdd);
$id_museo=$_POST['Sid_museo'];
$id_obra=$_POST['Sid_obra'];
$tituloobra=$_POST['Stitulo'];
$autorobra=$_POST['Sautor'];
$f_realizacion=$_POST['Sf_realizacion'];
$insert="INSERT INTO obras_arte (id_obra,titulo,autor,f_realizacion,ruta,tipo,tamano,id_museo) values ('$id_obra','$tituloobra','$autorobra',
'$f_realizacion','$rutabbdd','$img_tipo','$img_tamano','$id_museo')";
/* echo $insert; */
$insertexe=mysqli_query($conexionBBDD,$insert) or die ("la INSERT no se ha hecho bien"."".mysqli_error($conexionBBDD));
/* echo $insertexe; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALTA OBRA DE ARTE</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">ALTA DE OBRAS DE ARTE</h1>
    <a href="../../admin.php" id="indicevuelta">INDICE</a>
    <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
    <section class=seccionrespuesta>
        <h2>Los datos de la obra con identificador <span><?php echo $id_obra?></span> se han integrado correctamente</h2>
        <h3 class="h3respuesta">Los datos son:</h3>
            <ul id="listadorespuesta">
                <li>TITULO: <br><?php echo $tituloobra?></li>
                <li>AUTOR: <br><?php echo $autorobra?></li>
                <li>FECHA DE REALIZACIÓN: <br><?php echo $f_realizacion?></li>
                <li>RUTA: <br><?php echo $rutabbdd?></li>
                <li>TIPO: <br><?php echo $img_tipo?></li>
                <li>TAMAÑO: <br><?php echo $img_tamano?></li>
                <li>ID MUSEO: <br><?php echo $id_museo?></li>
            </ul>
    </section>
</body>
</html>
<?php
} ?>