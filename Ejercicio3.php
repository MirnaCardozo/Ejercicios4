<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio3</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p>Algoritmo que pida dos numeros y sume todos los numeros que van desde el primero hasta el segundo.Comprobar que los valores sean correctos</p>
    <?php

$a=1;
$b= 20;
$suma=0;
for ($a;$a<=$b; $a++) {
  if ($a+$b ){
    echo "$a &nbsp";
    $suma=$suma+$a;
}
}
echo "<h4>La suma de los numeros es: $suma</h4>";
   ?>
  </body>
</html>
