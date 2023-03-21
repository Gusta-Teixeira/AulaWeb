<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Autor 2</title>
</head>
<body>
<?php 
    include_once'livros.php';
    ?>

<table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col"><h1>Dados do Autor</h1></th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nome: <?= $nomeautor2?></td>
        </tr>
        <tr>   
            <td>Email: <?= $emailAutor2?></td>
        <tr>
            <td>WebSite: <?= $websiteAutor2?></td>
        </tr>
</table>
<button type="button" class="btn btn-secondary btn-sm" onclick="history.back()">Voltar</button>

</body>
</html>