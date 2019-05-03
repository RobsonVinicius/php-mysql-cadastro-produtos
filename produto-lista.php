<?php 
  include("include/cabecalho.php"); 
  include("include/conexao.php"); 
  include('include/banco-produto.php'); 
?>

<table class="table table-striped table-bordered">
  <?php 
    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto) : 
  ?>
  <tr>
    <td><?= $produto['nome'] ?></td>
    <td><?= $produto['preco'] ?></td>
  </tr>    
  <?php
    endforeach
  ?>
</table>

<?php
  include("include/rodape.php");
?>