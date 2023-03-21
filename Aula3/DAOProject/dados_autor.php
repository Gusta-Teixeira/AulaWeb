<?php 

require_once("base.php");
require_once(DIR_BASE.DIRECTORY_SEPARATOR."DAO".DIRECTORY_SEPARATOR."pessoa_dao.php");
$autor = NULL; 
if (isset($_GET['id'])){
  $autorDAO = new AutorDAO();
  $autor = $autorDAO->getAutorPorId($_GET['id']);
  if($autor == NULL){
    echo "Autor não encontrado!";
    die(); # Redirecionar para uma página de erro! 
  }
}

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
<h4>Dados do autor </h4>
</div>

<dl class="row">
  <dt class="col-sm-3" style="padding-left: 70px">Id</dt>
  <dd class="col-sm-9"><?php echo $autor->getId();?></dd>
  <dt class="col-sm-3" style="padding-left: 70px">Nome</dt>
  <dd class="col-sm-9"><?php echo $autor->getNome();?></dd>

  <dt class="col-sm-3" style="padding-left: 70px">Email</dt>
  <dd class="col-sm-9"><?php echo $autor->getEmail();?></dd>
  <dt class="col-sm-3" style="padding-left: 70px">Website</dt>
  <dd class="col-sm-9"><?php echo $autor->getWebSite();?></dd>
</dl>
<div style="text-align: center;">
<button type="button" onclick="location.href='listar_Autores.php'"class="btn btn-light">Voltar</button>
</div>
<body>
<html>
