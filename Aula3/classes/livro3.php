<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Senhor dos aneis A Sociedade do Anel	</title>
</head>
<body>
    <?php 
        include_once 'livros.php';
    
    ?>    

<table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col"><h1>Dados do Livro</h1></th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td>ISBN: <?= $isbnlivro3?></td>
        </tr>
        <tr>   
            <td>Título: <?= $titulolivro3?></td>
        <tr>
            <td>Num. Páginas: <?= $nPaginasLivro3?></td>
        </tr>
        <tr>
            <td>Edição: <?= $NumEdicaoLivro3?></td>
        </tr>
        <tr>   
            <td>Editora: <?= $nomeeditora2?></td>
        <tr>
            <td>Autor: <a href="autor2.php"><?= $nomeautor2?></a></td>
        </tr>
        <tr>
            <td>Ano: <?= $anoPublicacaoLivro3?></td>
        </tr>   
        </tbody>
      </table>
      
      <button type="button" class="btn btn-secondary btn-sm" onclick="window.location.href='home.html'">Voltar</button>


</body>
</html>