//nos divide el scheme el host y el path y lo sacamos fuera con el echo
<?php
$url = 'http://toni.cesnuria.com/php/php-basic-exercises.php';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."<br>";
echo 'Host : '.$url['host']."<br>";
echo 'Path : '.$url['path']."<br>";
?>

