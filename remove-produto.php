<?php 
  include("include/cabecalho.php");
  include("include/conexao.php");
  include("include/banco-produto.php");

  $id = $_GET['id'];
  removeProduto($conexao, $id);
  header("Location: produto-lista.php?removido=true");
  die();
?>