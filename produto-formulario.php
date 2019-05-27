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
        <td>
          <?php
            foreach($categorias as $categoria) :
          ?>
          <input type="radio" name="categoria_id" value="<?= $categoria['id'] ?>"><?=$categoria['nome'] ?><br>
          <?php 
            endforeach
          ?>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Cadastrar"></td>
      </tr>
    </table>
  </form>

<?php include("include/rodape.php") ?>