<?php 

require_once("base.php");
require_once(DIR_BASE.DIRECTORY_SEPARATOR."DAO".DIRECTORY_SEPARATOR."autor_dao.php");


$autorDAO = new AutorDAO();
$resultado = $autorDAO->getAutor();

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAO demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<br>
<div style="text-align: center;">
<h4>Listagem de Autores</h4>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  		foreach($resultado as $umAutor){ 
  	?>
    <tr>
      <th scope="row"><?php echo $umAutor->getId();?></th>
      <td><?php echo $umAutor->getNome();?></td>
      <td>@<?php echo $umAutor->getEmail();?></td>
      <td>@<?php echo $umAutor->getWebSite();?></td>
      <td><a href="dados_autor.php?id=<?php echo $umAutor->getId();?>">Ver</a></td>
    </tr>
	<?php }?>
    
  </tbody>
</table>
<body>
<html>
