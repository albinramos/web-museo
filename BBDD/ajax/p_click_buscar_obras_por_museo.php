<?php
include('../../conexion/conexion.php');
$id_museo=$_GET['mandoid'];
/* echo $id_museo;
die(); */
$selectclickmuseo="SELECT ruta from obras_arte where id_museo=$id_museo";
/* echo $selectclickmuseo;
die(); */
$selectclickmuseoexe=mysqli_query($conexionBBDD,$selectclickmuseo) or die ("la SELECT CLICK es erronea"."".mysqli_error($conexionBBDD));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="iconos/style.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> <!-- Este fichero va siempre debajo de los CSS porque van a modificarlo -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.0.min.js" integrity="sha256-wZ3vNXakH9k4P00fNGAlbN0PkpKSyhRa76IFy4V1PYE=" crossorigin="anonymous"></script>
    <script src="js/prog.js"></script>
</head>
<body>
<header>
        <a href="/index.html" id="titulo">ArtFinder</a>
        <div id="iconos-hamburguesa">
            <span class="icon-menu"></span>
            <span class='icon-cancel'></span>
        </div>
    </header>
    <nav>
        <ul class="navsumario">
            <li class="linav"><a href="../../index.html" class="navapartados">INICIO</a></li>
            <li class="linav"><a href="../../buscar.html" class="navapartados">ARTFINDER</a></li>
            <li class="linav"><a href="#" class="navapartados">SOBRE NOSOTROS</a></li>
            <li class="linav"><a href="#" class="navapartados">CONTACTO</a></li>
        </ul>
    </nav>
<?php
while($click=mysqli_fetch_assoc($selectclickmuseoexe))
{?>
    <?php
    /* $arraymostrar=explode("/",$click['ruta']);
    $click['ruta']='./'.$arraymostrar[2].'/'.$arraymostrar[3]; */
    ?>
    <div class="contenedor_obras_museos">
        <img src="<?php echo $click['ruta']?>" id="imgmuseos">
    </div>
<?php
} ?>
 <footer>
        <h3 id="titulofooter">BUSCADOR DE OBRAS DE ARTE</h3>
        <div class="separadorfotos">
        </div>
        <div class="footercampos">
            <div class="campo1footer">
                <h4>
                    TEMÁTICAS
                </h4>
                <ul>
                    <li><p class="footerp">pintura</p></li>
                    <li><p class="footerp">escultura</p></li>
                    <li><p class="footerp">fotografía</p></li>
                    <li><p class="footerp">instalacones</p></li>
                </ul>
            </div>
            <div class="campo1footer">
                <h4>
                    CONTACTO
                </h4>
                <ul>
                    <li><p class="footerp">buscadorobrasarte@obrasarte.com</p></li>
                    <li><p class="footerp"><span class="icon-call"></span>923456789</p></li>
                </ul>
            </div>
            <div class="campo1footer">
                <h4>
                    ACTIVIDADES
                </h4>
                <ul>
                    <li><p class="footerp">visitas guiadas</p></li>
                    <li><p class="footerp">accesibilidad</p></li>
                    <li><p class="footerp">actividades con niños</p></li>
                    <li><p class="footerp">talleres</p></li>
                </ul>
            </div>
        </div>
    </footer>
    <span class="icon-keyboard_arrow_up" ></span>
</body>
</html>
</body>
</html>
