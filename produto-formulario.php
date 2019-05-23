<?php include("cabecalho.php") ?>

  <h1>Formulário de Cadastro</h1>
  <form action="adiciona-produto.php">
    <table class="table">
      <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome"/></td>
      </tr>
      <tr>
        <td>Preço</td>
        <td><input type="number" name="preco"/></td>
      </tr>
      <tr>
        <td>Descrição</td>
        <td><textarea class="form-control" rows="3" name="descricao"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Cadastrar"></td>
      </tr>
    </table>
  </form>

<?php include("rodape.php") ?>