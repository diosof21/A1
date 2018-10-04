//comprueba si un email es valido o no
<?php
$email = "diosof21@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
     echo '"' . $email . '" = Valido'."\n";
}
else 
{
     echo '"' . $email . '" = Invalido'."\n";
}
?>



