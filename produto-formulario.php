<?php 
  include("include/cabecalho.php");
  include("include/conexao.php");
  include("include/banco-categoria.php");

  $categorias = listaCategorias($conexao);
?>

  <h1>Formulário de Cadastro</h1>
  <form action="adiciona-produto.php" method="post">
    <table class="table">
      <tr>
        <td>Nome:</td>
        <td><input class="form-control" type="text" name="nome"/></td>
      </tr>
      <tr>
        <td>Preço</td>
        <td><input class="form-control" type="number" name="preco"/></td>
      </tr>
      <tr>
        <td>Descrição</td>
        <td><textarea class="form-control" name="descricao"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="checkbox" name="usado" value="true"> Usado
        </td>
      </tr>
      <tr>
        <td>Categorias</td>
        <td>
          <select class="form-control" name="categoria_id">
            <?php foreach($categorias as $categoria) : ?>
              <option value="<?= $categoria['id'] ?>">
                <?= $categoria['nome'] ?><br>
              </option>
            <?php endforeach ?>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Cadastrar"></td>
      </tr>
    </table>
  </form>

<?php include("include/rodape.php") ?>