<?php include("include/cabecalho.php") ?>

  <?php
    $nome = $_GET["nome"];  
    $preco = $_GET["preco"];

    $conexao = mysqli_connect('us-cdbr-iron-east-03.cleardb.net', 'bc71f90f15cc38', 'd8157d1c5f54a36 ', 'heroku_e5f79f34483698a');

    function insereProduto($conexao, $nome, $preco) {
      $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
      $resultadoDaInsercao = mysqli_query($conexao, $query);
      return $resultadoDaInsercao;
    }

    if(insereProduto($conexao, $nome, $preco)) {
  ?>

  <p class="alert-sucess">Produto <?=$nome;?>, <?=$preco;?> foi adicionado com sucesso!</p>

  <?php 
    } else {
  ?>

  <p class="alert-danger"> O produto <?=$nome;?>, não foi adicionado</p>

  <?php
    }  
  ?>

<?php include("include/rodape.php") ?>