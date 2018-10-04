//relaizamos la tabla de multiplicar hasta llegar a 6 por 6
<?php
$i=6;
  for ($j = 1; $j < 7; $j++) {
     if ($j == 1) {
       echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
     } else {
       echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
     }
  
  echo "<br>";
}
?>



