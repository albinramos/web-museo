<?php
session_start();
if(isset($_SESSION['activa']))
{ 
include('../../conexion/conexion.php');
$id=$_POST['Sid_obra'];
/* echo $id;
die(); */
/* select para el id_obra */
$select="SELECT id_obra from obras_arte where id_obra='$id'";
$selectexe=mysqli_query($conexionBBDD,$select);
$numfilas=mysqli_num_rows($selectexe);
/* select para recoger los datos */
$selectinfo="SELECT titulo,autor,f_realizacion,ruta from obras_arte where id_obra='$id'";
$selectinfoexe=mysqli_query($conexionBBDD,$selectinfo) or die ("la SELECT INFO es erronea"."".mysqli_error($conexionBBDD));
$mostrar=mysqli_fetch_assoc($selectinfoexe);
/* var_dump($mostrar);
die(); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar ficheros</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="../../css/estiloformularios.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> <!-- Este fichero va siempre debajo de los CSS porque van a modificarlo -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.0.min.js" integrity="sha256-wZ3vNXakH9k4P00fNGAlbN0PkpKSyhRa76IFy4V1PYE=" crossorigin="anonymous"></script>
</head>
<body>
<script>
        $(document).ready(function()
        { $('#check').change(function()
            {
            if($('#check').is(':checked'))
            {
                $('#fichero').attr('disabled',false)
            }
            else
            {
                $('#fichero').attr('disabled',true)
            }
        })

        })
</script>
    <h1 id="title">MODIFICAR FICHERO E INFO OBRAS</h1>
    <a href="../../admin.php" id="indicevuelta">INDICE</a>
    <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
    <form id="forma2" method="post" action="r_modificacion_obras_final.php" enctype="multipart/form-data">
    <?php
    if($numfilas==1)
    {?>
        <label class="labels" for="id_obra"></label>
        <input type="text" class="field" readonly id="id_obra" name="Sid_obra" value="<?php echo $id?>">
        <br>
        <label class="labels" for="titulo"></label>
        <input type="text" class="field" id="titulo" name="Stitulo" readonly autocomplete="off" value="<?php echo $mostrar['titulo']?>" >
        <br>
        <label class="labels" for="autor"></label>
        <input type="text" class="field" id="autor" name="Sautor" readonly value="<?php echo $mostrar['autor']?>">
        <br>
        <label class="labels" for="f_realizacion"></label>
        <input type="date" class="field" id="f_realizacion"  name="Sf_realizacion" value="<?php echo $mostrar['f_realizacion']?>">
        <br>
        <!-- alt es un atributo sin un atributo la img no está definida -->
        <img src="<?php echo $mostrar['ruta']?>" alt="obra_arte">
        <h2>MODIFICAR</h2>
        <input type="checkbox" id="check" name="Scheck">
        <input type="file" id="fichero" name="Sfichero" disabled required>
        <br>
        <input type="submit" id="boton" value="modificar fichero" name="Sboton">
    <?php
    }
    else
    { ?>
    <a href="../../admin.php" id="indicevuelta">INDICE</a>
    <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
    <h2 class="h3respuesta"> La ID<span><?php echo $id ?></span> no está registrada</h2>
    <?php
    }?>
</body>
</html>
<?php
} ?>
