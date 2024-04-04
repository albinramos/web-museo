<?php
session_start();
if(isset($_SESSION['activa']))
{ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDENTIFICADOR OBRA</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">COMPROBAR ID</h1>
    <a href="../../admin.php" id="indicevuelta">INDICE</a>
    <a href="../../cerrar_session.php"><i class='bx bx-log-out'></i></a>
    <form method="post" action="r_visualizacion_obra.php">
        <label class="labels" for="id_obra"></label>
        <input type="text" class="field" id="id_obra" placeholder="IDENTIFICADOR OBRA" name="Sid_obra" required autocomplete="off">
        <br>
        <button class="boton" type="submit" value="enviar" name="Sboton">COMPROBAR ID OBRA</button>
</body>
</html>
<?php
} ?>
