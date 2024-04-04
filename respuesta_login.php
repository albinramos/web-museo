<?php
include('conexion/conexion.php');
/* $_POST;
var_dump ($_POST); */
$email=$_POST['Semail'];
/* echo $email; */
$contrasena=$_POST['Scontrasena'];
/* echo $contrasena; */
$select="SELECT email, contrasena from administradores where email='$email' and contrasena ='$contrasena'";
$selectexe=mysqli_query($conexionBBDD,$select) or die ("La SELECT es erronea")."".mysqli_error($conexionBBDD);
$numfilas=mysqli_num_rows($selectexe);
/* echo $numfilas; */
if($numfilas == 1)
{
    session_start();
    $_SESSION['activa']='admin@admin.es';
    header('location:admin.php');
    /* echo "has acertado"; */
}
else
{
    header('location:login.php');
}
?>
