<?php

@$dbhost = "localhost";  // indentificamos el Servidor donde nos conectamos
@$dbusuario = "root"; // aqui debes ingresar el nombre de usuario del SGDB para acceder a la base de datos
@$dbpassword = "Camaleon"; // password de acceso para el usuario con permisos sobre la base de datos
@$db = "phpdb";        // Seleccionamos la base con la cual trabajar
@$conn = mysqli_connect($dbhost, $dbusuario, $dbpassword, $db) or die("Error al conectarse a $db" . mysqli_error($conn));
$link = $conn;
/*
  if ($conn) {
  echo "te has conectado correctamente a la base de datos $db";
  } else {
  echo "hubo un problema al contarte al SGBD";
  }
 * 
 */
?>