<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio23</title>
</head>
<body>
<?php
function media($num1, $num2, $num3, $num4) {
    $media = ($num1 + $num2 + $num3 + $num4) / 4;
    echo $media;
    
}
echo "<p>Calcula la media de los números 12, 53, 75, 23</p>";
media (12,53,75,23);

?>
<br>
<a href="index.php" type="button">Volver al Inicio</a>
</body>
</html>
