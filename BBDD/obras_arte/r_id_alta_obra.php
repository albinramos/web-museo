<?php
session_start();
if(isset($_SESSION['activa']))
{ 
include('../../conexion/conexion.php');
$id_obra=$_POST['Sid_obra'];
/* echo $id_obra;
die(); */
/* primera select para sacar el ISBN */
$selectid="SELECT id_obra FROM obras_arte where id_obra='$id_obra'";
$selectidexe=mysqli_query($conexionBBDD,$selectid) or die ("la SELECT no es correcta"."".mysqli_error($conexionBBDD));
$numFilas=mysqli_num_rows($selectidexe);
/* LA SEGUNDA SELECT ES PARA SACAR LOS NOMBRES DE LAS EDITORIALES Y RECOGER SUS ID */
$select="SELECT nom_museo, id_museo FROM museos";
$selectexe=mysqli_query($conexionBBDD, $select) or die ("la SELECT no es correcta"."".mysqli_error($conexionBBDD));
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
    <!-- <link rel="stylesheet" href="../../css/estilosformularios.css"> -->
</head>
<body>
    <h1 id="title">Formulario de alta de obras de arte</h1>
    <a href="../../admin.php" id="indicevuelta">INDICE</a>
    <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
    <form id="forma2" method="post" action="r_id_alta_obra_final.php" enctype="multipart/form-data">
    <?php
    if($numFilas==0)
    {?>
        <!-- AQUI SI PUEDO PONER PLACEHOLDER PORQUE SON CAMPOS REQUIRED -->
        <label class="labels" for="id_obra"></label>
        <input type="text" class="field" readonly id="id_obra" name="Sid_obra" value="<?php echo $id_obra?>">
        <br>
        <br>
        <label class="labels" for="titulo"></label>
        <input type="text" class="field" id="titulo" placeholder="TITULO" name="Stitulo" required autocomplete="off">
        <br>
        <br>
        <label class="labels" for="autor"></label>
        <input type="text" class="field" id="autor" placeholder="AUTOR" name="Sautor" required autocomplete="off">
        <br>
        <label class="labels" for="f_realizacion">FECHA DE REALIZACIÓN:</label>
        <input type="date" class="field" id="f_realizacion" name="Sf_realizacion" required autocomplete="off">
        <br>
        <label class="labels" for="img_obra"></label>
            <input type="file" class="field" id="img_obra" value="ENVIAR" name="Simg" required autocomplete="off" accept="image/gif, image/jpg, image/jpeg">
        <br>
        <select name="Sid_museo" id="seleccion">
        <option value="" disabled selected>ELIJA MUSEO</option>
        <?php
        while($selectmostrar=mysqli_fetch_assoc($selectexe))
        { ?>
            <option value="<?php echo $selectmostrar['id_museo']?>"><?php echo $selectmostrar['nom_museo']?></option>;
        <?php
        } ?>
        </select>

        <button class="boton" type="submit" value="enviar" name="Sboton">ENVIAR ALTA OBRA</button>
        <?php
    } 
    else
    { ?>
    
        <h2 class="h3respuesta"> El identificador <span><?php echo $id_obra ?></span> ya está registrado</h2>
    <?php
    } ?>
    </form>
</body>
</html>
<?php
} ?>
