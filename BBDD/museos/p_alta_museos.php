<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peticion alta museo</title>
    <link rel="stylesheet" href="../../css/estiloformularios.css">
</head>
<body>
    <h1 id="title">Formulario de alta de museo</h1>
    <form method="post" action="r_alta_museos.php">
        <label class="label" for="nom_museo"></label>
        <input type="text" class="field" id="nom_museo" placeholder="Nombre Museo" name="Snom_museo" required autocomplete="off">
        <br>
        <label class="label" for="ubicacion"></label>
        <input type="text" class="field" id="ubicacion" placeholder="Ubicacion" name="Subicacion" required autocomplete="off">
        <br>
        <button class="boton" type="submit" value="enviar" name="Sboton">Enviar Alta</button>
    </form>
</body>
</html>