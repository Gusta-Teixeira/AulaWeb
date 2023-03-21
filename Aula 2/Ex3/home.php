<?php

$matriz = array(
    array("Jhon", "30332211"),
    array("Bob", "20221212"),
    array("Clara", "98223311"),
    array("Linda", "44330293"),
    array("James", "38343321")
);

function imprimir_matriz($matriz) {
    $linhas = count($matriz);
    $colunas = count($matriz[0]);
    echo "Nome Telefone<br>";

    for ($i = 0; $i < $linhas; $i++) {
        for ($j = 0; $j < $colunas; $j++) {
            echo $matriz[$i][$j] . "\t";
        }
        echo "<br>";
    }
}

imprimir_matriz($matriz);

?>