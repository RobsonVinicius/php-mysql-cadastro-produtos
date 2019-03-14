<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Praticando a sintaxe II - Funções</title>
</head>
<body>
  <?php 
    function somaArray($array) {
      $soma = 0;
      for ($i = 0; $i < sizeof($array); $i++) {
        $soma = $soma + $array[$i]; 
      }
      return $soma;
    }

    $numeros = array(3, 5, 7);
    $resultado = somaArray($numeros);

    echo $resultado;
  ?>

  
</body>
</html>