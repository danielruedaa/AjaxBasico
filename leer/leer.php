<?php
$file =file_get_contents("datos.json");///archvo donde estan los datos
$file=json_decode($file);// decodificamos para usarlos

print $file->{$_GET['dato']}; //por url asi http://localhost/grafica/Ajax/leer/leer.php?dato=edad

//print $file->{$_POST['dato']};

 ?>
