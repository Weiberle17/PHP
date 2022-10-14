<html>
<body>
<?php
// Feld anlegen und Werte zuweisen in EINEM Schritt
$tp = array("Montag"=>17.5, "Dienstag"=>19.2,
  "Mittwoch"=>21.8);
// nachträgliche Erweiterung problemlos möglich
$tp["Donnerstag"] = 21.6;
$tp["Freitag"] = 17.5;
$tp["Samstag"] = 20.2;
$tp["Sonntag"] = 16.6;
// Zugriff auf ein bestimmtes Element (z. B. Montag) ?
echo "<p>" . $tp["Montag"] . "</p>";
// Ausgabe aller Elemente als Tabelle
// Tabellenkopf mit Wochentag und Temperatur
echo "<table border='1'>";
echo "<tr><td><b>Wochentag</b></td>";
echo "<td><b>Temperatur</b></td></tr>";
// Alle Keys und Values aus dem Feld
foreach($tp as $name=>$wert)
{
  echo "<tr><td>$name</td>"
    . "<td align='right'>$wert</td></tr>";
}
echo "</table>";
// Aufsummieren und Ausgabe aller Zahlen (!) aus dem Feld
$summe = 0;
foreach($tp as $wert)
{
  $summe = $summe + $wert;
}
echo "<p>Summe: $summe</p>";
?>
</body>
</html>
