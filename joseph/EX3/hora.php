<?php
date_default_timezone_set("Europe/Madrid");
$hora = date("H");
$minutos = date("i");

if ($hora >= 5 && $hora < 14) {
    $saludo = "Bon dia";
} elseif ($hora >= 14 && $hora < 19) {
    $saludo = "Bona tarda";
} else {
    $saludo = "Bona nit";
}

echo "<h1>$saludo!</h1>";
echo "<p>Hora del servidor: $hora:$minutos</p>";
?>
