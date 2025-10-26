<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 5 - Cálculo de IVA</title>
</head>
<body>
  <h1>Calcular precio con IVA</h1>

  <?php
  if (isset($_POST['precio'])) {
      $precio = floatval($_POST['precio']);
      $iva = floatval($_POST['iva']);
      $total = $precio + ($precio * $iva / 100);
      echo "<p>Precio sin IVA: $precio €</p>";
      echo "<p>IVA aplicado: $iva%</p>";
      echo "<p><strong>Precio total con IVA: " . number_format($total, 2) . " €</strong></p>";
      echo '<p><a href="">Volver</a></p>';
  } else {
  ?>
    <form method="post">
      Introduce el precio: <input type="number" name="precio" step="0.01" required><br><br>
      Elige el tipo de IVA:<br>
      <input type="radio" name="iva" value="4" required> 4% (superreducido)<br>
      <input type="radio" name="iva" value="10"> 10% (reducido)<br>
      <input type="radio" name="iva" value="21"> 21% (general)<br><br>
      <input type="submit" value="Calcular">
    </form>
  <?php
  }
  ?>
</body>
</html>
