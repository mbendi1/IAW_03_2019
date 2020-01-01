<?php
//Definimos las variables que tomamos de clientForm.php
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $edad = $_POST["edad"];
  $email = $_POST["email"];
  $country = $_POST["country"];
  $checkin = $_POST["checkin"];
  $checkout = $_POST["checkout"];
  $deposito = $_POST["deposito"];
  $sexo = $_POST["sexo"];
  $room = $_POST["room"];
  $politica = $_POST["politica"];

//Definimos variables
  $validado = "CORRECTO";

//Arreglamos datos necesarios

  $factual = date("Y-m-d");
  $fentrada = explode("-",$checkin);
  $fsalida = explode("-",$checkout);
  $vapellidos = explode(" ",$apellidos);
  $deplibras = $deposito * (1.17);

//definimos el patrón que emplearemos para no introducir números o caracteres extraños,
  $patron_texto = "/^[a-zA-ZñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

//Validación del nombre
  if (isset($_POST["nombre"])) {
    if (empty($_POST["nombre"])) {
      echo "<div style=\"color:#FF0000\">Nombre: . El campo Nombre no puede quedar en blanco.</div>";
    }
    else {
      if (preg_match($patron_texto, $_POST["nombre"])) {
        echo "Nombre: $nombre. $validado";
        echo "<br>";
      }
      else {
        echo "<div style=\"color:#FF0000\">Nombre: $nombre. El nombre sólo puede contener letras y espacios.</div>";
      }
    }
  }

//Validación del Apellido
  if (isset($_POST["apellidos"])) {
    if (empty($_POST["apellidos"])) {
      echo "<div style=\"color:#FF0000\"> Apellidos: . El campo Apellidos no puede quedar en blanco.</div>";
    }
    else {
      if (count($vapellidos) <> 2) {
        echo "<div style=\"color:#FF0000\">Debe introducir los dos apellidos separados por un espacio.</div>";
      }
      else {
        if (preg_match($patron_texto, $_POST["apellidos"])) {
          echo "1er Apellido: " . $vapellidos[0] . ". 2o Apellido: " . $vapellidos[1] . ". " . $validado . "<br>";
        }
        else {
          echo "<div style=\"color:#FF0000\"> Apellidos: $apellidos. El Apellido sólo puede contener letras y espacios.</div>";
        }
      }
    }
  }

  //Validación de la edad. Deberá estar entre 18 y 120 años.
  if (isset($_POST["edad"])) {
    if ($_POST["edad"] > 17 and ($_POST["edad"] < 120)) {
    echo "Edad: $edad años. $validado";
    echo "<br>";
    }
    else {
      echo "<div style=\"color:#FF0000\">La edad debe estar comprendida entre 18 y 119 años.</div>";
    }
  }

  //Validación del sexo.
  if (isset($_POST["sexo"])) {
    echo "Sexo: $sexo. $validado" ;
    } else {
      echo "<div style=\"color:#FF0000\">Sexo no seleccionado, Vuelva atrás y corríjalo.</div>";
    }
    echo "<br>";
//Validación del Correo Electrónico
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "Correo Electrónico: " . $email . ". " . $validado . "<br>";
    }
    else {
      echo "<div style=\"color:#FF0000\"> Correo Electrónico: $email. Revisa la dirección de correo.</div>";
    }

//Validación de la  nacionalidad.
if (isset($_POST["country"])) {
  if (empty($_POST["country"])) {
    echo "<div style=\"color:#FF0000\">Nacionalidad: . El campo Nacionalidad no puede quedar en blanco.</div>";
  }
  else {
    if (preg_match($patron_texto, $_POST["country"])) {
      echo "Nacionalidad: " . $country ." . " . $validado . "<br>";
    }
    else {
      echo "<div style=\"color:#FF0000\">Nacionalidad: $country. La nacionalidad solo puede contener letras y espacios.</div>";
    }
  }
}

//Validación de la fecha de entrada
if (isset($_POST["checkin"])) {
  if (empty($_POST["checkin"])) {
    echo "<div style=\"color:#FF0000\">Fecha de Entrada: . La fecha de entrada no puede quedar en blanco.</div>";
  }
  if (count($fentrada) == 3 && checkdate($fentrada[1], $fentrada[2], $fentrada[0])){
   if ($factual <= $checkin) {
      echo "Fecha de Entrada: " . $fentrada[2] . " del " . $fentrada[1] . " de ". $fentrada[0] . ". " . $validado .  "<br>";
    }
    else {
      echo "<div style=\"color:#FF0000\">Fecha de Entrada: . Fecha incorrecta o no es superior a la fecha actual.</div>";
    }
  }
}

//Validación de la fecha de salida
if (isset($_POST["checkout"])) {
  if (empty($_POST["checkout"])) {
    echo "<div style=\"color:#FF0000\">Fecha de Salida: . La fecha de salida no puede quedar en blanco.</div>";
  }
  if (count($fsalida) == 3 && checkdate($fsalida[1], $fsalida[2], $fsalida[0])){
   if (($checkin < $checkout) AND ($factual < $checkout)) {
      echo "Fecha de Salida: " . $fsalida[2] . " del " . $fsalida[1] . " de ". $fsalida[0] . ". " . $validado .  "<br>";
    }
    else {
      echo "<div style=\"color:#FF0000\">Fecha de Salida: . Fecha incorrecta o no es superior a la fecha de hoy o de entrada.</div>";
    }
  }
}

//Validación del depósito.
if (isset($_POST["deposito"])) {
  if ($_POST["deposito"] > 100) {
  echo "Depósito: " . $deposito . " Euros. Son un total de " . $deplibras . "  Libras. " . $validado . "<br>";
  }
  else {
    echo "<div style=\"color:#FF0000\">El depósito debe ser superior a 100 Euros.</div>";
  }
}

//Validación de la selección de habitación.
  if (isset($_POST["room"])) {
      echo "Habitación: $room. $validado" ;
      echo "<br>";
    } else {
    echo "<div style=\"color:#FF0000\">Habitación: No seleccionada. Vuelva atrás y seleccione una habitación.</div>";
    }

//Validación de la aceptación de la política.
  if (isset($_POST["politica"]) && $_POST["politica"] == "1") {
    echo "Política de protección de datos aceptada. " . $validado . "<br>";
    }
    else {
      echo "<div style=\"color:#FF0000\">El cliente no ha aceptado la política de protección de datos.</div>";
    }

?>
