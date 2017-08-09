<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio6</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p>Algoritmo que muestre la tabla de multiplicar de un numero cualquiera</p>
    <?php
$a=3;
$b=0;
$c=0;

for ($i=1; $i <=10 ; $i++) {
  $b++;
  $c=$a*$b;
  echo "<h4> $a'x'$b'='$c'</h4>";
}




     ?>

  </body>
</html>
