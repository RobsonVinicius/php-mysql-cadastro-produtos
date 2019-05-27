<?php 
  function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id) {     
    $query = "insert into produtos (nome, preco, descricao, categoria_id) values ('{$nome}', {$preco},'{$descricao}', {$categoria_id}"; 
    $resultadoDaInsercao = mysqli_query($conexao, $query);     
    return $resultadoDaInsercao;
  }

  function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos");

    while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
    }
    return $produtos;
  }

  function removeProduto($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
  }