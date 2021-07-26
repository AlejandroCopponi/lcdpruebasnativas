<?php

$host='localhost';
$userMySQL ='root' ;
$passwordMySQL= '';
$bbdd='lcd_contacto';

// @$conexion = mysqli_connect($host,$userMySQL,$passwordMySQL,$bbdd) or exit("Error en la conexion.");
@$conexion = mysqli_connect($host,$userMySQL,$passwordMySQL,$bbdd) or die("<p class='alert alert-danger'>Error en la conexion.<br>" . mysqli_connect_error());

?>