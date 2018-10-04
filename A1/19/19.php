//indica la url al completo
<?php
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $full_url."\n";
?>

