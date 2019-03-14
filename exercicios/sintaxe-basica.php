<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <!-- Onde fica -->
  <?php 
    // Isso é um comentário
  ?>

  <!-- Variáveis -->
  <?php 
    $curso = "Curso de php";
  ?>

  <!-- Imprimindo dados -->
  <?php 
    $curso = "Curso de php";
    echo $curso;
  ?>

  <!-- Condicionais -->
  <?php
    $numero = 10;
    if($numero > 5) {
      echo "Maior que 5!";
    } else {
      echo "Menor que 5";
    }
  ?>

  
  <!-- Repetições -->

  <!-- Repetições com for -->
  <?php
    for ($i=0; $i < 5; $i++) {
      echo "Laço de número: " . $i;      
    }
  ?>

  <!-- Repetições com while -->
  <?php 
    $condicao = 5;
    $i = 0;
    while ($i < $condicao) {
      echo "Laço de número: " . $i;
      $i++;
    }
  ?>


  <!-- Array -->

  <?php 
    $numeros = array(1, 3, 9, 4, 5, 8, 2, 6, 7, 0);
  ?>

  <!-- Exemplo de Aplicação de Array -->
  <?php 
    $numeros = array(1, 3, 9, 4, 5, 8, 2, 6, 7, 0);
    for ($i=0; $i < 10; $i++) {
      echo "Chave: " . $i . "Valor: " . $numeros[$i];
    }
  ?>

  <!-- O código acima irá verificar cada posição do array de 0 a 9, e irá imprimir a mensagem dizendo qual chave/valor estamos no array.

  Lembra que nós não dizemos qual tipo a variável será? Isso significa também que nosso array não tem tipo, e por isso podemos colocar quaisquer valores dentro do array, inclusive misturando-os: -->

  <?php 
    $arrayMisturado = array (0, 1, "carro", "casa", 4, 5, "Curso do php", 7, 8, 9);
  ?>


</body>
</html>