<!--ESTA PAGINA ES PARA LA FUNCION KEYUP -->
<?php
include('../../conexion/conexion.php');
$envio=$_POST['recogida'];
$selectkeyup="SELECT id_obra,ruta from obras_arte where titulo like '$envio%'";
$selectkeyupexe=mysqli_query($conexionBBDD,$selectkeyup) or die ("la SELECT KEYUP está mal"."".mysqli_error($conexionBBDD));
?>
<?php
while($keyup=mysqli_fetch_assoc($selectkeyupexe))
    { ?>
    <li>
        <!-- CON ESTE EXPLODE RECORTO LA RUTA PARA ACCEDER A LAS IMAGENES PORQUE SINO NO ME VA A ENCONTRAR LAS FOTOS NUNCA -->
    <?php
    $arraymostrar=explode("/",$keyup['ruta']);
    /* var_dump($arraymostrar); */
    $keyup['ruta']='./'.$arraymostrar[2].'/'.$arraymostrar[3];
    ?>
        <img src="<?php echo $keyup['ruta']?>" style="cursor: pointer" id="imagenajax">
    
    <p class="datos" data-id_obra="<?php echo $keyup['id_obra']?>"></p>
    </li>
    <?php
    }?>
<?php
?>
<!-- ENVIO POR GET A OTRA PAGINA LA RUTA Y EL ISBN PARA RECOGER DATOS MEDIANTE UN HREF A OTRA PAGINA -->