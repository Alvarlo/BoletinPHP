<?php
function media($num1, $num2, $num3, $num4)
{
    $media = ($num1 + $num2 + $num3 + $num4) / 4;
    echo $media;
}
function cuentaVocales($texto)
{
    $contadorVocales = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if ($texto[$i] == "a") {
            $contadorVocales++;
        } elseif ($texto[$i] == "e") {
            $contadorVocales++;
        } elseif ($texto[$i] == "i") {
            $contadorVocales++;
        } elseif ($texto[$i] == "o") {
            $contadorVocales++;
        } elseif ($texto[$i] == "u") {
            $contadorVocales++;
        }
    }
    echo $contadorVocales;
}

function cuadrado($caracter, $numero){
    for ($i = 0; $i < $numero; $i++) {
        
        for ($j = 0; $j < $numero; $j++) {
        echo $caracter;
        }
        echo "<br>";
    }
}

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
    