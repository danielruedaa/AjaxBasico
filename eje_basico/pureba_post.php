<?php
require 'Conexion.php';

$Nombre = trim($_POST['nombre']);
$email=trim($_POST['email']);
$Password=trim($_POST['pass']);

echo $email;

$sel="SELECT * FROM usuario where email='$email'";

$ejecutar= mysqli_query($con,$sel);
$check_email=mysqli_num_rows($ejecutra);

if($check_email == 1 ){
  echo "<h2> el mail ya se encutera registrado utiliiza otro</h2>";
  exit();
}else{
  $insertar="INSERT INTO usuario (nombre,email,clave) VALUES ('$Nombre','$email','$Password')";
  $ejecutar=mysqli_query($con,$insertar);
  if ($ejecutar) {
    echo "<h2> Ingreso exitosamente</h2>";
  }
}

 ?>
