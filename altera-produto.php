<?php 
  include('include/cabecalho.php'); 
  include('include/conexao.php'); 
  include('include/banco-produto.php'); 
     
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $descricao = $_POST['descricao'];
  $categoria_id = $_POST['categoria_id'];
  if(array_key_exists('usado', $_POST)) {
    $usado = "true";
  } else {
    $usado = "false";
  }  

  if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) { 
?>

  <p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?>, <?= $descricao ?> foi alterado!</p>
  
  <?php
    } else { 
      $msg = mysqli_error($conexao);
  ?>
    
  <p class="alert-danger">O Produto <?= $nome; ?>, não foi alterado:  <?= $msg ?></p>

  <?php       
    }
  ?>
  
<?php include("rodape.php") ?>