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