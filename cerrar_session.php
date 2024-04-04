<?php
session_start();
if(isset($_SESSION['activa']))
{
    session_destroy();
    setcookie(session_name(),'',time()-1,'/');
    header('location:index.html');
}
?>

