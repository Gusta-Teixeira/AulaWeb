<?php

$numeros = array(10, -3, 5, -1, -8, 8, 1, 7, 3, -8);
print_r($numeros);
echo "<br>";
analisar_vetor($numeros);


function analisar_vetor($numeros) {
    $negativos = 0;
    $positivos = 0;
    $pares = 0;
    $impares = 0;
    
    foreach ($numeros as $numero) {
        if ($numero < 0) {
            $negativos++;
        } elseif ($numero > 0) {
            $positivos++;
        }
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }
    
    echo "<br>Negativos: $negativos<br>";
    echo "Positivos: $positivos<br>";
    echo "Pares: $pares<br>";
    echo "Ímpares: $impares<br>";
}



?>