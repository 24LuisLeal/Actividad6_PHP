<?php
  $connection = mysqli_connect(
    "localhost",//Servidor local
    "root",//Usuario
    "",//Contraseña
    "bravo"//Nombre de la base de datos
  );
  mysqli_set_charset(
    $connection, //Argumentos para hacer la conexión
    "utf8"//Formato
  );
?>



