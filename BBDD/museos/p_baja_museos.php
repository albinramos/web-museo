<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETICION BAJA MUSEO</title>
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">Formulario de baja de un museo</h1>
    <form method="post" action="r_baja_museos.php">
        <label for="nom_museo"></label>
        <input class="field" type="text" id="nom_museo" placeholder="NOMBRE MUSEO" name="Snom_museo" required autocomplete="off">
        <br>
        <br>
        <button class="boton" type="submit" value="enviar" name="Sboton">Enviar Baja</button>
    </form>
</body>
</html>