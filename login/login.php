<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="miscript.js"></script>
    <style type="text/css">
        /*escritorio*/

        @media(min-width: 1200px) {
            body {
                color: green;
            }
        }
        /*table escritorio pequeño*/

        @media(min-width: 768px)and(max-width: 979px) {
            body {
                color: green;
            }
        }
        /*tablet o smartphone*/

        @media(max-width: 767px) {
            body {
                color: blue;
            }
        }
        /*smartphone*/

        @media(max-width: 480px) {
            body {
                color: yellow;
            }
        }

        @media (max-width: 500px) {
            /*#general{margin:auto; margin-top:5px;width:200px; height:200px;  background:#0CF}*/
            .general {
                position: absolute;
                width: 200px;
                height: 200px;
                left: 100px;
                top:
            }
            */
        }
    </style>
    <title>Inicio </title>

</head>

<div class="text-center">
    <h1>Bienvenido </h1>
</div>
<title>inicio</title>

<?php
session_start();
if(isset($_SESSION['user'])){
  header("location:index.php");
}else{

}
 ?>


<body>

    <FORM method="POST">
        <!--  poner un campo para ingresar datos -->

        <div class="container">
            <div class="text-center">
                <h2>login</h2>
                <table id="prueba" class="table">

                    <tr>
                        <td class="text-center">email: </td>
                        <td class="text-center"><input type="text" name="email" id="email" value="" placeholder="carlos@hotmail.com" required="required"> </td>
                        <!--   -->
                    </tr>
                    <td class="text-center">clave:</td>
                    <td class="text-center"> <input type="password" name="Password" id="pass" value="" placeholder="*********" required="required"> </td>
                    <!--   -->
                    </tr>
                    <td class="text-center">

                    </td>
                    <!-- poner un boton de enviar   -->
                    <td class="text-center">
                        <input type="button" name="login" id="login" value="Login">
            </div>
    </form>

    </table>
    </div>
    </div>
    </div>
    </div>

</body>

</html>
