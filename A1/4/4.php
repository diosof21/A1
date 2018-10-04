<!--<h3>Please input your name</h3>
<form action="$_SERVER['PHP_SELF']" method="POST">
    <input type='text' name='nombre'>
    <input type='button' value='Sumbit Name' onclick='4.php'>
</form>
<br>-->

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <label><p>Usuario</p><input type='text' name='usuario'></label>
            <input type='submit' value='envia'>   
        </form>
    </body>
</html>

//verificamos el nombre de un usuario en caso de ser correcto le saludamos
<?php

$nombre='dionis';

if(isset($_POST['usuario'])&&!empty($_POST['usuario'])){
    $usuario=$_POST['usuario'];
    if($usuario==$nombre){
        echo 'Hola '.$usuario;
    }else{
        echo 'Nombre incorrecto';
    }
}else{
    echo 'Introduce un nombre';
}

//$nombre='dionis';

/*if(isset($_POST['nombre'])&&!empty($_POST['nombre'])){
        //comprobamso que se ha selecionadpo un elemento
        if($_POST['nombre']==$nombre){
            echo 'Hola';
        }
    }*/



                
                

