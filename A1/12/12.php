//Indica el codigo de la pagina seleccionanda
<?php
$all_lines = file('https://edae12.com/');
foreach ($all_lines as $line_num => $line)
 {
 	echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
 }
?>

