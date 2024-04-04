<?php
session_start();
$_SESSION['navegar']='martes';
/* echo session_name();
echo"<br>";
echo session_id();
echo"<br>"; */
if(isset($_SESSION['navegar']))
{
    echo $_SESSION['navegar'];
    echo $_SESSION['dinero'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Estoy en la página 2</p>
    <a href="inicio_session.php">INICIO</a>
    <a href="pagina_1_session.php">PÁGINA 1</a>
    <a href="pagina_2_session.php">PÁGINA 2</a>
    <a href="cerrar_session.php">CERRAR SESION</a>
</body>
</html>
<?php
} ?>