<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio24</title>
</head>
<body>
<?php
function cuentaVocales($texto)
{
    $contadorVocales = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if ($texto[$i] == "a" || $texto[$i] == "e" || $texto[$i] == "i" || $texto[$i] == "o" || $texto[$i] == "u") {
            $contadorVocales++;
        }
    }
    echo $contadorVocales;
    
}
echo "<p>Cuántas vocales hay en la frase: Hola me llamo alvaro</p>";
cuentaVocales("Hola me llamo alvaro");

?>
<br>
<a href="index.php" type="button">Volver al Inicio</a>
</body>
</html>