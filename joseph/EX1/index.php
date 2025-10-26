<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Exercici 1 - Formulari de contacte</title>
</head>
<body>
  <h1>Formulari de contacte</h1>

  <?php
  if (isset($_POST['nom'])) {
      $nom = $_POST['nom'];
      $email = $_POST['email'];
      echo "Missatge rebut, $nom. Gràcies per contactar. Et respondrem a $email.";
  } else {
  ?>
    <form method="post">
      Nom: <input type="text" name="nom" required><br><br>
      Cognoms: <input type="text" name="cognoms"><br><br>
      Email: <input type="email" name="email" required><br><br>
      Missatge:<br>
      <textarea name="missatge" rows="4" cols="40"></textarea><br><br>
      <input type="submit" value="Enviar">
    </form>
  <?php
  }
  ?>
</body>
</html>
