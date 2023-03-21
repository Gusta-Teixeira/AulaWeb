<?php

$numeros1 = array(10, -3, 5, -1, -8, 8, 1, 7, 3, -8);
echo "Primeiro";
print_r($numeros1);
echo "<br>";
echo "<br>";
echo "Segundo";
$numeros2 = array(-5, 10, -3, 8, -7, 12,0, -2, 4, -9);
print_r($numeros2);
echo "<br>";
echo "<br>";
echo "Terceiro";
$numeros3 = array();
print_r($numeros3);
echo "<br>";
echo "<br>";

somar_vetores($numeros1, $numeros2);


function somar_vetores($numeros1 , $numeros2) {
    return $numeros1 + $numeros2;  
}

$numeros3 = array_map('somar_vetores', $numeros1, $numeros2);

echo "Soma: ";
print_r($numeros3);

?>