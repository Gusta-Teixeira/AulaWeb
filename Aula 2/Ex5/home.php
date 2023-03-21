<?php

    include_once 'funcoes.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    
    

    <form>
        <div class="form-group">
        <label for="numero1">Número 1</label>
        <input type="number" name="num1" value=<?=$num1?> class="form-control" required>
        <br>
        
        <div class="form-group">
        <label for="numero2">Número 2</label>
        <input type="number" name="num2" value=<?=$num2?> class="form-control" required>
        <br>
        <select class="custom-select custom-select-lg mb-3" name="calcular">
            <option value="somar" <?= ($calcular== 'somar')?'Selected':'';?>>somar</option>
            <option value="subtrair" <?= ($calcular== 'subtrair')?'Selected':'';?>>subtrair</option>
            <option option value="multiplicar" <?= ($calcular== 'multiplicar')?'Selected':'';?>>multiplicar</option>
            <option value="dividir" <?= ($calcular== 'dividir')?'Selected':'';?>>dividir</option>
        </select>
        <br><br>    
        <button type="submit" class="btn btn-primary btn-sm" value="calcular">Enviar</button>
        <script> alert("O Resultado é <?= $resultado?>") </script>
    </form>

</body>
</html>
