<?php

$idade = ["1"];
$nome = $_GET["nome"];
$ano = $_GET["ano"];
$nome = empty($nome) ? $nome = "NOME Não inofrmado <BR> " : $nome = $_GET["nome"];

if (empty($ano)) {
  echo "Ano Não inofrmado <BR> ";
} else {
  $idade =  date("Y") - $ano;
  $sexo = $_GET["sexo"];
  echo " $nome é $sexo e tem " . $idade . " anos";
};




?>
<br>
<a href="index.html"> Voltar </a>