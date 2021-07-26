<?php
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $email =  $_POST['email'];
 $tel = $_POST['tel'];

$servername = "localhost";
$database = "lcd_contacto";
$username = "root";
$password = "";



 
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Problemas con el servidor: " . mysqli_connect_error());
}
 
 
$sql = "INSERT INTO datos_contactos VALUES (0,'$nombre', '$apellido', '$email', '$tel')";
if (mysqli_query($conn, $sql)) { 
      echo'<script type="text/javascript">
     
      window.location.href="index.html";
      
      swal("Hello world!");
      </script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>