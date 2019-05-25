<?php 
  include("cabecalho.php");
  include("conecta.php"); 
  include("banco-produto.php");

  if(array_key_exists("removido", $_POST) && $_POST["removido"]==true) :
?>
  <p class="alert-success">Produto apagado com sucesso</p>
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
    <td><?= substr($produto['descricao'], 0, 15) ?></td>
    <td>
      <form action="remove-produto.php" method="post">
        <input type="hidden" name="id" value="<?= $produto['id'] ?>" />
        <button class="btn btn-danger">
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remover
        </button>
      </form>
    </td>
  </tr> 
  <?php
    endforeach
  ?>  
</table>

<?php include("include/rodape.php") ?>