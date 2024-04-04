<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/estiloformularios.css">
</head>
<body>
        <h1 id="title">LOGIN</h1>    
        <form method="post" action="respuesta_login.php">
        <label class="labels" for="email">Email</label>
        <input type="text" class="field" id="email" name="Semail" required autocomplete="off">
        <br>
        <label class="labels" for="contrasena">Contraseña</label>
        <input type="password" class="field" id="contrasena" name="Scontrasena" required autocomplete="off">
        <br>
        <button class="boton" type="submit" value="enviar" name="Sboton">ENTRAR</button>
</body>
</html>