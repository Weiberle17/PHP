<html>
<head>
<?php
function vtauschen($a, $b)
{
  $temp = $a;
  $a = $b;
  $b = $temp;
}
function rtauschen(&$a, &$b)
{
  $temp = $a;
  $a = $b;
  $b = $temp;
}
?>
</head>
<body>
<?php
$x = 12;
$y = 18;
echo "<p>Methode 1, vorher: $x, $y<br />";
vtauschen($x,$y);
echo "Methode 1, nachher: $x, $y</p>";
$x = 12;
$y = 18;
echo "<p>Methode 2, vorher: $x, $y<br />";
rtauschen($x,$y);
echo "Methode 2, nachher: $x, $y</p>";
?>
</body>
</html>
