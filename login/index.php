<?php
session_start();
if (!isset($_SESSION['user'])) {
  # code...
  header("location:login.php");
}
echo "<h1 aling=center>Bienvenido usuario:'.$_SESSION['user'].'</h1>";
echo "<p aling=center><a href='logout.php'>Logout</a></p>";
 ?>
<p aling=center><a href='logout.php'>Logout</a></p>
 <h1 aling=center>Bienvenido usuario: .$_SESSION['user']. </h1>
