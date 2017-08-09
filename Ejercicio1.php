<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio1</title>
  </head>
  <body>
    <div class="container">
      <p>Algoritmo que pida dos números y muestre todos los numeros pares que van desde el primero al segundo.Se debe controlar que los valores sean correctos</p>
      <?php
  $n=20;
  $b=40;
  $con=0;

  for ($i=$n; $i <=$b ; $i++) {
    if ($i%2==0) {
      echo "$i &nbsp";
    }
  }


    ?>
    </div>

  </body>
</html>
