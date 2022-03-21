<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
  
  //$a = empty($_GET['ano']) ? $_GET['ano']:"ERRO!!!!";
  
  //$ano ="";
  
  //$a = (isset($_GET['ano'])) ? 1:0001;

  
  if(empty($_GET["ano"])) {
    $a = 'ERRO';
  }else{
    $a = $_GET["ano"];
    }
  
 
  
  echo $a;
  
  ?>

 </head>
 <body> 
    <div>
      <?php 
      echo $a;
      ?>


    </div>  

  </body>

</html>