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