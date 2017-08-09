<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio2</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p>Algoritmo que pida dos numeros y muestre todos los numeros impares que van desde el primero hasta el segundo.se debe controlar que los valores sean correctos</p>
    <?php
$a=1;
$b= 20;
for ($a;$a<=$b; $a++) {
  if ($a%2==1 ){
    echo "$a <br>";
  }

}

     ?>
  </body>
</html>
