<?php

$numero = $_GET["numero"];
$i = 0;

echo "Tabuada do $numero:<br>";

for($i; $i <= 10; $i++){
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}

?>