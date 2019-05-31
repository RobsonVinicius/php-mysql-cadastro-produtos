<?php 
  include("include/cabecalho.php");
  include("include/conexao.php");
  include("include/banco-categoria.php");
  include("include/banco-produto.php");
    
  $id = $_GET['id'];
  $produto = buscaProduto($conexao, $id);
  $categorias = listaCategorias($conexao);
  $usado = $produto['usado'] ? "checked='checked'" : "";
?>

  <h1>Alterando Produto</h1>

  <form action="altera-produto.php" method="post">
    <table class="table">
      <input type="hidden" name="id" value="<?= $produto['id'] ?>">
      <tr>
        <td>Nome:</td>
        <td><input class="form-control" type="text" name="nome" value="<?= $produto['nome'] ?>" /></td>
      </tr>
      <tr>
        <td>Preço</td>
        <td><input class="form-control" type="number" name="preco" value="<?= $produto['preco']?>" /></td>
      </tr>
      <tr>
        <td>Descrição</td>
        <td><textarea class="form-control" name="descricao"><?= $produto['descricao'] ?></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="checkbox" name="usado" <?= $usado ?> value="true"> Usado
        </td>
      </tr>
      <tr>
        <td>Categorias</td>
        <td>
          <select class="form-control" name="categoria_id">
            <?php 
              foreach($categorias as $categoria) : 
              $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
              $selecao = $essaEhACategoria ? "selected = 'selected'" : "";
            ?>
              <option value="<?= $categoria['id'] ?>" <?= $selecao ?>>
                <?= $categoria['nome'] ?><br>
              </option>
            <?php endforeach ?>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><button class="btn btn-primary btn-lg" type="submit">Alterar</button></td>
      </tr>
    </table>
  </form>

<?php include("include/rodape.php") ?>