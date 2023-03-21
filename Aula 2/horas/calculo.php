<?php

$horas = $_GET["horas"];
$valor = $_GET["valor"];
$desconto = $_GET["desconto"];

if($horas != "" && $valor != "" && $desconto != ""){

$salario = $horas * $valor - $desconto;

echo "O seu salário é: $salario";
}else{
    echo "Atenção, Insira todos valores!";
    
}

?>