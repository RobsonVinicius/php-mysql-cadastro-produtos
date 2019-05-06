<?php 
  include("include/cabecalho.php"); 
  include("include/conexao.php"); 
  include('include/banco-produto.php'); 

  if(array_key_exists("removido, $_GET") && $_GET["removido"]==true) :
?>
  <p class="alert-success">Produto apagado com sucesso!</p>
<?php
  endif
?>

<table class="table table-striped table-bordered">
  <?php 
    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto) : 
  ?>
  <tr>
    <td><?= $produto['nome'] ?></td>
    <td><?= $produto['preco'] ?></td>
    <td>
      <a href="remove-produto.php?id=<?=$produto['id']?>" class="text-danger">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remover
      </a>
    </td>
  </tr>    
  <?php
    endforeach
  ?>
</table>

<?php
  include("include/rodape.php");
?>