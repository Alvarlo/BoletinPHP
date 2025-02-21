<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include_once("funciones.inc.php");
    media(12,54,33,23);

    echo "<br>";
    cuentaVocales("Hola me llamo Alvaro");

    echo "<br>";
    cuadrado("#",10);

    echo "<br>";
    loteria(4,20);

    ?>
    <br>
    <a href="index.php" type="button">Volver al Inicio</a>

</body>

</html>