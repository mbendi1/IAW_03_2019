<?php
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $edad = $_POST["edad"];
  $email = $_POST["email"];
  $country = $_POST["country"];
  $checkin = $_POST["checkin"];
  $checkout = $_POST["checkout"];
  $deposito = $_POST["deposito"];
  $sexo = $_POST["sexo"];

  echo "Hola ". $apellidos;
  echo ", ". $nombre;
  echo ". Tiene usted ". $edad;
  echo " años, y su sexo es: ". $sexo;
  echo "<br>";
  echo "<br>";
  echo "Su dirección de correo electrónico es ". $email;
  echo " y es usted de ". $nacionalidad;
  echo "<br>";
  echo "<br>";
  echo "Su fecha de entrada es ". $checkin;
  echo " y su fecha de salida es ". $checkout;
  echo "<br>";
  echo "<br>";
  echo "Ha realizado un depósito por la reserva de la habitación de ". $deposito;
  echo " (€) Euros.";
?>
