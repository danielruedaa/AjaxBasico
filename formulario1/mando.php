<?php
require 'Conexion.php';
//validar pag http://fernando-gaitan.com.ar/aprendiendo-php-parte-18-validar-formularios/
$Nombre = trim($_POST['nombre']);
$Telefono=trim($_POST['telefono']);
$email=trim($_POST['email']);
$rol=trim($_POST['rol']);
$Password=trim($_POST['pass']);
$rPass=trim($_POST['rPassword']);
$login=trim($_POST['login']);

$sel="SELECT * FROM usuario where email='$email'";
$num=rand(0,15);
$ejecutar= mysqli_query($con,$sel);
$check_email=mysqli_num_rows($ejecutar);
$fila=mysqli_fetch_row($ejecutar);


if($check_email == 1 ){

  $mail1=explode("@",$fila[3]);
   $opcion_sugerida=$mail1[0].$num;
   $fin_correo=$mail1[1];
  echo '<script language="javascript">alert("Email no disponible sugerimos \n'.$opcion_sugerida."@".$fin_correo.'" );</script>';
  exit();
}else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $resultado = array('envio'=>'success',
                            'nombre' => $Nombre,
                            'telefono' => $Telefono,
                            'email' => $email,
                            'rol' => $rol,
                            'pass' => $Password,
                            'login' => $login,
         );
         $sql="INSERT INTO usuario (nombre,login,telefono,rol,clave,email)VALUES ('$Nombre','$login','$Telefono','$rol','$Password','$email')";
         if(mysqli_query($con,$sql)){
         echo '<script language="javascript">alert("Ingreso el usuario");</script>';
         }else{
         echo '<script language="javascript">alert("No ingreso el usuario");</script>';
           }
        echo json_encode($resultado);
      } else {
        echo '<script language="javascript">alert("no es valido \n'.$email.'" );</script>';
      }
    }


/*echo "<pre>";
print_r(json_encode($resultado));
echo "</pre>";*/
mysqli_close($con);
 ?>
