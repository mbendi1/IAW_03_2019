<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>BALEARIC HOTEL</title>
  </head>
  <body>
    <header>
      <h1 style="text-align:center;">Balearic Hotel</h1>
    </header>
    <section>
      <h1>FORMULARIO DE REGISTRO</h1>
      <form action="validationForm.php" method="post">
        <p>
          Nombre <input name="nombre" type="text">
          Apellidos <input name="apellidos" type="text">
          Edad <input name="edad" type="number">
          Sexo <input type="radio" name="sexo" value="mujer">mujer
          <input type="radio" name="sexo" value="hombre">hombre
        </p>
        <p>
          Correo Electónico <input name="email" type="text">
          Nadionalidad <input name="country" type="text">
        </p>
        <p>
          Fecha de entrada <input name="checkin" type="date">
          Fecha de salida <input name="checkout" type="date">
          Depósito <input name="deposito" type="number">
      </p>
        <p>Si todo es correcto, pulse <input type="submit" value="Enviar"></p>
      </form>
    </section>
  </body>
  <footer>
    <p style="text-align:center;">(2019-2020)  Marcos Benito Diaz.</p>
  </footer>
</html>
