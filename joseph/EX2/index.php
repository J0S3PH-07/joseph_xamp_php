<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Exercici 2 - Conversor Euros / Dòlars</title>
</head>
<body>
  <h1>Conversor de moneda</h1>

  <?php
  if (isset($_POST['quantitat'])) {
      $quantitat = $_POST['quantitat'];
      $tipus = $_POST['tipus'];

      // Valor aproximat per a la conversió
      $eur_a_usd = 1.08;
      $usd_a_eur = 0.93;

      if ($tipus == "eur_usd") {
          $resultat = $quantitat * $eur_a_usd;
          echo "<p>$quantitat € són $resultat dòlars.</p>";
      } else {
          $resultat = $quantitat * $usd_a_eur;
          echo "<p>$quantitat dòlars són $resultat euros.</p>";
      }

      echo '<p><a href="">Tornar</a></p>';
  } else {
  ?>
    <form method="post">
      Quantitat: <input type="number" name="quantitat" step="0.01" required><br><br>
      <input type="radio" name="tipus" value="eur_usd" checked> Euros > Dòlars<br>
      <input type="radio" name="tipus" value="usd_eur"> Dòlars > Euros<br><br>
      <input type="submit" value="Convertir">
    </form>
  <?php
  }
  ?>
</body>
</html>
