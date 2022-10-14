<!doctype html>
<?php
$kapital = $_POST["kapital"];
$laufzeit = $_POST["laufzeit"];
if ($laufzeit <= 3) { $zins = 3; $faktor = 1.03;}
elseif ($laufzeit <= 5) { $zins = 4; $faktor = 1.04;} 
elseif ($laufzeit <= 10) { $zins = 5; $faktor = 1.05;}
else { $zins = 6; $faktor = 1.06;}
$x = 1;
$wert = ($kapital * 1000);
while ($x <= $laufzeit) {
  $wert = ($wert * $faktor);
  $ergebnis["$x"] = $wert;
  $x++;
}
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Auswertung</title>
</head>
<body>
<p>
Sie haben <?=$kapital ?>.000$ Kapital.<br>
  Sie haben eine Laufzeit von <?=$laufzeit ?> Jahren genommen.<br>
    Die folgende Tabelle zeigt den Verlauf der Investition.<br>
  <?php
echo "<table border='1'>";
echo "<tr><th>Jahre</th>"."<th>Vermögen</th></tr>";
foreach ($ergebnis as $jahr=>$geld) {
  $geld = number_format($geld,2,",",".");
  echo "<tr><td>$jahr</td>"."<td>$geld</td></tr>";
}
echo "</table>";
?>
</p>
</body>
</html>
