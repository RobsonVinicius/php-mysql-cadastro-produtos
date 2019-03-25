<?php include("include/cabecalho.php") ?>

<?php
  $nome = $_GET["nome"];  
  $preco = $_GET["preco"];
?>
 <p>Produto <?= $nome; ?>, <?= $preco ?> adicionado com sucesso!</p>

<?php include("include/cabecalho.php") ?>