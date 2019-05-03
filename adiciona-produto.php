<?php 
  include("include/cabecalho.php"); 
  include("include/conexao.php"); 
  include("include/banco-produto.php"); 

  $nome = $_GET["nome"];  
  $preco = $_GET["preco"];

  if(insereProduto($conexao, $nome, $preco)) {
?>

  <p class="alert-success">Produto <?=$nome;?>, <?=$preco;?> foi adicionado com sucesso!</p>

<?php 
  } else {
      $msg = mysqli_error($conexao);
?>

  <p class="alert-danger"> O produto <?=$nome;?>, não foi adicionado: <?= $msg ?> </p>

  <?php
    }  
  ?>

<?php include("include/rodape.php") ?>