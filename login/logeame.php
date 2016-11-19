<?php
session_start();
require 'Conexion.php';

if (isset($_POST['email'])&& isset($_POST['pass'])) {
  # code...
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $pass=mysqli_real_escape_string($con,$_POST['pass']);
  $sql="SELECT email FROM usuario WHERE (email='$email' or user='$email') AND pass='$pass'";
  $result=mysqli_query($con,$sql);
  $num_row=mysqli_num_rows($result);
  if ($num_row=='1') {
    # code...
      $data=mysqli_fetch_array($result);
      $_SESSION['user']=$data['email'];
      echo 1;
  } else {
    # code...
    echo "error no encontro datos";
  }
}else {
  echo "error variables vacias";
}
 ?>
