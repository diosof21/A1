//guardamos el contenido en variables concatenadas y lo sacamos a traves del echo
<?php
$texto="<p>Sample String : </p><br>";
                $texto.="<p>'Tomorrow I \'ll learn PHP global variables.'</p><br>";
                $texto.="<p>'This is a bad command : del c:\\*.*' </p><br>";
                $texto.='<p>Expected Output : </p><br>';
                $texto.='<p>Tomorrow I \'ll learn PHP global variables.</p><br>';
                $texto.='<p>This is a bad command : del c:\\*.* </p><br>';
                
                echo $texto;

