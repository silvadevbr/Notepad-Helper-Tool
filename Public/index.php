<?php
  require_once "../vendor/autoload.php"; //carrega as informações de namespaces

  $route = new \App\Route; //Instancia a classe Route para configurar as rotas

  echo("Está funcionando!");
  print_r($route->getUrl());


?>

