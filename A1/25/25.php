//cambiamos los valores de las variables
<?php
$n1 = 12;
$n2 = 21;

echo "<br>Los numeros antes del cambio son: <br>";
echo "Numero 1 =".$n1." y 2=".$n2;

$temp = $n1;
$n1 = $n2;
$n2 = $temp;
 
echo "<br>Los numeros despues del cambio son: <br>";
echo "Numero 1 =".$n1." y 2=".$n2."<br>";
?>
