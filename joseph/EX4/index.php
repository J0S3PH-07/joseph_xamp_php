<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 4 - Encuesta Música</title>
</head>
<body>
  <h1>Encuesta: ¿Qué estilo de música te gusta más?</h1>

  <?php
  if (isset($_POST['musica'])) {
      $musica = $_POST['musica'];
      switch ($musica) {
          case "rock":
              echo "<p>¡Te gusta el rock! Energía y guitarras potentes.</p>";
              break;
          case "pop":
              echo "<p>¡Te gusta el pop! Ritmos alegres y pegadizos.</p>";
              break;
          case "jazz":
              echo "<p>¡Te gusta el jazz! Estilo relajado y elegante.</p>";
              break;
          case "clasica":
              echo "<p>¡Te gusta la música clásica! Calma y armonía.</p>";
              break;
          default:
              echo "<p>Selecciona un estilo para ver el mensaje.</p>";
      }
      echo '<p><a href="">Volver</a></p>';
  } else {
  ?>
    <form method="post">
      <input type="radio" name="musica" value="rock" required> Rock<br>
      <input type="radio" name="musica" value="pop"> Pop<br>
      <input type="radio" name="musica" value="jazz"> Jazz<br>
      <input type="radio" name="musica" value="clasica"> Clásica<br><br>
      <input type="submit" value="Enviar">
    </form>
  <?php
  }
  ?>
</body>
</html>
