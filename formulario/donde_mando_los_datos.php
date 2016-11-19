<?php
  require 'Conexion.php';
  echo "datos"."<br>".
  $_POST['nombre']."<br>".
  $_POST['login']."<br>".
  $_POST['telefono']."<br>".
  $_POST['email']."<br>".
  $_POST['rol']."<br>".
  $_POST['pass']."<br>";

$Nombre = trim($_POST['nombre']);
$Telefono=trim($_POST['telefono']);
$email=trim($_POST['email']);
$rol=trim($_POST['rol']);
$Password=trim($_POST['pass']);
//$rPass=trim($_POST['rPassword']);
$login=trim($_POST['login']);


  $sql="INSERT INTO usuario (nombre,login,telefono,rol,clave,email)VALUES ('$Nombre','$login','$Telefono','$rol','$Password','$email')";
  if(mysqli_query($con,$sql)){

  echo '<script language="javascript">alert("Ingreso el usuario");</script>';

  }else{
  echo '<script language="javascript">alert("No ingreso el usuario");</script>';
  	}
  	mysqli_close($con);

 ?>
