<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sintaxe Básica II</title>
</head>
<body>

  <?php 

    function mostraConteudoArray($array) {
      for ($i= 0; $i < sizeof($array); $i++) {
        echo "Chave: " . $i . " | Valor " . $array[$i] . "<br>";
      }
    }

    $arrayMaluco = array(0, 1, "Maça", "Carro", 5, 7, "Curso php", 7, 9, "<br>");
    $numeros = array(1, 3, 8, 4, 5, 2, 7, "<br>");

    mostraConteudoArray($arrayMaluco);    
    mostraConteudoArray($numeros);

    
    // Outra função - Retornando valores para quem nos chamou no programa
    function somaDoisNumeros($n1, $n2) {
      $soma = $n1 + $n2;
      return $soma;
    }

    //numeros que serão somados
    $a = 70;
    $b = 80;
    // Chamando a função
    $resultado = somaDoisNumeros($a, $b);
    echo $resultado;
    
  ?>

</body>
</html>