<?php
$anfang = 24;
$ende = 12;
?>
<!doctype html>
<html>
<head>
<title>Zaehlen</title>
</head>
<body>
<p>
<?php
if ($anfang < $ende) {
// Erste Zahl ist kleiner als zweite: aufwärts zählen
while ($anfang <= $ende) {
echo $anfang," ";
$anfang++;
}
} elseif ($anfang > $ende) {
// Erste Zahl ist größer als zweite: abwärts zählen
while ($anfang >= $ende) {
echo $anfang," ";
$anfang--;
}
} else {
// Beide Zahlen sind gleich
echo "$anfang ist gleich $ende; es wird nicht gezählt.";
}
?>
</p>
</body>
</html>

