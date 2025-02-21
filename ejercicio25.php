<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio25</title>
</head>
<body>
<?php
function cuadrado($caracter, $numero){
    for ($i = 0; $i < $numero; $i++) {
        
        for ($j = 0; $j < $numero; $j++) {
        echo $caracter;
        }
        echo "<br>";
    }
}
echo "<p>Haz un cuadrado de 8x8 con el símbolo #</p>";
cuadrado("#",8);
?>
<a href="index.php" type="button">Volver al Inicio</a>
</body>
</html>