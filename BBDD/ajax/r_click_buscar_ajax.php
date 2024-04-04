<?php
include('../../conexion/conexion.php');
$id_obra=$_POST['mandoid'];
/* echo $isbn; */
$selectclick="SELECT id_obra,titulo,autor,f_realizacion,ruta from obras_arte where id_obra='$id_obra'";
$selectclickexe=mysqli_query($conexionBBDD,$selectclick) or die ("la SELECT CLICK es erronea"."".mysqli_error($conexionBBDD));
?>
<?php
while($click=mysqli_fetch_assoc($selectclickexe))
{?>
    <!-- <li><?php echo $click['id_obra']?></li> -->
    <li>Titulo: <?php echo $click['titulo']?></li>
    <li>Autor: <?php echo $click['autor']?></li>
    <?php
    /* $fechaordenada=date_format(date_create($click['f_realizacion']),'d/m/y'); */
    /* DE ESTA FORMA COJO EL AÑO SOLAMENTE DE LA FECHA PARA SOLOMANETE MOSTRAR ESE DATO */
    $fecha = $click['f_realizacion'];
    /* echo $fecha; */
    $fechados=strtotime($fecha);
    /* CON LA Y EN MAYUSCULA ME SALEN LOS 4 DIGITOS DEL AÑO */
    $anio=date("Y",$fechados);
    /* echo $anio;
    die(); */
    ?>
    <li>Año de realización: <?php echo $anio?></li>
    <!-- CON ESTE EXPLODE RECORTO LA RUTA PARA ACCEDER A LAS IMAGENES PORQUE SINO NO ME VA A ENCONTRAR LAS FOTOS NUNCA -->
    <?php
    $arraymostrar=explode("/",$click['ruta']);
    /* var_dump($arraymostrar); */
    $click['ruta']='./'.$arraymostrar[2].'/'.$arraymostrar[3];
    ?>
    <img src="<?php echo $click['ruta']?>">
<?php
} ?>