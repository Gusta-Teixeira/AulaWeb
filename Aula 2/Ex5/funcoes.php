<?php

    $num1 = 0;
    $num2= 0;
    $resultado= 0;
    $calcular= 'somar';

    if (isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $calcular = $_GET['calcular'];
    }
        switch($calcular){
            case 'somar':
                $resultado = $num1 + $num2;
                break;
            case 'subtrair':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                $resultado = $num1 / $num2;
                break;                
        }


?>