//nos lee si la pagina esta en https o http y nos lo indica con un echo
<?php
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https';
}
else
{
echo 'http';
}
?>
