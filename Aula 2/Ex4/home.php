<?php

function acimaDe50($pessoas) {
    foreach ($pessoas as $pessoa) {
        if ($pessoa['idade'] > 50) {
            echo "Nome: " . $pessoa['nome'] . " | Idade: " . $pessoa['idade'] . " | Cidade: " . $pessoa['cidade'] . "<br>";
        }
    }
}

function deGaspar($pessoas) {
    foreach ($pessoas as $pessoa) {
        if ($pessoa['cidade'] == "Gaspar") {
            echo "Nome: " . $pessoa['nome'] . " | Idade: " . $pessoa['idade'] . " | Cidade: " . $pessoa['cidade'] . "<br>";
        }
    }
}

function comABC($pessoas) {
    foreach ($pessoas as $pessoa) {
        $primeiraLetra = substr($pessoa['nome'], 0, 1);
        if ($primeiraLetra == 'A' || $primeiraLetra == 'B' || $primeiraLetra == 'C') {
            echo "Nome: " . $pessoa['nome'] . " | Idade: " . $pessoa['idade'] . " | Cidade: " . $pessoa['cidade'] . "<br>";
        }
    }
}

function maioresDe60Gaspar($pessoas) {
    foreach ($pessoas as $pessoa) {
        if ($pessoa['idade'] > 60 && $pessoa['cidade'] == "Gaspar") {
            echo "Nome: " . $pessoa['nome'] . " | Idade: " . $pessoa['idade'] . " | Cidade: " . $pessoa['cidade'] . "<br>";
        }
    }
}

$pessoas = array(
    array("nr" => 1, "nome" => "Bob", "idade" => 15, "cidade" => "Gaspar"),
    array("nr" => 2, "nome" => "Dylan", "idade" => 20, "cidade" => "Blumenau"),
    array("nr" => 3, "nome" => "Chris", "idade" => 50, "cidade" => "Blumenau"),
    array("nr" => 4, "nome" => "Anna", "idade" => 8, "cidade" => "Indaial"),
    array("nr" => 5, "nome" => "James", "idade" => 65, "cidade" => "Gaspar"),
    array("nr" => 6, "nome" => "Mary", "idade" => 81, "cidade" => "Gaspar"),
    array("nr" => 7, "nome" => "John", "idade" => 36, "cidade" => "Indaial")
);

echo "Pessoas acima de 50 anos:<br>";
acimaDe50($pessoas);
echo "<br>Pessoas da cidade de Gaspar:<br>";
deGaspar($pessoas);
echo "<br>Pessoas que começam com as letras A, B ou C:<br>";
comABC($pessoas);
echo "<br>Pessoas maiores de 60 anos da cidade de Gaspar:<br>";
maioresDe60Gaspar($pessoas);



?>