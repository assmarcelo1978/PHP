<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <div>
    <?php

    $preco = $_GET["p"];
    $aliquota = $_GET["a"];
    echo "O preço do produto é R$ " . number_format($preco, 2, ",", ".");
    $preco += ($preco * $aliquota / 100);
    echo "<h1> o preço adicionado é de R$ " . number_format($preco, 2, ",", ".") . " com $aliquota% de aumento";

    $preatual = $preco;
    echo "<br> ==>" . $preatual;
    echo "<br> ==>" . $preco . "<br>";
    $atual = $_GET["aa"];
    echo "<h2> O ano atual é " . $atual--;
    echo "<h2> O ano anterior é " . $atual;
    echo "<br>O preço do produto é R$ " . $preco . "e" . $preatual;
    echo "------------- <br>";
    echo $preatual . "<br>";
    echo $preco . "<br>";

    $maior = $aliquota < 10 ? $preatual - 5000 : $preatual + 5000;
    echo "<BR>" . $maior;
    /*$n1 = $_GET["x"];
    $n2 = $_GET["y"];
    echo "<h1>Valores Recebidos:  $n1 e $n2 </h1>";
    echo "o Valor absoluto de $n2 e " . abs($n2)

    //echo "$valordasoma = $n1 e $n2"

    /*$valordadivisao = $n2 / $n1;
    $luc = ($valordasoma * 3) / $n2;
    echo "<h1>Valores somado:  $valordasoma e $valordadivisao é o valor dividido </h1>";
    echo "<h1>Loucura é $luc </h1>";*/

    ?>

  </div>


</body>

</html>