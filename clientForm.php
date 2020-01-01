<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>BALEARIC HOTEL</title>
    <style>.error {#FF0000;}</style>
  </head>
  <body>
    <header>
      <h1 style="text-align:center;">Balearic Hotel</h1>
    </header>
    <section>
      <h1>FORMULARIO DE REGISTRO</h1>
      <form action="validationForm.php" method="post">
          <br>
          NOMBRE: <input name="nombre" type="text">
          APELLIDOS: <input name="apellidos" type="text">
          EDAD: <input name="edad" type="number">
          <br><br>
          SEXO: <input type="radio" name="sexo" value="Mujer">Mujer
          <input type="radio" name="sexo" value="Hombre">Hombre
          <input type="radio" name="sexo" value="Otro Género">Otro Género
          <br><br>
          CORREO ELECTRONICO: <input name="email" type="text">
          NACIONALIDAD: <input name="country" type="text">
          <br><br>
          FECHA DE ENTRADA: <input name="checkin" type="date">
          <br>
          FECHA DE SALIDA: <input name="checkout" type="date">
          <br>
          <br>
          DEPOSITO: <input name="deposito" type="number">
          <br>
          <h4>TIPO DE HABITACIÓN:</h4>
          <input type="radio" name="room" value=">Single">Single
          <input type="radio" name="room" value="Doble King Size">Doble King Size
          <input type="radio" name="room" value="Doble camas separadas">Doble con camas separadas
          <input type="radio" name="room" value="Triple">Triple
          <input type="radio" name="room" value="Cuádruple">Cuádruple
          <br><br>
            <input type="checkbox" name="politica" value="1">
            <a href="policy.html"> Conoce y acepta nuestra política de protección de datos </a>
          <br><br>
          <p style="text-align:center;">
            SI TODO ES CORRECTO, PULSE <input type="submit" value="Enviar">
          </p>
      </form>
    </section>
    <footer>
      <p style="text-align:center;">(2019-2020)  Marcos Benito Diaz.</p>
    </footer>
  </body>
</html>
