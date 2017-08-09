<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio4</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p>Algoritmo que pida dos numeros y multiplique todos los numeros que van desde el primero hasta el segundo:</p>
    <?php
    $a=1;
    $b= 5;
    $producto=$a;
    for ($a;$a<=$b; $a++) {

        echo "$a &nbsp";
        $producto=$producto*$a;

    }
    echo "<h4>El producto de los numeros es: $producto</h4>";
       ?>

  </body>
</html>
