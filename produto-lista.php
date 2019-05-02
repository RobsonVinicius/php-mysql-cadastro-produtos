<?php include("include/cabecalho.php"); ?>
<?php include("include/conecta.php"); ?>

<?php 
  $resultado = mysqli_query($conexao, "select * from produtos");
  while($produto = mysqli_fetch_assoc($resultado)) {
    echo $produto['nome'] . "<br/>";    
  }
?>

<?php include("include/rodape.php");