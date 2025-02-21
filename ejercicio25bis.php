<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio25</title>
</head>
<body>
<?php
function loteria($bolasaExtraer,$numBolas){

$array = array();


for ($i = 0; $i < $bolasaExtraer; $i++) {
    $repetido = false;
    
    $num = mt_rand(1,$numBolas);

    foreach ($array as $valor) {
        if ($num == $valor){
            $repetido = true;
            break;
        }
    }

    if ($repetido){
        $i--;
    }else{
        $array[$i] = $num;
    }
   
}
print_r($array);
}
echo "<p>Si tenemos una lotería de 15 bolas, saca 4 aleatorias y dime los números</p>";
loteria(4,15);
?>
<a href="index.php" type="button">Volver al Inicio</a>
</body>
</html>